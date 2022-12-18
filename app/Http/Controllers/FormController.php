<?php

namespace App\Http\Controllers;

use App\Models\Banh;
use App\Models\Country;
use App\Models\Customer;
use App\Models\CustomerNote;
use App\Models\ExternalForm;
use App\Models\ExternalFormQuestion;
use App\Models\ExternalFormQuestionOption;
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

        if (isset($job)) {
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
        $externalform = ExternalForm::find($id);
        // return $request->all();
        if ($externalform->type == 'single') {

            $data = [];

            if (!empty($request->question && is_array($request->question))) {
                foreach ($request->question as $key => $value) {

                    $question   = ExternalFormQuestion::where('id', $key)->first();

                    $field      = strtolower(str_replace(' ', '', $question->question));

                    if ($field == 'name') {
                        $data['name'] = $value['answer'];
                    }

                    if ($field == 'email') {
                        $data['email'] = $value['answer'];
                    }

                    if ($field == 'phonenumber') {
                        $data['phone'] = $value['answer'];
                    }

                    if ($field == 'message') {
                        $data['note'] = $value['answer'];
                    }
                }
            }

            $customer_exists = Customer::where('email', $data['email'])->exists();

            if ($customer_exists) {
                $customer = Customer::where('email', $data['email'])->first();

                if (isset($data['note'])) {
                    $note                   = new CustomerNote();
                    $note->customer_id      = $customer->id;
                    $note->user_id          = null;
                    $note->note             = $data['note'];
                    $note->save();
                }
            } else {
                $customer = Customer::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'type' => 'sales-lead',
                    'country' => 'Ireland',
                ]);
                if (isset($data['note'])) {
                    $note                   = new CustomerNote();
                    $note->customer_id      = $customer->id;
                    $note->user_id          = null;
                    $note->note             = $data['note'];
                    $note->save();
                }
            }

            return response()->json('Thank you for contacting us, Our Team will get back to you very soon!');
        } else {

            $data = [];
            $note = ' <ul>';
            if (!empty($request->question && is_array($request->question))) {
                foreach ($request->question as $key => $value) {

                    $question   = ExternalFormQuestion::where('id', $key)->first();

                    $field      = strtolower(str_replace(' ', '', $question->question));

                    if ($field == 'name') {
                        $data['name'] = $value['answer'];
                    }

                    if ($field == 'email') {
                        $data['email'] = $value['answer'];
                    }

                    if ($field == 'phonenumber') {
                        $data['phone'] = $value['answer'];
                    }

                    if ($field == 'message') {
                        $data['note'] = $value['answer'];
                    }

                    if ($field == 'eircode') {
                        $data['eir_code'] = $value['answer'];
                    }

                    if (isset($value['answer'])) {

                        if ($question->type == 'text' || $question->type == 'textarea') {
                            if ($question->question == 'Name' || $question->question == 'Email' || $question->question == 'Phone Number' || $question->question == 'Eircode') {
                                //
                            } else {
                                $note .= '<li>' . $question->question . ': ' . $value['answer'] . '</li>';
                            }
                        }
                        if ($question->type == 'radio' || $question->type == 'dropdown') {
                            $value_answer = ExternalFormQuestionOption::where('id', $value['answer'])->value('option');
                            $note .= '<li>' . $question->question . ': ' . $value_answer . '</li>';
                        }
                        if ($question->type == 'checkbox') {
                            foreach ($value['answer'] as $answer) {
                                $value_answer = ExternalFormQuestionOption::where('id', $answer)->value('option');
                                $note .= '<li>' . $question->question . ': ' . $value_answer . '</li>';
                            }
                        }
                    }
                }
            }
            $note .= '<ul>';

            $customer_exists = Customer::where('email', $data['email'])->exists();

            if ($customer_exists) {
                $customer = Customer::where('email', $data['email'])->first();

                if (isset($note)) {
                    $newnote                   = new CustomerNote();
                    $newnote->customer_id      = $customer->id;
                    $newnote->user_id          = null;
                    $newnote->note             = $note;
                    $newnote->save();
                }
            } else {


                $customer = Customer::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                    'eir_code' => $data['eir_code'],
                    'country' => 'Ireland',
                    'type' => 'sales-lead',
                ]);
                if (isset($note)) {
                    $newnote                   = new CustomerNote();
                    $newnote->customer_id      = $customer->id;
                    $newnote->user_id          = null;
                    $newnote->note             = $note;
                    $newnote->save();
                }
            }

            return response()->json('Thank you for contacting us, Our Team will get back to you very soon!');
        }
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
        $job                                        = Job::where('id', $request->job_id)->first();
        $banh                                       = new Banh();
        $banh->job_id                               = $request->job_id;
        $banh->customer_id                          = $job->customer_id;
        $banh->firstname                            = $request->firstname;
        $banh->lastname                             = $request->lastname;
        $banh->mobile_1                             = $request->mobile_1;
        $banh->partner_firstname                    = $request->partner_firstname;
        $banh->partner_lastname                     = $request->partner_lastname;
        $banh->partner_mobile_1                     = $request->partner_mobile_1;
        $banh->address_1                            = $request->address_1;
        $banh->address_2                            = $request->address_2;
        $banh->city                                 = $request->city;
        $banh->county                               = $request->county;
        $banh->eir_code                             = $request->eir_code;
        $banh->country                              = $request->country;
        $banh->mobile_1                             = $request->mobile_1;
        $banh->email                                = $request->email;
        $banh->dwelling_type                        = $request->dwelling_type;
        $banh->plan                                 = $request->plan;
        $banh->area                                 = $request->area;
        $banh->floor_type                           = $request->floor_type;
        $banh->floor_type_note1                     = $request->note_1;
        $banh->floor_type_note2                     = $request->note_2;
        $banh->wall_type                            = $request->wall_type;
        $banh->wall_type_note_1                     = $request->note_3;
        $banh->wall_type_note_2                     = $request->note_4;
        $banh->tv                                   = $request->tv;
        $banh->wifi                                 = $request->wifi;
        $banh->multiroom_music                      = $request->multiroom_music;
        $banh->mobile_phone_repeaters               = $request->mobile_phone_repeaters;
        $banh->mobile_operator                      = $request->mobile_operator;
        $banh->building_contractor_firstname        = $request->building_contractor_firstname;
        $banh->building_contractor_lastname         = $request->building_contractor_lastname;
        $banh->building_contractor_phone            = $request->building_contractor_phone;
        $banh->building_contractor_email            = $request->building_contractor_email;
        $banh->electrical_contractor_firstname      = $request->electrical_contractor_firstname;
        $banh->electrical_contractor_lastname       = $request->electrical_contractor_lastname;
        $banh->electrical_contractor_phone          = $request->electrical_contractor_phone;
        $banh->electrical_contractor_email          = $request->electrical_contractor_email;
        $banh->information                          = $request->information;
        $banh->move_in_date                         = $request->date;
        $banh->isp                                  = $request->isp;
        $banh->discussed                            = $request->discussed;
        $banh->signature                            = $request->signature;
        $banh->signature_date                       = $request->signature_date;
        $banh->save();

        return response()->json('Thank you for your response, our team will get back to you shortly!');
    }
}
