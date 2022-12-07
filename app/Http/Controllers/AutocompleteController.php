<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function autocomplete(Request $request)
    {
        $customers = Customer::where('name', 'like', '%'.$request->q.'%')->get();

        foreach($customers as $customer){

            $customer->address  = getCustomerAddress($customer->id);

        }

        return response()->json(['items' => $customers]);
    }
}
