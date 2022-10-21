<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $company = CompanyDetail::first();
        return view('settings.company-settings.index', compact('company'));
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
        $rules = [
            'company'               => 'required',
            'email'                 => ['required', 'string', 'email', 'max:255'],
            'mobile'                => 'required',
            'address'               => 'required',
            'city'                  => 'required',
            'state'                 => 'required',
            'country'               => 'required',
            'zipcode'               => 'required',

        ];

        $messages = [
            'company.required'             => "Please enter Company name.",
            'email.required'               => "Please enter Company email.",
            'mobile.required'              => "Please enter Company Mobile.",
            'address.required'             => "Please enter Company address.",
            'city.required'                => "Please enter Company city.",
            'state.required'               => "Please enter Company state.",
            'zipcode.required'             => "Please enter Company zipcode",
            'country.required'             => "Please enter Company country."
        ];

        $this->validate($request, $rules, $messages);

        $company                   = new CompanyDetail();
        $company->company          = $request->company;
        $company->email            = $request->email;
        $company->mobile           = $request->mobile;
        $company->address          = $request->address;
        $company->city             = $request->city;
        $company->state            = $request->state;
        $company->country          = $request->country;
        $company->zipcode          = $request->zipcode;
        $company->save();

        return redirect()->route('company-settings.index')->with('success', 'Company  Details updated successfully!');
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
