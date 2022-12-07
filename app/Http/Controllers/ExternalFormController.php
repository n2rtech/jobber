<?php

namespace App\Http\Controllers;

use App\Models\ExternalForm;
use App\Models\ExternalFormQuestion;
use App\Models\ExternalFormQuestionOption;
use App\Models\ExternalFormTab;
use Illuminate\Http\Request;

class ExternalFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $external_forms = ExternalForm::get();
        return view('settings.external-form.index', compact('external_forms'));
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
        //
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
        $external_form = ExternalForm::find($id);
        return view('settings.external-form.edit', compact('external_form'));
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
        $externalform = ExternalForm::find($id);

        if($externalform->type == 'single'){
            ExternalFormQuestion::where('external_form_id', $id)->delete();
            ExternalFormQuestionOption::where('external_form_id', $id)->delete();
            if(!empty($request->question && is_array($request->question))){

                foreach($request->question as $key => $value){

                    $question                       = new ExternalFormQuestion();
                    $question->external_form_id     = $externalform->id;
                    $question->question             = $value['question'];
                    $question->type                 = $value['type'];
                    $question->save();

                    if(isset($value['option']) && !empty($value['option'] && is_array($value['option']))){

                        foreach($value['option'] as $newkey => $optionvalue){

                            $option                                 = new ExternalFormQuestionOption();
                            $option->external_form_id               = $externalform->id;
                            $option->external_form_question_id      = $question->id;
                            $option->option                         = $optionvalue;
                            $option->save();

                        }

                    }

                }

            }
        }else{
            $externalformtab = ExternalFormTab::find($request->tab_id);
            $externalformtab->tab = $request->tab;
            $externalformtab->save();

            ExternalFormQuestion::where('external_form_tab_id', $request->tab_id)->delete();
            ExternalFormQuestionOption::where('external_form_tab_id', $request->tab_id)->delete();
            if(!empty($request->question && is_array($request->question))){

                foreach($request->question as $key => $value){

                    $question                       = new ExternalFormQuestion();
                    $question->external_form_id     = $externalform->id;
                    $question->external_form_tab_id = $request->tab_id;
                    $question->question             = $value['question'];
                    $question->type                 = $value['type'];
                    $question->save();

                    if(isset($value['option']) && !empty($value['option'] && is_array($value['option']))){

                        foreach($value['option'] as $newkey => $optionvalue){

                            $option                                 = new ExternalFormQuestionOption();
                            $option->external_form_id               = $externalform->id;
                            $option->external_form_tab_id           = $request->tab_id;
                            $option->external_form_question_id      = $question->id;
                            $option->option                         = $optionvalue;
                            $option->save();

                        }

                    }

                }

            }
        }


        return redirect()->route('external-forms.index')->with('success', 'External Form Updated Successfully !');
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
}
