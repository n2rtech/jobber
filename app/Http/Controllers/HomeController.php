<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Estimate;
use App\Models\Invoice;
use App\Models\Job;
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

        // Custom Date Dashboard Stats

        if ($request->date) {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', $request->date)->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', $request->date)->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereDate('created_at', $request->date)->count();
            $total_invoices          = Invoice::whereDate('created_at', $request->date)->count();
            $total_customers         = Customer::where('type', 'customer')->whereDate('created_at', $request->date)->count();
            $total_estimates         = Estimate::whereDate('created_at', $request->date)->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereDate('created_at', $request->date)->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereDate('created_at', $request->date)->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereDate('created_at', $request->date)->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // Today Dashboard Stats

        if ($request->filter == 'today') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', Carbon::today())->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', Carbon::today())->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereDate('created_at', Carbon::today())->count();
            $total_invoices          = Invoice::whereDate('created_at', Carbon::today())->count();
            $total_customers         = Customer::where('type', 'customer')->whereDate('created_at', Carbon::today())->count();
            $total_estimates         = Estimate::whereDate('created_at', Carbon::today())->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereDate('created_at', Carbon::today())->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereDate('created_at', Carbon::today())->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereDate('created_at', Carbon::today())->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // Yesterday Dashboard Stats

        if ($request->filter == 'yesterday') {
            $yesterday               = date("Y-m-d", strtotime( '-1 days' ) );
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereDate('created_at', $yesterday)->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereDate('created_at', $yesterday)->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereDate('created_at', $yesterday)->count();
            $total_invoices          = Invoice::whereDate('created_at', $yesterday)->count();
            $total_customers         = Customer::where('type', 'customer')->whereDate('created_at', $yesterday)->count();
            $total_estimates         = Estimate::whereDate('created_at', $yesterday)->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereDate('created_at', $yesterday)->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereDate('created_at', $yesterday)->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereDate('created_at', $yesterday)->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // Week Dashboard Stats

        if ($request->filter == 'week') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_customers         = Customer::where('type', 'customer')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // Monthly Dashboard Stats

        if ($request->filter == 'month') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_customers         = Customer::where('type', 'customer')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // Yearly Dashboard Stats

        if ($request->filter == 'year') {
            $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_leads             = Customer::where('type', 'sales-lead')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_invoices          = Invoice::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_customers         = Customer::where('type', 'customer')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $total_estimates         = Estimate::whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->count();
            $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('id', 'desc')->take(10)->get();
            $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('id', 'desc')->take(10)->get();
            $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->whereBetween('created_at', [Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])->orderBy('id', 'desc')->take(10)->get();

            return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
        }

        // All Time Dashboard Stats

        $total_scheduled_jobs    = Job::where('scheduled', 'yes ')->count();
        $total_unscheduled_jobs  = Job::where('scheduled', 'no ')->count();
        $total_leads             = Customer::where('type', 'sales-lead')->count();
        $total_invoices          = Invoice::count();
        $total_customers         = Customer::where('type', 'customer')->count();
        $total_estimates         = Estimate::count();
        $completed_jobs          = Job::where('scheduled', 'yes ')->where('status', 'completed')->orderBy('id', 'desc')->take(10)->get();
        $scheduled_jobs          = Job::where('status', 'pending')->where('scheduled', 'yes ')->orderBy('id', 'desc')->take(10)->get();
        $unscheduled_jobs        = Job::where('status', 'pending')->where('scheduled', 'no ')->orderBy('id', 'desc')->take(10)->get();

        return view('home', compact('total_scheduled_jobs', 'total_unscheduled_jobs', 'total_leads', 'total_invoices', 'total_customers', 'total_estimates', 'filter_date', 'filter_date_range', 'completed_jobs', 'scheduled_jobs', 'unscheduled_jobs'));
    }
}
