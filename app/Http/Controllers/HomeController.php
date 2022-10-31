<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Estimate;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\Lead;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_scheduled_jobs = Job::where('scheduled', 'yes ')->count();
        $total_jobs           = Job::count();
        $total_leads          = Lead::count();
        $total_invoices       = Invoice::count();
        $total_customers      = Customer::count();
        $total_estimates      = Estimate::count();
        return view('home', compact('total_scheduled_jobs', 'total_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates'));
    }
}
