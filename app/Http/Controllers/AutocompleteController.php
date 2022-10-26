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

            $customer->address  = '';

            if(isset($customer->address_1) && strlen($customer->address_1) > 0){
                $customer->address .= $customer->address_1;
            }

            if(isset($customer->address_2) && strlen($customer->address_2) > 0){
                $customer->address .= ', '.$customer->address_2;
            }

            if(isset($customer->city) && strlen($customer->city) > 0){
                $customer->address .= ', '.$customer->city;
            }

            if(isset($customer->state) && strlen($customer->state) > 0){
                $customer->address .= ', '.$customer->state;
            }

            if(isset($customer->country) && strlen($customer->country) > 0){
                $customer->address .= ', '.$customer->country;
            }

            if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
                $customer->address .= ', '.$customer->eir_code;
            }

        }

        return response()->json(['items' => $customers]);
    }
}
