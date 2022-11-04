<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\CustomerDocument;
use App\Models\CustomerNote;
use App\Models\CustomerPhoto;
use App\Models\Job;
use App\Models\JobNote;
use App\Models\SentEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtilityController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function photoUploadForm($id){
        $customer = Customer::find($id);
        foreach($customer->photos as $photo){
            $photo->path = asset('storage/uploads/customers/' . $id . '/photos' .'/'. $photo->image);
        }
        return view('customers.utilities.photo', compact('customer'));
    }

    public function photosUpload(Request $request){
        $customer = Customer::find($request->customer_id);
         // Save Customer Photos
         if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->storeAs('uploads/customers/' . $customer->id . '/photos', $name, 'public');
                $customer->photos()->create([
                    'image' => $name
                ]);
            }
        }

        return redirect()->route('customer.upload-photos', $request->customer_id)->with('success', 'Photos Uploaded successfully!');
    }

    public function photoDelete($id){
        CustomerPhoto::find($id)->delete();
        return redirect()->back()->with('success', 'Photos Deleted successfully!');
    }

    public function documentsUploadForm($id){
        $customer = Customer::find($id);
        foreach($customer->documents as $document){
            $document->path = asset('storage/uploads/customers/' . $id . '/documents' .'/'. $document->document);
        }
        return view('customers.utilities.documents', compact('customer'));
    }

    public function documentsUpload(Request $request){
        $customer = Customer::find($request->customer_id);
         // Save Customer Documents
         if ($request->hasfile('documents')) {
            foreach ($request->file('documents') as $image) {
                $name = $image->getClientOriginalName();
                $image->storeAs('uploads/customers/' . $customer->id . '/documents', $name, 'public');
                $customer->documents()->create([
                    'document' => $name
                ]);
            }
        }

        return redirect()->route('customer.upload-documents', $request->customer_id)->with('success', 'Document Uploaded successfully!');
    }

    public function documentDelete($id){
        CustomerDocument::find($id)->delete();
        return redirect()->back()->with('success', 'Document Deleted successfully!');
    }

    public function notesUploadForm($id){
        $customer = Customer::find($id);
        foreach($customer->allnotes as $note){
            $note->path = asset('storage/uploads/customers/' . $id . '/notes' .'/'. $note->file);
        }
        return view('customers.utilities.notes', compact('customer'));
    }

    public function notesUpload(Request $request){
        $rules = [
            'note'                  => 'required',
        ];

        $messages = [
            'note.required'             => "Please Write Note.",
        ];

        $this->validate($request, $rules, $messages);
        $customer           = Customer::find($request->customer_id);
        $note               = new CustomerNote();
        $note->customer_id  = $customer->id;
        $note->user_id      = Auth::user()->id;
        $note->note         = $request->note;

         // Save Customer Notes
        if($request->hasfile('file')) {
            $note_file = $request->file('file');
            $name = $note_file->getClientOriginalName();
            $note_file->storeAs('uploads/customers/' . $customer->id . '/notes', $name, 'public');

            $note->file         = $name;
        }

        $note->save();

        return redirect()->route('customer.show', $request->customer_id)->with('success', 'Note Added successfully!');
    }

    public function sendEmailForm($id){
        $customer = Customer::find($id);
        return view('customers.utilities.email-form', compact('customer'));
    }

    public function emailSend(Request $request){
        $rules = [
            'email'                    => 'required',
            'subject'                  => 'required',
            'message'                  => 'required',
        ];

        $messages = [
            'email.required'               => "Please enter Receiver Email.",
            'subject.required'             => "Please enter Email Subject.",
            'message.required'             => "Please enter Email Message.",
        ];

        $this->validate($request, $rules, $messages);

        $email              = new SentEmail();
        $email->customer_id = $request->customer_id;
        $email->user_id     = Auth::user()->id;
        $email->email       = $request->email;
        $email->subject     = $request->subject;
        $email->message     = $request->message;

        if ($request->hasfile('attachments')) {
            foreach ($request->file('attachments') as $image) {
                $name = $image->getClientOriginalName();
                $image->storeAs('uploads/customers/' . $request->customer_id . '/attachments', $name, 'public');
                $email->attachments     = $name;
            }
        }

        $email->save();

        return redirect()->route('customer.send-email', $request->customer_id)->with('success', 'Mail sent successfully!');
    }

    public function jobNotesUploadForm($id){
        $job = Job::find($id);
        foreach($job->jobnotes as $note){
            $note->path = asset('storage/uploads/jobs/' . $id . '/notes' .'/'. $note->file);
        }
        return view('customers.utilities.notes', compact('customer'));
    }

    public function jobNotesUpload(Request $request){
        $rules = [
            'note'                  => 'required',
        ];

        $messages = [
            'note.required'             => "Please Write Note.",
        ];

        $this->validate($request, $rules, $messages);
        $customer           = Customer::find($request->customer_id);
        $note               = new JobNote();
        $note->customer_id  = $customer->id;
        $note->job_id       = $request->job_id;
        $note->user_id      = Auth::user()->id;
        $note->note         = $request->note;

         // Save Customer Notes
        if($request->hasfile('file')) {
            $note_file = $request->file('file');
            $name = $note_file->getClientOriginalName();
            $note_file->storeAs('uploads/jobs/' . $request->job_id . '/notes', $name, 'public');

            $note->file         = $name;
        }

        $note->save();

        return redirect()->route('jobs.show', $request->job_id)->with('success', 'Note Added successfully!');
    }
}
