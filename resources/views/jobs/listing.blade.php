<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        @include('jobs.filter')
        @if ($agent->isMobile())
        <div class="table-responsive">
            <table id="jobseTable" class="set-fonts table table-bordered table-striped" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th class="all" style="width: 15%">{{ __('Customer') }}</th>
                        <th class="all" style="width: 30%">{{ __('Address') }}</th>
                        <th class="none" style="width: 10%">{{ __('Contact') }}</th>
                        <th class="none" style="width: 10%">Job No.</th>
                        <th class="all" style="width: 10%">{{ __('Job Type') }}</th>
                        <th class="all" style="width: 10%">{{ __('Scheduled') }}</th>
                        <th class="none" style="width: 10%">{{ __('Total') }}</th>
                        <th class="none" style="width: 5%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>
                                <a href="{{ route('customers.show', $job->customer_id) }}">{{ $job->customer->name }}</a>
                            </td>
                            <td>
                                {!! getCity($job->customer_id) !!}
                            </td>
                            <td>
                                <br class="hidden-sm" />
                                @isset($job->customer->phone) {{ $job->customer->phone }} <br/> @endisset
                                @isset($job->customer->mobile_1) {{ $job->customer->mobile_1 }} <br/> @endisset
                                @isset($job->customer->mobile_2) {{ $job->customer->mobile_2 }}</td> @endisset
                            </td>
                            <td><a href="{{ route('jobs.show', $job->id) }}">{{ $job->id }}</a></td>
                            <td>
                                {{ $job->jobTitle->title }}
                            </td>
                            <td>
                                @if ($job->scheduled == 'no')
                                    <span class="badge bg-danger">{{ __('No') }}</span>
                                @else
                                <br class="hidden-sm" />
                                <span class="text-info">{{ \Carbon\Carbon::parse($job->start)->format('d-M')}}</span>
                                <br/>
                                    <span class="text-info">{{ substr(\Carbon\Carbon::parse($job->start)->format('l'), 0, 3) }}</span>
                                <br/>
                                <span class="text-success">{{ \Carbon\Carbon::parse($job->start)->format('H:i') }}</span>
                                <br/>
                                <span class="text-danger">{{ \Carbon\Carbon::parse($job->end)->format('H:i') }}</span>
                                @endif
                            </td>
                            <td>€ {{ $job->invoice->total }}</td>
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
                    @endforeach
                </tbody>
            </table>
        </div>

        @else
        <div class="table-responsive">
            <table id="jobseTable" class="set-fonts table table-bordered table-striped" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th style="width: 15%">{{ __('Customer') }}</th>
                        <th  style="width: 30%">{{ __('Address') }}</th>
                        <th  style="width: 10%">{{ __('Contact') }}</th>
                        <th  style="width: 10%">Job No.</th>
                        <th  style="width: 10%">{{ __('Job Type') }}</th>
                        <th  style="width: 10%">{{ __('Scheduled') }}</th>
                        <th  style="width: 10%">{{ __('Total') }}</th>
                        <th  style="width: 5%"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                        <tr>
                            <td>
                                <a href="{{ route('customers.show', $job->customer_id) }}">{{ $job->customer->name }}</a>
                            </td>
                            <td>
                                {!! getAddress($job->customer_id) !!}
                            </td>
                            <td>
                                <br class="hidden-sm" />
                                @isset($job->customer->phone) {{ $job->customer->phone }} <br/> @endisset
                                @isset($job->customer->mobile_1) {{ $job->customer->mobile_1 }} <br/> @endisset
                                @isset($job->customer->mobile_2) {{ $job->customer->mobile_2 }}</td> @endisset
                            </td>
                            <td><a href="{{ route('jobs.show', $job->id) }}">{{ $job->id }}</a></td>
                            <td>
                                {{ $job->jobTitle->title }}
                            </td>
                            <td>
                                @if ($job->scheduled == 'no')
                                    <span class="badge bg-danger">{{ __('No') }}</span>
                                @else
                                <br class="hidden-sm" />
                                <span class="text-info">{{ \Carbon\Carbon::parse($job->start)->format('d-m-Y')}}</span>
                                <br/>
                                    <span class="text-info">{{ substr(\Carbon\Carbon::parse($job->start)->format('l'), 0, 3) }}</span>
                                <br/>
                                <span class="text-success">{{ \Carbon\Carbon::parse($job->start)->format('H:i:s') }}</span>
                                <br/>
                                <span class="text-danger">{{ \Carbon\Carbon::parse($job->end)->format('H:i:s') }}</span>
                                @endif
                            </td>
                            <td>€ {{ $job->invoice->total }}</td>
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
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

    </div>
</div>
<!-- Listing Box Starts Here -->
