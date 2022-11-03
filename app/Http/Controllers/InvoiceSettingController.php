<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class InvoiceSettingController extends Controller
{
    public function invoiceSettings(){
        $setting = Setting::where('type', 'invoice')->value('value');
        return view('settings.invoice-settings.index', compact('setting'));
    }

    public function storeInvoiceSettings(Request $request){
        $rules = [
            'due_on_receipt'                  => 'required',
        ];

        $messages = [
            'due_on_receipt.required'             => "Please enter Number of days.",
        ];

        $this->validate($request, $rules, $messages);

        Setting::where('type', 'invoice')->update(['value' => $request->all()]);

        return redirect()->route('invoice-settings.index')->with('success', 'Invoice Settings Updated successfully!');
    }
}
