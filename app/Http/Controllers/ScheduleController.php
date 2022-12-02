<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
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
        $scheduled_jobs     = Job::where('scheduled', 'yes ')->orderBy('id', 'desc')->get();
        $unscheduled_jobs   = Job::where('scheduled', 'no ')->orderBy('created_at', 'asc')->get();
        $users              = User::where('role', 'worker')->get(['id', 'name']);
        $setting            = Setting::where('type', 'calendar')->value('value');
        $days               = Setting::where('type', 'calendar')->value('days');
        $all_days           = ["0", "1", "2", "3", "4", "5", "6"];
        $result        = array_diff($all_days, $days);
         $hidden_days = array_values($result);

        return view('schedules.list', compact('scheduled_jobs', 'unscheduled_jobs', 'users', 'setting', 'hidden_days'));
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
        foreach($job->jobnotes as $note){
            $note->path = asset('storage/uploads/jobs/' . $id . '/notes' .'/'. $note->file);
        }
        return view('schedules.details', compact('job', 'users', 'products'));
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
        $template = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        $subject  = getSubject($template->subject, $request->id);
        $message  = getMessage($template->message, $request->id);

        return response()->json(['subject' => $subject, 'message' => $message]);
    }
}
