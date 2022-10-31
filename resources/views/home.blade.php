@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark">All Dates</button>
                        <button type="button" class="btn btn-dark dropdown-toggle dropdown-icon" data-toggle="dropdown"
                            aria-expanded="false">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">Custom</a>
                            <a class="dropdown-item" href="#">Today</a>
                            <a class="dropdown-item" href="#">Yesterday</a>
                            <a class="dropdown-item" href="#">This Week</a>
                            <a class="dropdown-item" href="#">This Month</a>
                            <a class="dropdown-item" href="#">This Year</a>
                        </div>
                    </div>

                    <div class="card-tools">
                        <input type="search" placeholder="Search" class="form-control">
                      </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $total_jobs }}</h3>

                                    <p>All Jobs</p>
                                </div>
                                <a href="{{ route('jobs.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $total_scheduled_jobs }}</h3>

                                    <p>Scheduled Jobs</p>
                                </div>
                                <a href="{{ route('jobs.index',['scheduled' => 'yes']) }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{ $total_leads }}</h3>

                                    <p>Sales Leads</p>
                                </div>
                                <a href="{{ route('sales-leads.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $total_invoices }}</h3>

                                    <p>Invoices</p>
                                </div>
                                <a href="{{ route('invoices.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $total_customers }}</h3>

                                    <p>Customers</p>
                                </div>
                                <a href="{{ route('customers.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $total_estimates }}</h3>

                                    <p>Estimates</p>
                                </div>
                                <a href="{{ route('estimates.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
