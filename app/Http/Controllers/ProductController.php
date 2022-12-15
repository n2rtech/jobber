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
    public function index(Request $request)
    {
        $products              = Product::query();

        $filter_box             = 'hide';

        $filter_name            = $request->filter_name;

        $filter_type           = $request->filter_type;

        $filter_tax          = $request->default_tax;

        if(isset($filter_name) || isset($filter_type) || isset($filter_tax)){
            $filter_box = 'show';
        }

        isset($filter_name)     ? $products->where('name', 'like', '%'.$filter_name.'%') : $products;

        isset($filter_type)    ? $products->where('type', $filter_type) : $products;

        isset($filter_tax)    ? $products->where('tax_rate_id', $filter_tax) : $products;

        $products              = $products->orderBy('id', 'desc')->get();

        $taxes    = TaxRate::get();

        return view('settings.products.index', compact('products', 'taxes', 'filter_name', 'filter_type', 'filter_tax', 'filter_box'));

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

        $request->has('id') ? Product::where('id', $request->id)->update(['type' => $request->type, 'product_id' => $request->product_id, 'name' => $request->name, 'description' => $request->description, 'tax_rate_id' => $request->tax_rate_id, 'unit_price' => $request->unit_price]) : Product::create(['type' => $request->type, 'product_id' => $request->product_id,'name' => $request->name, 'description' => $request->description, 'tax_rate_id' => $request->tax_rate_id, 'unit_price' => $request->unit_price]);

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
