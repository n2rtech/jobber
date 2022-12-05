<?php

namespace App\Http\Controllers;

use App\Models\EmailTemplate;
use App\Models\EmailTemplateContent;
use Illuminate\Http\Request;

class EmailTemplateController extends Controller
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
        $standard_templates = EmailTemplate::where('type', 'standard')->where('mode','standard')->get();
        return view('settings.email-template.index', compact('standard_templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.email-template.create');
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
        $template = EmailTemplate::find($id);
        return view('settings.email-template.edit', compact('template'));
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

        EmailTemplateContent::where('email_template_id', $id)->delete();

        if(!empty($request->template) && is_array($request->template)){
            foreach($request->template as $key => $value){
                $template                           = new EmailTemplateContent();
                $template->email_template_id        = $id;
                $template->template_name            = $value['template_name'];
                $template->subject                  = $value['subject'];
                $template->message                  = $value['message'];
                $template->save();
            }
        }

        // $template = EmailTemplate::find($id);
        // $template->subject = $request->subject;
        // $template->message = $request->message;
        // $template->save();

        return redirect()->route('email-templates.index')->with('success', 'Email Templates Updated Successfully!');
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

    public function autocomplete(Request $request)
    {
        $template = EmailTemplate::find($request->id);

        return response()->json(['subject' => $template->default_subject, 'message' => $template->default_message]);
    }
}
