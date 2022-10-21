<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class UtilityController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function photoUploadForm($id){
        $customer = Customer::find($id);
        return view('customers.utilities.photo', compact('customer'));
    }

    public function documentsUploadForm($id){
        $customer = Customer::find($id);
        return view('customers.utilities.documents', compact('customer'));
    }

    public function notesUploadForm($id){
        $customer = Customer::find($id);
        return view('customers.utilities.notes', compact('customer'));
    }

    public function sendEmailForm($id){
        $customer = Customer::find($id);
        return view('customers.utilities.email-form', compact('customer'));
    }
}
