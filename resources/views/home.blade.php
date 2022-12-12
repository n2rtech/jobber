@extends('layouts.app')
@section('head')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('title', 'Dashboard')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)" class="btn btn-outline-dark"><i class="fas fa-calendar"></i> <span class="date"></span></a>
                                <a href="javascript:void(0)" class="btn btn-outline-dark"><i class="fas fa-clock"></i> <span class="hms"></span>
                                <span class="ampm"></span></a></li>
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
                                    <a class="text-white" href="{{ route('jobs.index', ['scheduled' => 'no']) }}">
                                    <h3>{{ $total_unscheduled_jobs }}</h3>

                                    <p>Unscheduled Jobs</p>
                                    </a>
                                </div>
                                <a href="{{ route('jobs.index', ['scheduled' => 'no']) }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>

                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <a class="text-white" href="{{ route('jobs.index', ['scheduled' => 'yes']) }}">
                                    <h3>{{ $total_scheduled_jobs }}</h3>

                                    <p>Scheduled Jobs</p>
                                    </a>
                                </div>
                                <a href="{{ route('jobs.index', ['scheduled' => 'yes']) }}" class="small-box-footer">View
                                    All <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <a class="text-white" href="{{ route('sales-leads.index') }}">
                                    <h3>{{ $total_leads }}</h3>

                                    <p>Sales Leads</p>
                                    </a>
                                </div>
                                <a href="{{ route('sales-leads.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <a class="text-white" href="{{ route('invoices.index') }}">
                                    <h3>{{ $total_invoices }}</h3>

                                    <p>Invoices</p>
                                    </a>
                                </div>
                                <a href="{{ route('invoices.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <a class="text-white" href="{{ route('customers.index') }}">
                                    <h3>{{ $total_customers }}</h3>

                                    <p>Customers</p>
                                    </a>
                                </div>
                                <a href="{{ route('customers.index') }}" class="small-box-footer">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <a class="text-white" href="{{ route('estimates.index') }}">
                                    <h3>{{ $total_estimates }}</h3>

                                    <p>Estimates</p>
                                    </a>
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

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h4><strong>Recent Completed Jobs</strong></h4>
                    <div class="table-responsive">
                        @if(count($completed_jobs) > 0)
                        <table id="completedDataTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>{{ __('Customer') }}</th>
                                    <th>{{ __('Address') }}</th>
                                    <th>{{ __('Contact') }}</th>
                                    <th>{{ __('Scheduled') }}</th>
                                    <th>{{ __('Total') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($completed_jobs as $job)
                                    <tr>
                                        <td><a href="{{ route('customers.show', $job->customer_id) }}">{{ $job->customer->name }}</a></td>
                                        <td>{!! getAddress($job->customer_id) !!}</td>

                                        <td>
                                            @isset($job->customer->phone) <i class="fa fa-square-phone"></i> {{ $job->customer->phone }} <br/> @endisset
                                            @isset($job->customer->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_1 }} <br/> @endisset
                                            @isset($job->customer->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_2 }}</td> @endisset
                                        </td>
                                        <td>
                                            @if ($job->scheduled == 'no')
                                                <span class="badge bg-danger">{{ __('No') }}</span>
                                            @else
                                            <span class="text-info">{{ \Carbon\Carbon::parse($job->start)->format('d-m-Y')}}</span>
                                            <br/>
                                                <span class="text-info">{{ substr(\Carbon\Carbon::parse($job->start)->format('l'), 0, 3) }}</span>
                                            <br/>
                                            <span class="text-success">{{ \Carbon\Carbon::parse($job->start)->format('H:i:s') }}</span>
                                            <br/>
                                            <span class="text-danger">{{ \Carbon\Carbon::parse($job->end)->format('H:i:s') }}</span>
                                            @endif
                                        </td>
                                        <td>€ {{ $job->total }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a class="dropdown-item" href="{{ route('jobs.edit', $job->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('jobs.show', $job->id) }}"><i class="fas fa-eye"></i> View</a>
                                                    <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $job->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                                    <form id='delete-form{{ $job->id }}'
                                                    action='{{ route('jobs.destroy', $job->id) }}' method='POST'>
                                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                    <input type='hidden' name='_method' value='DELETE'>
                                                </form>
                                                </div>
                                                </div>
                                        </td>
                                    </tr>
                                    @if($loop->iteration == 5)
                                        @break
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        @if(count($completed_jobs) > 5)
                            <div class="col-sm-12 text-center">
                                <a href="{{ route('jobs.index', ['status' => 'completed']) }}" class="btn btn-indigo">View All <i
                                    class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        @endif
                        @else
                        <p class="text-center mt-5">No Completed Job found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('scripts')
@include('sections.utilities')
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
