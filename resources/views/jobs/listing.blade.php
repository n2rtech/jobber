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
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->customer->name }}</td>
                        <td>{{ $job->customer->address_1 }} @isset($job->customer->address_2) {{ $job->customer->address_2 }} @endisset</td>
                        <td>{{ $job->customer->phone }}</td>
                        <td>
                            @if ($job->scheduled == 'no')
                                <span class="badge bg-danger">{{ __('No') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Yes') }}</span>
                            @endif
                        </td>
                        <td>£ {{ $job->total }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('jobs.edit', $job) }}" class="btn btn-warning"> <i
                                        class="fas fa-pen"></i> </a>
                                <button type="button" onclick="confirmDelete({{ $job->id }})"
                                    class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                <form id='delete-form{{ $job->id }}'
                                    action='{{ route('jobs.destroy', $job) }}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Listing Box Starts Here -->
