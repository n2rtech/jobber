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
            <div class="card card-dark card-tabs">
                <div class="card-header p-0 pt-1">
                    <ul class="nav nav-tabs nav-fill" id="jobs-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="completed-tab-fill" data-toggle="tab" href="#completed-fill" role="tab" aria-controls="completed-fill" aria-selected="true">Recent Completed Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="scheduled-tab-fill" data-toggle="tab" href="#scheduled-fill" role="tab" aria-controls="scheduled-fill" aria-selected="false">Recent Scheduled Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="unscheduled-tab-fill" data-toggle="tab" href="#unscheduled-fill" role="tab" aria-controls="unscheduled-fill" aria-selected="false">Recent Unscheduled Jobs</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="jobs-tabContent">
                        <div class="tab-pane active" id="completed-fill" role="tabpanel" aria-labelledby="completed-tab-fill">
                            <div class="table-responsive">
                                @if(count($completed_jobs) > 0)
                                <table id="dataTable" class="table table-bordered table-striped">
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
                                                <td>{{ getAddress($job->customer_id) }}</td>

                                                <td>
                                                    @isset($job->customer->phone) <i class="fa fa-square-phone"></i> {{ $job->customer->phone }} <br/> @endisset
                                                    @isset($job->customer->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_1 }} <br/> @endisset
                                                    @isset($job->customer->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_2 }}</td> @endisset
                                                </td>
                                                <td>
                                                    @if ($job->scheduled == 'no')
                                                        <span class="badge bg-danger">{{ __('No') }}</span>
                                                    @else
                                                    <span class="badge bg-success"> <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('Y-m-d')}}</span>
                                                    <br/>
                                                    <span class="badge bg-info"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('h:i:s') }}</span>
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
                        <div class="tab-pane" id="scheduled-fill" role="tabpanel" aria-labelledby="scheduled-tab-fill">
                            <div class="table-responsive">
                                @if(count($scheduled_jobs) > 0)
                                <table id="dataTable" class="table table-bordered table-striped">
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
                                        @foreach ($scheduled_jobs as $job)
                                            <tr>
                                                <td><a href="{{ route('customers.show', $job->customer_id) }}">{{ $job->customer->name }}</a></td>
                                                <td>{{ getAddress($job->customer_id) }}</td>

                                                <td>
                                                    @isset($job->customer->phone) <i class="fa fa-square-phone"></i> {{ $job->customer->phone }} <br/> @endisset
                                                    @isset($job->customer->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_1 }} <br/> @endisset
                                                    @isset($job->customer->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_2 }}</td> @endisset
                                                </td>
                                                <td>
                                                    @if ($job->scheduled == 'no')
                                                        <span class="badge bg-danger">{{ __('No') }}</span>
                                                    @else
                                                    <span class="badge bg-success"> <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('Y-m-d')}}</span>
                                                    <br/>
                                                    <span class="badge bg-info"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('h:i:s') }}</span>
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
                                @if(count($scheduled_jobs) > 5)
                                    <div class="col-sm-12 text-center">
                                        <a href="{{ route('jobs.index', ['scheduled' => 'yes']) }}" class="btn btn-indigo">View All <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                @endif
                                @else
                                <p class="text-center mt-5">No Scheduled Job found.</p>
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" id="unscheduled-fill" role="tabpanel" aria-labelledby="unscheduled-tab-fill">
                            <div class="table-responsive">
                                @if(count($unscheduled_jobs) > 0)
                                <table id="dataTable" class="table table-bordered table-striped">
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
                                        @foreach ($unscheduled_jobs as $job)
                                            <tr>
                                                <td><a href="{{ route('customers.show', $job->customer_id) }}">{{ $job->customer->name }}</a></td>
                                                <td>{{ getAddress($job->customer_id) }}</td>

                                                <td>
                                                    @isset($job->customer->phone) <i class="fa fa-square-phone"></i> {{ $job->customer->phone }} <br/> @endisset
                                                    @isset($job->customer->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_1 }} <br/> @endisset
                                                    @isset($job->customer->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $job->customer->mobile_2 }}</td> @endisset
                                                </td>
                                                <td>
                                                    @if ($job->scheduled == 'no')
                                                        <span class="badge bg-danger">{{ __('No') }}</span>
                                                    @else
                                                    <span class="badge bg-success"> <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('Y-m-d')}}</span>
                                                    <br/>
                                                    <span class="badge bg-info"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('h:i:s') }}</span>
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
                                @if(count($unscheduled_jobs) > 5)
                                <div class="col-sm-12 text-center">
                                    <a href="{{ route('jobs.index', ['scheduled' => 'no']) }}" class="btn btn-indigo">View All <i
                                        class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            @endif
                            @else
                            <p class="text-center mt-5">No Unscheduled Job found.</p>
                            @endif
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
