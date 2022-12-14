<?php

use App\Models\Banh;
use App\Models\CompanyDetail;
use App\Models\Customer;
use App\Models\Estimate;
use App\Models\EstimateProduct;
use App\Models\Invoice;
use App\Models\InvoiceProduct;
use App\Models\Job;
use App\Models\JobForm;
use App\Models\JobFormAnswer;
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

        if(isset($customer->county) && strlen($customer->county) > 0){
            $customer->address .= ', '.$customer->county;
        }

        // if(isset($customer->country) && strlen($customer->country) > 0){
        //     $customer->address .= ', '.$customer->country;
        // }

        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= ' <a target="_blank" href="http://maps.google.com/?q='.$customer->eir_code.'">'.$customer->eir_code.'</a>';
        }
        return ($customer->address);
    }
}

if (!function_exists('getCity')) {
    function getCity($id)
    {
        $customer = Customer::find($id);
        $customer->address  = '';

        if(isset($customer->city) && strlen($customer->city) > 0){
            $customer->address .= $customer->city;
        }
        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= '<br/><a target="_blank" href="http://maps.google.com/?q='.$customer->eir_code.'">'.$customer->eir_code.'</a>';
        }

        return ($customer->address);
    }
}

if (!function_exists('getCustomerAddress')) {
    function getCustomerAddress($id)
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

        if(isset($customer->county) && strlen($customer->county) > 0){
            $customer->address .= ', '.$customer->county;
        }

        // if(isset($customer->country) && strlen($customer->country) > 0){
        //     $customer->address .= ', '.$customer->country;
        // }

        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= ', '.$customer->eir_code;
        }
        return ($customer->address);
    }
}

if (!function_exists('getBanhAddress')) {
    function getBanhAddress($id)
    {
        $customer = Banh::find($id);
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

        if(isset($customer->county) && strlen($customer->county) > 0){
            $customer->address .= ', '.$customer->county;
        }

        if(isset($customer->country) && strlen($customer->country) > 0){
            $customer->address .= ', '.$customer->country;
        }

        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= ', '.$customer->eir_code;
        }
        return ($customer->address);
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

        if(isset($customer->county) && strlen($customer->county) > 0){
            $customer->address .= ', '.$customer->county;
        }

        // if(isset($customer->country) && strlen($customer->country) > 0){
        //     $customer->address .= ', '.$customer->country;
        // }

        if(isset($customer->eir_code) && strlen($customer->eir_code) > 0){
            $customer->address .= ', <a target="_blank" href="http://maps.google.com/?q='.$customer->eir_code.'">'.$customer->eir_code.'</a>';
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

        if(isset($company->county) && strlen($company->county) > 0){
            $company->address .= ', '.$company->county;
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
           $subject     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($job->customer_id) , $subject);

           $subject     = str_replace('{{JOB_TITLE}}', $job->jobTitle->title , $subject);
           $subject     = str_replace('{{JOB_DATE_AND_TIME}}',$job->customer->start , $subject);
           $subject     = str_replace('{{JOB_LOCATION}}', getCustomerAddress($job->customer_id) , $subject);

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
           //$path        = asset('dist/img/logo-dark.png');
           $path        = 'https://dev.n2rtechnologies.com/logo-dark.png';
           $message     = str_replace('{{COMPANY_LOGO}}', '<img src="'.$path.'" width=""></img>' , $message);

           $message     = str_replace('{{CUSTOMER_NAME}}', $job->customer->name , $message);
           $message     = str_replace('{{CUSTOMER_EMAIL}}',$job->customer->email , $message);
           $message     = str_replace('{{CUSTOMER_PHONE}}', $job->customer->phone , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_1}}', $job->customer->mobile_1 , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_2}}', $job->customer->mobile_2 , $message);
           $message     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($job->customer_id) , $message);

           $message     = str_replace('{{JOB_TITLE}}', $job->jobTitle->title , $message);
           $message     = str_replace('{{JOB_DATE_AND_TIME}}',$job->start , $message);
           $message     = str_replace('{{JOB_LOCATION}}', getCustomerAddress($job->customer_id) , $message);
           return $message;
        }
    }
    if (!function_exists('getTextMessage')) {
        function getTextMessage($message, $job_id)
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
           //$path        = asset('dist/img/logo-dark.png');
           $path        = 'https://dev.n2rtechnologies.com/logo-dark.png';
           $message     = str_replace('{{COMPANY_LOGO}}', '<img src="'.$path.'" width=""></img>' , $message);

           $message     = str_replace('{{CUSTOMER_NAME}}', $job->customer->name , $message);
           $message     = str_replace('{{CUSTOMER_EMAIL}}',$job->customer->email , $message);
           $message     = str_replace('{{CUSTOMER_PHONE}}', $job->customer->phone , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_1}}', $job->customer->mobile_1 , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_2}}', $job->customer->mobile_2 , $message);
           $message     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($job->customer_id) , $message);

           $message     = str_replace('{{JOB_TITLE}}', $job->jobTitle->title , $message);
           $message     = str_replace('{{JOB_DATE_AND_TIME}}',\Carbon\Carbon::parse($job->start)->format('d-M'). ' between ' . \Carbon\Carbon::parse($job->start)->format('H:iA') . ' and ' . \Carbon\Carbon::parse($job->end)->format('H:iA'), $message);
           $message     = str_replace('{{JOB_LOCATION}}', getCustomerAddress($job->customer_id) , $message);
           return $message;
        }
    }
    if (!function_exists('getEstimateSubject')) {
        function getEstimateSubject($subject, $estimate_id)
        {
           $estimate    = Estimate::where('id', $estimate_id)->first();
           $company     = CompanyDetail::first();

           $subject     = str_replace('{{COMPANY_NAME}}', $company->company , $subject);
           $subject     = str_replace('{{COMPANY_EMAIL}}', $company->email , $subject);
           $subject     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $subject);
           $subject     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $subject);
           $subject     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $subject);
           $subject     = str_replace('{{COMPANY_VAT}}', $company->vat , $subject);
           $subject     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $subject);

           $subject     = str_replace('{{CUSTOMER_NAME}}', $estimate->customer->name , $subject);
           $subject     = str_replace('{{CUSTOMER_EMAIL}}',$estimate->customer->email , $subject);
           $subject     = str_replace('{{CUSTOMER_PHONE}}', $estimate->customer->phone , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_1}}', $estimate->customer->mobile_1 , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_2}}', $estimate->customer->mobile_2 , $subject);
           $subject     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($estimate->customer_id) , $subject);

           $subject     = str_replace('{{ESTIMATE_NO}}', $estimate->id , $subject);
           $subject     = str_replace('{{ESTIMATE_DATE}}', $estimate->estimate_date , $subject);
           $subject     = str_replace('{{EXPIRY_DATE}}', $estimate->expiry_date , $subject);
           $subject     = str_replace('{{ESTIMATE_BILLING_ADDRESS}}', getCustomerAddress($estimate->customer_id) , $subject);

           if($estimate->same_as_billing_address){
                $subject     = str_replace('{{ESTIMATE_SHIPPING_ADDRESS}}', getCustomerAddress($estimate->customer_id) , $subject);
           }else{
                $subject     = str_replace('{{ESTIMATE_SHIPPING_ADDRESS}}', $estimate->shipping_address_1.' '.$estimate->shipping_address_2.' '.$estimate->shipping_city.' '.$estimate->shipping_state.' '.$estimate->shipping_country.' '.$estimate->shipping_eir_code , $subject);
           }

           return $subject;
        }
    }


    if (!function_exists('getEstimateMessage')) {
        function getEstimateMessage($message, $estimate_id)
        {
           $estimate    = Estimate::where('id', $estimate_id)->first();
           $company     = CompanyDetail::first();

           $message     = str_replace('{{COMPANY_NAME}}', $company->company , $message);
           $message     = str_replace('{{COMPANY_EMAIL}}', $company->email , $message);
           $message     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $message);
           $message     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $message);
           $message     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $message);
           $message     = str_replace('{{COMPANY_VAT}}', $company->vat , $message);
           $message     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $message);
           //$path        = asset('dist/img/logo-dark.png');
           $path        = 'https://dev.n2rtechnologies.com/logo-dark.png';
           $message     = str_replace('{{COMPANY_LOGO}}', '<img src="'.$path.'" width=""></img>' , $message);

           $message     = str_replace('{{CUSTOMER_NAME}}', $estimate->customer->name , $message);
           $message     = str_replace('{{CUSTOMER_EMAIL}}',$estimate->customer->email , $message);
           $message     = str_replace('{{CUSTOMER_PHONE}}', $estimate->customer->phone , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_1}}', $estimate->customer->mobile_1 , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_2}}', $estimate->customer->mobile_2 , $message);
           $message     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($estimate->customer_id) , $message);

           $message     = str_replace('{{ESTIMATE_NO}}', $estimate->id , $message);
           $message     = str_replace('{{ESTIMATE_DATE}}', $estimate->estimate_date , $message);
           $message     = str_replace('{{EXPIRY_DATE}}', $estimate->expiry_date , $message);
           $message     = str_replace('{{ESTIMATE_BILLING_ADDRESS}}', getCustomerAddress($estimate->customer_id) , $message);

           if($estimate->same_as_billing_address){
                $message     = str_replace('{{ESTIMATE_SHIPPING_ADDRESS}}', getAddress($estimate->customer_id) , $message);
           }else{
                $message     = str_replace('{{ESTIMATE_SHIPPING_ADDRESS}}', $estimate->shipping_address_1.' '.$estimate->shipping_address_2.' '.$estimate->shipping_city.' '.$estimate->shipping_state.' '.$estimate->shipping_country.' '.$estimate->shipping_eir_code , $message);
           }

           return $message;
        }
    }

    if (!function_exists('getInvoiceSubject')) {
        function getInvoiceSubject($subject, $invoice_id)
        {
           $invoice    = Invoice::where('id', $invoice_id)->first();
           $company     = CompanyDetail::first();

           $subject     = str_replace('{{COMPANY_NAME}}', $company->company , $subject);
           $subject     = str_replace('{{COMPANY_EMAIL}}', $company->email , $subject);
           $subject     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $subject);
           $subject     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $subject);
           $subject     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $subject);
           $subject     = str_replace('{{COMPANY_VAT}}', $company->vat , $subject);
           $subject     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $subject);

           $subject     = str_replace('{{CUSTOMER_NAME}}', $invoice->customer->name , $subject);
           $subject     = str_replace('{{CUSTOMER_EMAIL}}',$invoice->customer->email , $subject);
           $subject     = str_replace('{{CUSTOMER_PHONE}}', $invoice->customer->phone , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_1}}', $invoice->customer->mobile_1 , $subject);
           $subject     = str_replace('{{CUSTOMER_MOBILE_2}}', $invoice->customer->mobile_2 , $subject);
           $subject     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $subject);

           $subject     = str_replace('{{INVOICE_NO}}', $invoice->id , $subject);
           $subject     = str_replace('{{INVOICE_DATE}}', $invoice->invoice_date , $subject);
           $subject     = str_replace('{{EXPIRY_DATE}}', $invoice->due_date , $subject);
           $subject     = str_replace('{{INVOICE_BILLING_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $subject);

           if($invoice->same_as_billing_address){
                $subject     = str_replace('{{INVOICE_SHIPPING_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $subject);
           }else{
                $subject     = str_replace('{{INVOICE_SHIPPING_ADDRESS}}', $invoice->shipping_address_1.' '.$invoice->shipping_address_2.' '.$invoice->shipping_city.' '.$invoice->shipping_state.' '.$invoice->shipping_country.' '.$invoice->shipping_eir_code , $subject);
           }

           return $subject;
        }
    }


    if (!function_exists('getInvoiceMessage')) {
        function getInvoiceMessage($message, $invoice_id)
        {
           $invoice     = Invoice::where('id', $invoice_id)->first();
           $company     = CompanyDetail::first();

           $message     = str_replace('{{COMPANY_NAME}}', $company->company , $message);
           $message     = str_replace('{{COMPANY_EMAIL}}', $company->email , $message);
           $message     = str_replace('{{COMPANY_MOBILE}}', $company->mobile , $message);
           $message     = str_replace('{{COMPANY_LANDLINE}}', $company->landline , $message);
           $message     = str_replace('{{COMPANY_ADDRESS}}', getCompanyAddress($company->id) , $message);
           $message     = str_replace('{{COMPANY_VAT}}', $company->vat , $message);
           $message     = str_replace('{{COMPANY_WEBSITE}}', $company->website , $message);
           //$path        = asset('dist/img/logo-dark.png');
           $path        = 'https://dev.n2rtechnologies.com/logo-dark.png';
           $message     = str_replace('{{COMPANY_LOGO}}', '<img src="'.$path.'" width=""></img>' , $message);

           $message     = str_replace('{{CUSTOMER_NAME}}', $invoice->customer->name , $message);
           $message     = str_replace('{{CUSTOMER_EMAIL}}',$invoice->customer->email , $message);
           $message     = str_replace('{{CUSTOMER_PHONE}}', $invoice->customer->phone , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_1}}', $invoice->customer->mobile_1 , $message);
           $message     = str_replace('{{CUSTOMER_MOBILE_2}}', $invoice->customer->mobile_2 , $message);
           $message     = str_replace('{{CUSTOMER_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $message);

           $message     = str_replace('{{INVOICE_NO}}', $invoice->id , $message);
           $message     = str_replace('{{INVOICE_DATE}}', $invoice->invoice_date , $message);
           $message     = str_replace('{{EXPIRY_DATE}}', $invoice->due_date , $message);
           $message     = str_replace('{{INVOICE_BILLING_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $message);

           if($invoice->same_as_billing_address){
                $message     = str_replace('{{INVOICE_SHIPPING_ADDRESS}}', getCustomerAddress($invoice->customer_id) , $message);
           }else{
                $message     = str_replace('{{INVOICE_SHIPPING_ADDRESS}}', $invoice->shipping_address_1.' '.$invoice->shipping_address_2.' '.$invoice->shipping_city.' '.$invoice->shipping_state.' '.$invoice->shipping_country.' '.$invoice->shipping_eir_code , $message);
           }

           return $message;
        }
    }

    if (!function_exists('jobFormExists')) {
        function jobFormExists($jobid, $form_id){
            $form_exists = JobFormAnswer::where('job_id', $jobid)->where('job_form_id', $form_id)->exists();
            return $form_exists;
        }
    }

    if (!function_exists('jobForms')) {
        function jobForms($jobid, $customer_id){
            $forms = JobFormAnswer::where('job_id', $jobid)->where('customer_id', $customer_id)->distinct()->pluck('job_form_id')->toArray();
            return $forms;
        }
    }

    if (!function_exists('savedjobForms')) {
        function savedjobForms($customer_id){
            $job_ids = JobFormAnswer::where('customer_id', $customer_id)->distinct()->pluck('job_id')->toArray();
            $jobs    = Job::whereIn('id', $job_ids)->get();
            foreach($jobs as $job){
                if(!empty($job->job_forms) && is_array($job->job_forms)){
                    $job->forms     = JobForm::whereIn('id', $job->job_forms)->get();
                }else{
                    $job->forms     = [];
                }
            }
            return $jobs;
        }
    }
