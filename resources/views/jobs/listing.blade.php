<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
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
                @foreach ($jobs as $job)
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
                                <span class="badge bg-success">{{ __('Yes') }}</span>
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
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Listing Box Starts Here -->
