<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $invoice = Invoice::find($id);
        return view('invoices.payments.index', compact('invoice'));
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
        $invoice                 = Invoice::find($id);
        $payment                 = new Payment();
        $payment->customer_id    = $invoice->customer_id;
        $payment->invoice_id     = $id;
        $payment->date           = $request->date;
        $payment->amount         = $request->amount;
        $payment->transaction_id = $request->transaction_id;
        $payment->save();

        $invoice->paid           = $invoice->paid + $payment->amount;
        $invoice->save();


        if($invoice->paid == $invoice->total){
            $invoice->status           = 'paid';
            $invoice->save();
        }

        if(($invoice->paid < $invoice->total) && ($invoice->paid > 0)){
            $invoice->status           = 'partial';
            $invoice->save();
        }

        return redirect()->back()->with('success', 'Payment added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment                 = Payment::find($id);
        $invoice                 = Invoice::where('id', $payment->invoice_id)->first();
        $paid                    = $invoice->paid - $payment->amount;
        Invoice::where('id', $payment->invoice_id)->update(['paid' => $paid]);
        $updated_invoice = Invoice::find($invoice->id);
        if($updated_invoice->paid == $updated_invoice->total){
            $updated_invoice->status           = 'paid';
            $updated_invoice->save();
        }

        if($updated_invoice->paid == 0.00){
            $updated_invoice->status           = 'unpaid';
            $updated_invoice->save();
        }

        if(($updated_invoice->paid < $updated_invoice->total) && ($updated_invoice->paid > 0)){
            $updated_invoice->status           = 'partial';
            $updated_invoice->save();
        }
        $payment->delete();
        return redirect()->back()->with('success', 'Payment deleted successfully');



    }
}
