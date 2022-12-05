<?php

use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\EstimateProduct;
use App\Models\InvoiceProduct;
use App\Models\Job;
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

if (!function_exists('getMapAddress')) {
    function getMapAddress($id)
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
            $customer->address .= ', <a target="_blank" href="http://maps.google.com/?q='.$customer->eir_code.'">'.$customer->eir_code.'</a';
        }
        return $customer->address;
    }
}

if (!function_exists('getCompanyAddress')) {
    function getCompanyAddress($id)
    {
        $company = CompanyDetail::find($id);
        $company->address  = '';

        if(isset($company->address_1) && strlen($company->address_1) > 0){
            $company->address .= $company->address_1;
        }

        if(isset($company->address_2) && strlen($company->address_2) > 0){
            $company->address .= ', '.$company->address_2;
        }

        if(isset($company->city) && strlen($company->city) > 0){
            $company->address .= ', '.$company->city;
        }

        if(isset($company->state) && strlen($company->state) > 0){
            $company->address .= ', '.$company->state;
        }

        if(isset($company->country) && strlen($company->country) > 0){
            $company->address .= ', '.$company->country;
        }

        if(isset($company->zipcode) && strlen($company->zipcode) > 0){
            $company->address .= ', '.$company->zipcode;
        }
        return $company->address;
    }
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

    if (!function_exists('getSubject')) {
        function getSubject($subject, $job_id)
        {
           $job         = Job::where('id', $job_id)->first();
           $company     = CompanyDetail::first();

           $subject     = str_replace('{{COMPANY_NAME}}', $company->company , $subject);
           $subject     = str_replace('{{COMPANY_EMAIL}}', $company->email , $subject);
           $subject     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $subject);
           $subject     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $subject);
           $subject     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $subject);
           $subject     = str_replace('{{COMPANY_VAT}}', $company->vat , $subject);
           $subject     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $subject);

           $subject     = str_replace('{{CUSTOMER_NAME}}', $job->customer->name , $subject);
           $subject     = str_replace('{{CUSTOMER_EMAIL}}',$job->customer->email , $subject);
           $subject     = str_replace('{{CUSTOMER_PHONE}}', $job->customer->phone , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_1}}', $job->customer->mobile_1 , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_2}}', $job->customer->mobile_2 , $subject);
           $subject     = str_replace('{{CUSTOMER_ADDRESS}}', getAddress($job->customer_id) , $subject);

           $subject     = str_replace('{{JOB_TITLE}}', $job->jobTitle->title , $subject);
           $subject     = str_replace('{{JOB_DATE_AND_TIME}}',$job->customer->start , $subject);
           $subject     = str_replace('{{JOB_LOCATION}}', getAddress($job->customer_id) , $subject);

           return $subject;
        }
    }


    if (!function_exists('getMessage')) {
        function getMessage($message, $job_id)
        {
           $job         = Job::where('id', $job_id)->first();
           $company     = CompanyDetail::first();

           $message     = str_replace('{{COMPANY_NAME}}', $company->company , $message);
           $message     = str_replace('{{COMPANY_EMAIL}}', $company->email , $message);
           $message     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $message);
           $message     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $message);
           $message     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $message);
           $message     = str_replace('{{COMPANY_VAT}}', $company->vat , $message);
           $message     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $message);
           $path        = asset('dist/img/logo-dark.png');
           $message     = str_replace('{{COMPANY_LOGO}}', '<img src="'.$path.'" width="26%"></img>' , $message);

           $message     = str_replace('{{CUSTOMER_NAME}}', $job->customer->name , $message);
           $message     = str_replace('{{CUSTOMER_EMAIL}}',$job->customer->email , $message);
           $message     = str_replace('{{CUSTOMER_PHONE}}', $job->customer->phone , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_1}}', $job->customer->mobile_1 , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_2}}', $job->customer->mobile_2 , $message);
           $message     = str_replace('{{CUSTOMER_ADDRESS}}', getAddress($job->customer_id) , $message);

           $message     = str_replace('{{JOB_TITLE}}', $job->jobTitle->title , $message);
           $message     = str_replace('{{JOB_DATE_AND_TIME}}',$job->start , $message);
           $message     = str_replace('{{JOB_LOCATION}}', getAddress($job->customer_id) , $message);

           return $message;
        }
    }

