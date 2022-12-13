<?php

namespace App\Http\Controllers;

use App\Models\Banh;
use App\Models\Country;
use App\Models\Customer;
use App\Models\ExternalForm;
use App\Models\Job;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if (isset($request->form)) {
            $external_form = ExternalForm::where('slug', $request->form)->first();
            if (isset($external_form)) {
                return view('forms.dynamic-form', compact('external_form'));
            } else {
                abort(404);
            }
        } else {
            $countries = Country::get(['country_name']);
            return view('forms.form', compact('countries'));
        }
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::where('token', $id)->first();

        if(isset($job)){
            $countries = Country::get(['country_name']);
            return view('forms.form', compact('job', 'countries'));
        } else {
            abort(404);
        }

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
        return $request->all();
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

    public function banh(Request $request)
    {
        $job                            = Job::where('id', $request->job_id)->first();
        $banh                           = new Banh();
        $banh->job_id                   = $request->job_id;
        $banh->customer_id              = $job->customer_id;
        $banh->firstname                = $request->firstname;
        $banh->lastname                 = $request->lastname;
        $banh->address_1                = $request->address_1;
        $banh->address_2                = $request->address_2;
        $banh->city                     = $request->city;
        $banh->county                   = $request->county;
        $banh->eir_code                 = $request->eir_code;
        $banh->country                  = $request->country;
        $banh->mobile_1                 = $request->mobile_1;
        $banh->phone                    = $request->phone;
        $banh->email                    = $request->email;
        $banh->dwelling_type            = $request->dwelling_type;
        $banh->plan                     = $request->plan;
        $banh->area                     = $request->area;
        $banh->floor_type               = $request->floor_type;
        $banh->floor_type_note1         = $request->note_1;
        $banh->floor_type_note2         = $request->note_2;
        $banh->wall_type                = $request->wall_type;
        $banh->wall_type_note_1          = $request->note_3;
        $banh->wall_type_note_2          = $request->note_4;
        $banh->tv                       = $request->tv;
        $banh->wifi                     = $request->wifi;
        $banh->multiroom_music          = $request->multiroom_music;
        $banh->mobile_phone_repeaters   = $request->mobile_phone_repeaters;
        $banh->mobile_operator          = $request->mobile_operator;
        $banh->information              = $request->information;
        $banh->move_in_date             = $request->date;
        $banh->save();

        return response()->json('Thank you for your response, our team will get back to you shortly!');
    }
}
