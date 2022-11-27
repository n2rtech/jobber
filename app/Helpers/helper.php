<?php

use App\Models\Customer;
use App\Models\EstimateProduct;
use App\Models\InvoiceProduct;
use App\Models\Lead;
use Illuminate\Http\Request;

if (!function_exists('getAddress')) {
    function getAddress($id)
    {
        $customer = Customer::find($id);
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

        // if(isset($customer->country) && strlen($customer->country) > 0){
        //     $customer->address .= ', '.$customer->country;
        // }

        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= ', '.$customer->eir_code;
        }
        return $customer->address;
    }
}


if (!function_exists('getLeadAddress')) {
    function getLeadAddress($id)
    {
        $customer = Lead::find($id);
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
        return $customer->address;
    }

    if (!function_exists('getInvoiceSubtotal')) {
        function getInvoiceSubtotal($id){
            $subtotal = 0;
            $products =  InvoiceProduct::where('invoice_id', $id)->get();
            foreach($products as $product){
                $subtotal += $product->quantity * $product->unit_price;
            }
            return $subtotal;
        }

    }

    if (!function_exists('getInvoiceTotalTax')) {
        function getInvoiceTotalTax($id){
            $tax = 0;
            $products =  InvoiceProduct::where('invoice_id', $id)->get();
            foreach($products as $product){
                $subtotal = $product->quantity * $product->unit_price;
                $tax     += $subtotal * $product->tax_rate / 100;
            }
            return $tax;
        }

    }

    if (!function_exists('getEstimateSubtotal')) {
        function getEstimateSubtotal($id){
            $subtotal = 0;
            $products =  EstimateProduct::where('estimate_id', $id)->get();
            foreach($products as $product){
                $subtotal += $product->quantity * $product->unit_price;
            }
            return $subtotal;
        }

    }

    if (!function_exists('getEstimateTotalTax')) {
        function getEstimateTotalTax($id){
            $tax = 0;
            $products =  EstimateProduct::where('estimate_id', $id)->get();
            foreach($products as $product){
                $subtotal = $product->quantity * $product->unit_price;
                $tax     += $subtotal * $product->tax_rate / 100;
            }
            return $tax;
        }

    }
}
