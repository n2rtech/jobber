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
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <a href="{{ route('home') }}" class="btn btn-dark">All Dates</a>
                                    <button type="button" class="btn btn-dark dropdown-toggle filter-date-after dropdown-icon"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item" href="javascript:void(0)"
                                            onclick="showDateInput();">Custom</a>
                                        <a class="dropdown-item" href="{{ route('home', ['filter' => 'today']) }}">Today</a>
                                        <a class="dropdown-item"
                                            href="{{ route('home', ['filter' => 'yesterday']) }}">Yesterday</a>
                                        <a class="dropdown-item" href="{{ route('home', ['filter' => 'week']) }}">This
                                            Week</a>
                                        <a class="dropdown-item" href="{{ route('home', ['filter' => 'month']) }}">This
                                            Month</a>
                                        <a class="dropdown-item" href="{{ route('home', ['filter' => 'year']) }}">This
                                            Year</a>
                                    </div>
                                </div>
                                <input type="date" class="form-control" name="date" id="filter_date" onchange="handler(event);" @isset($filter_date) value="{{ $filter_date }}" @else style="display: none;" @endif>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $total_unscheduled_jobs }}</h3>

                                    <p>Unscheduled Jobs</p>
                                </div>
                                <a href="{{ route('jobs.index', ['scheduled' => 'no']) }}" class="small-box-footer">View All <i
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
                                <a href="{{ route('jobs.index', ['scheduled' => 'yes']) }}" class="small-box-footer">View
                                    All <i class="fas fa-arrow-circle-right"></i></a>
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
@push('scripts')
    <script>

        function showDateInput() {
            $('#filter_date').toggle();
        }

        function handler(e){
            var base = "{!! route('home') !!}";
            var url = base+'?date='+e.target.value ;
            location.href = url;
        }
    </script>
@endpush
