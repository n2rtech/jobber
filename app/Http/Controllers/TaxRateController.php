<?php

namespace App\Http\Controllers;

use App\Models\TaxRate;
use App\Http\Requests\StoreTaxRateRequest;
use App\Http\Requests\UpdateTaxRateRequest;
use Illuminate\Http\Request;

class TaxRateController extends Controller
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
        $taxes = TaxRate::get();
        return view('settings.tax-rate.index', compact('taxes'));
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
     * @param  \App\Http\Requests\StoreTaxRateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->has('id') ? TaxRate::where('id', $request->id)->update(['name' => $request->name, 'rate' => $request->rate]) : TaxRate::create(['name' => $request->name, 'rate' => $request->rate]);

        if($request->has('id')){

            return redirect()->route('tax-rates.index')->with('success', 'Tax Rate updated successfully!');

        }else{

            return redirect()->route('tax-rates.index')->with('success', 'Tax Rate saved successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaxRate  $taxRate
     * @return \Illuminate\Http\Response
     */
    public function show(TaxRate $taxRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaxRate  $taxRate
     * @return \Illuminate\Http\Response
     */
    public function edit(TaxRate $taxRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaxRateRequest  $request
     * @param  \App\Models\TaxRate  $taxRate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaxRateRequest $request, TaxRate $taxRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxRate  $taxRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TaxRate::find($id)->delete();
        return redirect()->route('tax-rates.index')->with('success', 'Tax Rate deleted successfully!');
    }
}
