<?php

namespace App\Http\Controllers;

use App\Models\JobForm;
use App\Models\JobFormQuestion;
use App\Models\JobFormQuestionOption;
use Illuminate\Http\Request;

class JobFormController extends Controller
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
        $job_forms = JobForm::get();
        return view('settings.job-form.index', compact('job_forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.job-form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jobform        = new JobForm;
        $jobform->title = $request->title;
        $jobform->save();

        if(!empty($request->question && is_array($request->question))){

            foreach($request->question as $key => $value){

                $question               = new JobFormQuestion();
                $question->job_form_id  = $jobform->id;
                $question->question     = $value['question'];
                $question->type         = $value['type'];
                $question->save();

                if(isset($value['option']) && !empty($value['option'] && is_array($value['option']))){

                    foreach($value['option'] as $newkey => $optionvalue){

                        $option                         = new JobFormQuestionOption();
                        $option->job_form_id            = $jobform->id;
                        $option->job_form_question_id   = $question->id;
                        $option->option                 = $optionvalue;
                        $option->save();

                    }

                }

            }

        }

        return redirect()->route('job-forms.index')->with('success', 'Job Form Saved Successfully !');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job_form = JobForm::find($id);
        return view('settings.job-form.edit', compact('job_form'));
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
        $jobform = JobForm::find($id);
        $jobform->title = $request->title;
        $jobform->save();

        JobFormQuestion::where('job_form_id', $id)->delete();
        JobFormQuestionOption::where('job_form_id', $id)->delete();
        if(!empty($request->question && is_array($request->question))){

            foreach($request->question as $key => $value){

                $question               = new JobFormQuestion();
                $question->job_form_id  = $jobform->id;
                $question->question     = $value['question'];
                $question->type         = $value['type'];
                $question->save();

                if(isset($value['option']) && !empty($value['option'] && is_array($value['option']))){

                    foreach($value['option'] as $newkey => $optionvalue){

                        $option                         = new JobFormQuestionOption();
                        $option->job_form_id            = $jobform->id;
                        $option->job_form_question_id   = $question->id;
                        $option->option                 = $optionvalue;
                        $option->save();

                    }

                }

            }

        }

        return redirect()->route('job-forms.index')->with('success', 'Job Form Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JobForm::find($id)->delete();
        return redirect()->route('job-forms.index')->with('success', 'Job Form deleted successfully!');
    }
}
