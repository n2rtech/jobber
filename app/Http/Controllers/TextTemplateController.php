<?php

namespace App\Http\Controllers;

use App\Models\TextTemplate;
use App\Models\TextTemplateContent;
use Illuminate\Http\Request;

class TextTemplateController extends Controller
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
        $standard_templates = TextTemplate::where('type', 'standard')->where('mode','standard')->get();
        return view('settings.text-template.index', compact('standard_templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('settings.text-template.create');
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
        $template = TextTemplate::find($id);
        return view('settings.text-template.edit', compact('template'));
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

        TextTemplateContent::where('text_template_id', $id)->delete();

        if(!empty($request->template) && is_array($request->template)){
            foreach($request->template as $key => $value){
                $template                           = new TextTemplateContent();
                $template->text_template_id        = $id;
                $template->template_name            = $value['template_name'];
                $template->message                  = $value['message'];
                $template->save();
            }
        }

        // $template = TextTemplate::find($id);
        // $template->subject = $request->subject;
        // $template->message = $request->message;
        // $template->save();

        return redirect()->route('text-templates.index')->with('success', 'Text Templates Updated Successfully!');
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
        $template = TextTemplate::find($request->id);

        return response()->json(['message' => $template->default_message]);
    }
}
