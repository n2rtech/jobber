{{-- Jobs Tab Start --}}

<div class="tab-pane customer-jobs-tabs" id="customer-jobs" role="tabpanel" aria-labelledby="customer-jobs-tab">
    @if(count($customer->jobs) > 0)
    <div class="table-responsive">
        <table id="dataTable" class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th width="10%">{{ __('Job No.') }}</th>
                    <th width="10%">{{ __('Date Added') }}</th>
                    <th width="10%">{{ __('Job Type') }}</th>
                    <th width="45%">{{ __('Products / Services') }}</th>
                    <th width="10%">{{ __('Scheduled') }}</th>
                    <th width="10%">{{ __('Total') }}</th>
                    <th width="5%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->jobs as $job)
                    <tr>
                        <td><a href="{{ route('jobs.show', $job->id) }}">#{{ $job->id }}</a></td>
                        <td>{{ \Carbon\Carbon::parse($job->created_at)->format('d-m-Y') }}</td>
                        <td>{{ $job->jobTitle->title }}</td>

                        <td>
                            <ul>
                                @foreach($job->products as $product)
                                    <li>{{ $product->product->name }}</li>
                                @endforeach
                            </ul>
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
        <p class="text-center mt-4">{{ __('No Jobs Added') }}</p>
    @endif
</div>

{{-- Jobs Tab End --}}
