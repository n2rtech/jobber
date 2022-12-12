<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\Product;
use App\Models\Setting;
use App\Models\TextTemplate;
use App\Models\TextTemplateContent;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
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
    public function index(Request $request)
    {
        $start_date         = isset($request->date) ? Carbon::parse($request->date)->startOfWeek()->format('Y-m-d') : null ;
        $scheduled_jobs     = Job::where('scheduled', 'yes ')->whereNot('status', 'completed')->orderBy('start', 'asc')->get();
        $unscheduled_jobs   = Job::where('scheduled', 'no ')->orderBy('id', 'desc')->get();
        $users              = User::where('role', 'worker')->get(['id', 'name']);
        $setting            = Setting::where('type', 'calendar')->value('value');
        $days               = Setting::where('type', 'calendar')->value('days');
        $all_days           = ["0", "1", "2", "3", "4", "5", "6"];
        $result             = array_diff($all_days, $days);
        $hidden_days        = array_values($result);
        $template           = EmailTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        $text_template      = TextTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();

        $period = new CarbonPeriod($setting['timing_starts'], '30 minutes', $setting['timing_ends']);
        $slots = [];
        foreach ($period as $item) {
            array_push($slots, $item->format("H:i:s"));
        }

        return view('schedules.list', compact('scheduled_jobs', 'unscheduled_jobs', 'users', 'setting', 'hidden_days', 'template', 'text_template', 'slots', 'start_date'));
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
        $time =  Carbon::createFromFormat('Y-m-d H:i:s', $request->start)->format('H:i:s');

        if($time == '00:00:00'){
            $start = Carbon::createFromFormat('Y-m-d H:i:s', $request->start)->addHours(9);
        }else{
            $start = Carbon::createFromFormat('Y-m-d H:i:s', $request->start);
        }

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
        $current_status = Job::where('id', $request->id)->value('status');

        if($current_status == 'confirmed' || $current_status == 'provisional'){
            $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end]);
        }else{
            $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end, 'status' => 'pending']);
        }

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

        $current_status = Job::where('id', $request->id)->value('status');

        if($current_status == 'confirmed' || $current_status == 'provisional'){
            $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end]);
        }else{
            $job   = Job::where('id', $request->id)->update(['scheduled' => 'yes', 'start' => $start, 'end' => $end, 'status' => 'pending']);
        }
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
        $text_template      = TextTemplate::where('type', 'jobs')->where('mode', 'confirmation')->first();
        $setting            = Setting::where('type', 'calendar')->value('value');
        $period = new CarbonPeriod($setting['timing_starts'], '30 minutes', $setting['timing_ends']);
        $slots = [];
        foreach ($period as $item) {
            array_push($slots, $item->format("H:i:s"));
        }

        return view('schedules.details', compact('job', 'users', 'products', 'template','slots', 'text_template'));
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
        $texttemplate = TextTemplateContent::where('id', $request->text_template)->first();
        $subject  = getSubject($template->subject, $request->id);
        $message  = getMessage($template->message, $request->id);
        $text_message =  getMessage($texttemplate->message, $request->id);
        $mobile_options = '';

        if(isset($job->customer->mobile_1)){
            $mobile_options .= '<option value='.$job->customer->mobile_1.'>Mobile 1: '.$job->customer->mobile_1.'</option>';
        }
        if(isset($job->customer->mobile_2)){
            $mobile_options .= '<option value='.$job->customer->mobile_2.'>Mobile 2: '.$job->customer->mobile_2.'</option>';
        }
        if(isset($job->customer->phone)){
            $mobile_options .= '<option value='.$job->customer->phone.'>Phone: '.$job->customer->phone.'</option>';
        }
        return response()->json(['email' => $job->customer->email, 'mobile_options' => $mobile_options, 'subject' => $subject, 'message' => $message,  'text_message' => $text_message]);
    }
}
