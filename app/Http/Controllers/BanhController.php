<?php

namespace App\Http\Controllers;

use App\Models\Banh;
use App\Models\Cable;
use App\Models\CompanyDetail;
use App\Models\Country;
use App\Models\Customer;
use App\Models\Survey;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class BanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $customer = Customer::find($request->customer_id);
        $banh     = Banh::find($request->banh_id);
        $countries = Country::get(['country_name']);
        return view('customers.survey.create', compact('customer', 'banh', 'countries'));
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
        $survey                                     = new Survey();
        $survey->customer_id                        = $request->customer_id;
        $survey->banh_id                            = $request->banh_id;
        $survey->firstname                          = $request->firstname;
        $survey->lastname                           = $request->lastname;
        $survey->email                              = $request->email;
        $survey->phone                              = $request->phone;
        $survey->mobile_1                           = $request->mobile_1;
        $survey->partner_firstname                  = $request->partner_firstname;
        $survey->partner_lastname                   = $request->partner_lastname;
        $survey->partner_mobile_1                   = $request->partner_mobile_1;
        $survey->address_1                          = $request->address_1;
        $survey->address_2                          = $request->address_2;
        $survey->city                               = $request->city;
        $survey->county                             = $request->county;
        $survey->country                            = $request->country;
        $survey->eir_code                           = $request->eir_code;
        $survey->isp                                = $request->isp;
        $survey->telecompolfield                    = $request->telecompolfield;
        $survey->esbpolefield                       = $request->esbpolefield;
        $survey->virginmediafield                   = $request->virginmediafield;
        $survey->wirelessopeartorfield              = $request->wirelessopeartorfield;
        $survey->otherispfield                      = $request->otherispfield;
        $survey->isp_note                           = $request->isp_note;
        $survey->building_contractor                = $request->building_contractor;
        $survey->building_contractor_phone          = $request->building_contractor_phone;
        $survey->building_contractor_email          = $request->building_contractor_email;
        $survey->electrical_contractor              = $request->electrical_contractor;
        $survey->electrical_contractor_phone        = $request->electrical_contractor_phone;
        $survey->electrical_contractor_email        = $request->electrical_contractor_email;
        $survey->dish_location                      = $request->dish_location;
        $survey->saorview_location                  = $request->saorview_location;
        $survey->repeater_location                  = $request->repeater_location;
        $survey->item                               = $request->item;
        $survey->tvsocketfield                      = $request->tvsocketfield;
        $survey->hdmifield                          = $request->hdmifield;
        $survey->ceilingspeakersfield               = $request->ceilingspeakersfield;
        $survey->electricalsocketfield              = $request->electricalsocketfield;
        $survey->cat56field                         = $request->cat56field;
        $survey->wallmountedtvfield                 = $request->wallmountedtvfield;
        $survey->mprfield                           = $request->mprfield;
        $survey->notes_general                      = $request->notes_general;
        $survey->save();

        if (!empty($request->cable && is_array($request->cable))) {
            foreach ($request->cable as $key => $value) {
                $cable              = new Cable();
                $cable->survey_id   = $survey->id;
                $cable->from        = $value['from'];
                $cable->to          = $value['to'];
                $cable->quantity    = $value['quantity'];
                $cable->type        = $value['type'];
                $cable->terminate   = $value['terminate'];
                $cable->note        = $value['note'];
                $cable->save();
            }
        }

        return redirect()->route('customers.show', ['customer' => $survey->customer_id])->with('success', 'Survey Form saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $banh                = Banh::find($id);
        $data                = ['banh' => $banh];
        $pdf                 = Pdf::loadView('pdf.banh', $data);
        return $pdf->download('banh.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $survey = Survey::find($id);
        $countries = Country::get(['country_name']);
        return view('customers.survey.edit', compact('survey', 'countries'));
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
        // $data                = [];
        // $customer            = Customer::find($request->customer_id);
        // $company             = CompanyDetail::first();
        // $data['request']                = $request->all();
        // $data['company']                = $company;
        // $data['customer']               = $customer;
        // return $data;
        // $pdf                 = Pdf::loadView('pdf.survey', $data);
        // return $pdf->download('survey.pdf');

        $survey                                     = Survey::find($id);
        $survey->customer_id                        = $request->customer_id;
        $survey->banh_id                            = $request->banh_id;
        $survey->firstname                          = $request->firstname;
        $survey->lastname                           = $request->lastname;
        $survey->email                              = $request->email;
        $survey->phone                              = $request->phone;
        $survey->mobile_1                           = $request->mobile_1;
        $survey->partner_firstname                  = $request->partner_firstname;
        $survey->partner_lastname                   = $request->partner_lastname;
        $survey->partner_mobile_1                   = $request->partner_mobile_1;
        $survey->address_1                          = $request->address_1;
        $survey->address_2                          = $request->address_2;
        $survey->city                               = $request->city;
        $survey->county                             = $request->county;
        $survey->country                            = $request->country;
        $survey->eir_code                           = $request->eir_code;
        $survey->isp                                = $request->isp;
        $survey->telecompolfield                    = $request->telecompolfield;
        $survey->esbpolefield                       = $request->esbpolefield;
        $survey->virginmediafield                   = $request->virginmediafield;
        $survey->wirelessopeartorfield              = $request->wirelessopeartorfield;
        $survey->otherispfield                      = $request->otherispfield;
        $survey->isp_note                           = $request->isp_note;
        $survey->building_contractor                = $request->building_contractor;
        $survey->building_contractor_phone          = $request->building_contractor_phone;
        $survey->building_contractor_email          = $request->building_contractor_email;
        $survey->electrical_contractor              = $request->electrical_contractor;
        $survey->electrical_contractor_phone        = $request->electrical_contractor_phone;
        $survey->electrical_contractor_email        = $request->electrical_contractor_email;
        $survey->dish_location                      = $request->dish_location;
        $survey->saorview_location                  = $request->saorview_location;
        $survey->repeater_location                  = $request->repeater_location;
        $survey->item                               = $request->item;
        $survey->tvsocketfield                      = $request->tvsocketfield;
        $survey->hdmifield                          = $request->hdmifield;
        $survey->ceilingspeakersfield               = $request->ceilingspeakersfield;
        $survey->electricalsocketfield              = $request->electricalsocketfield;
        $survey->cat56field                         = $request->cat56field;
        $survey->wallmountedtvfield                 = $request->wallmountedtvfield;
        $survey->mprfield                           = $request->mprfield;
        $survey->notes_general                      = $request->notes_general;
        $survey->save();

        Cable::where('survey_id',$id)->delete();
        if (!empty($request->cable && is_array($request->cable))) {
            foreach ($request->cable as $key => $value) {
                $cable              = new Cable();
                $cable->survey_id   = $survey->id;
                $cable->from        = $value['from'];
                $cable->to          = $value['to'];
                $cable->quantity    = $value['quantity'];
                $cable->type        = $value['type'];
                $cable->terminate   = $value['terminate'];
                $cable->note        = $value['note'];
                $cable->save();
            }
        }

        return redirect()->route('customers.show', ['customer' => $survey->customer_id])->with('success', 'Survey Form updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banh::find($id)->delete();
        return redirect()->back()->with('success', 'BANH Form deleted successfully!');
    }
}
