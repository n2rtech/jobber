<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scheduled_jobs     = Job::where('scheduled', 'yes ')->orderBy('start', 'asc')->get();
        $unscheduled_jobs   = Job::where('scheduled', 'no ')->orderBy('id', 'desc')->get();
        $users              = User::where('role', 'worker')->get(['id', 'name']);
        $setting            = Setting::where('type', 'calendar')->value('value');
        $days               = Setting::where('type', 'calendar')->value('days');
        $all_days           = ["0", "1", "2", "3", "4", "5", "6"];
        $result             = array_diff($all_days, $days);
        $hidden_days        = array_values($result);
        $template           = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();

        return view('schedules.list', compact('scheduled_jobs', 'unscheduled_jobs', 'users', 'setting', 'hidden_days', 'template'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $start = Carbon::createFromFormat('Y-m-d H:i:s', $request->start);

        switch ($request->end) {
            case 'addHour':
                $end   = Carbon::createFromFormat('Y-m-d H:i:s', $request->start)->addHour();
                break;

            case 'allDay':
                $end   = Carbon::createFromFormat('Y-m-d H:i:s', $request->start)->endOfDay();
                break;

            default:
                $end   = Carbon::createFromFormat('Y-m-d H:i:s', $request->end);
                break;
        }

        $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end, 'status' => 'pending']);
        return response()->json(['success' => 'success']);
    }

    public function updateTiming(Request $request){
        $start = Carbon::createFromFormat('m/d/Y H:i:s', $request->start);

        switch ($request->end) {
            case 'addHour':
                $end   = Carbon::createFromFormat('m/d/Y H:i:s', $request->start)->addHour();
                break;

            case 'allDay':
                $end   = Carbon::createFromFormat('m/d/Y H:i:s', $request->start)->endOfDay();
                break;

            default:
                $end   = Carbon::createFromFormat('m/d/Y H:i:s', $request->end);
                break;
        }

        $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end, 'status' => 'pending']);
        return response()->json(['success' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job            = Job::find($id);
        $products       = Product::get();
        $users          = User::where('role', 'worker')->get(['id', 'name']);
        if(!empty($job->job_forms) && is_array($job->job_forms)){
            $job->forms     = JobForm::whereIn('id', $job->job_forms)->get();
        }else{
            $job->forms     = [];
        }
        foreach($job->customer->allnotes as $note){
            $note->path = asset('storage/uploads/customers/' . $id . '/notes' .'/'. $note->file);
        }
        $template           = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        return view('schedules.details', compact('job', 'users', 'products', 'template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function emailTemplate(Request $request)
    {
        // return $request->all();
        $job      = Job::where('id', $request->id)->first();
        $template = EmailTemplateContent::where('id', $request->email_template)->first();
        $subject  = getSubject($template->subject, $request->id);
        $message  = getMessage($template->message, $request->id);

        return response()->json(['email' => $job->customer->email, 'subject' => $subject, 'message' => $message]);
    }
}
