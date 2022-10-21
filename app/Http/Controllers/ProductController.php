<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TaxRate;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $products = Product::get();
        $taxes    = TaxRate::get();
        return view('settings.products.index', compact('products', 'taxes'));
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
        $request->has('id') ? Product::where('id', $request->id)->update(['type' => $request->type, 'name' => $request->name, 'description' => $request->description, 'tax_rates' => $request->tax_rates, 'unit_price' => $request->unit_price]) : Product::create(['type' => $request->type,'name' => $request->name, 'description' => $request->description, 'tax_rates' => $request->tax_rates, 'unit_price' => $request->unit_price]);

        if($request->has('id')){

            return redirect()->route('products.index')->with('success', 'Product updated successfully!');

        }else{

            return redirect()->route('products.index')->with('success', 'Product saved successfully!');
        }
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
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
