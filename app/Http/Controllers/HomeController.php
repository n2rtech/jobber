<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Estimate;
use App\Models\Invoice;
use App\Models\Job;
use App\Models\Lead;
use Carbon\Carbon;
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
    public function index(Request $request)
    {
        $filter_date_range           = $request->filter;
        $filter_date                 = $request->date;

        if ($request->date) {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', $request->date)->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', $request->date)->count();
            $total_leads             = Lead::whereDate('created_at', $request->date)->count();
            $total_invoices          = Invoice::whereDate('created_at', $request->date)->count();
            $total_customers         = Customer::whereDate('created_at', $request->date)->count();
            $total_estimates         = Estimate::whereDate('created_at', $request->date)->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        if ($request->filter == 'today') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', Carbon::today())->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', Carbon::today())->count();
            $total_leads             = Lead::whereDate('created_at', Carbon::today())->count();
            $total_invoices          = Invoice::whereDate('created_at', Carbon::today())->count();
            $total_customers         = Customer::whereDate('created_at', Carbon::today())->count();
            $total_estimates         = Estimate::whereDate('created_at', Carbon::today())->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        if ($request->filter == 'yesterday') {
            $yesterday               = date("Y-m-d", strtotime( '-1 days' ) );
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', $yesterday)->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', $yesterday)->count();
            $total_leads             = Lead::whereDate('created_at', $yesterday)->count();
            $total_invoices          = Invoice::whereDate('created_at', $yesterday)->count();
            $total_customers         = Customer::whereDate('created_at', $yesterday)->count();
            $total_estimates         = Estimate::whereDate('created_at', $yesterday)->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        if ($request->filter == 'week') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_leads             = Lead::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_customers         = Customer::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        if ($request->filter == 'month') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_leads             = Lead::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_customers         = Customer::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        if ($request->filter == 'year') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_leads             = Lead::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_customers         = Customer::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
        }

        $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->count();
        $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->count();
        $total_leads             = Lead::count();
        $total_invoices          = Invoice::count();
        $total_customers         = Customer::count();
        $total_estimates         = Estimate::count();
        return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range'));
    }
}
