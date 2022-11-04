{{-- Jobs Tab Start --}}

<div class="tab-pane" id="customer-jobs" role="tabpanel" aria-labelledby="customer-jobs-tab">
    @if(count($customer->jobs) > 0)
        <table id="dataTable" class="table table-sm">
            <thead>
                <tr>
                    <th>{{ __('Date Added') }}</th>
                    <th>{{ __('Job Type') }}</th>
                    <th>{{ __('Products / Services') }}</th>
                    <th>{{ __('Scheduled') }}</th>
                    <th>{{ __('Total') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->jobs as $job)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($job->created_at)->format('Y-m-d') }}</td>
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
                @endforeach
            </tbody>
        </table>
    @else
        <p class="text-center mt-4">{{ __('No Jobs Added') }}</p>
    @endif
</div>

{{-- Jobs Tab End --}}
