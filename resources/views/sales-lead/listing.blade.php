<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('Lead No.') }}</th>
                    <th>{{ __('Date') }}</th>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td>#{{ $lead->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($lead->created_at)->format('Y-m-d') }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->address_1 }} @isset($lead->address_2) {{ $lead->address_2 }} @endisset</td>
                        <td>{{ $lead->phone }}</td>
                        <td>
                            @if ($lead->status == 'pending')
                                <span class="badge bg-danger">{{ __('Pending') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Converted') }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('sales-leads.edit', $lead) }}" class="btn btn-warning"> <i
                                        class="fas fa-pen"></i> </a>
                                <button type="button" onclick="confirmDelete({{ $lead->id }})"
                                    class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                <form id='delete-form{{ $lead->id }}'
                                    action='{{ route('sales-leads.destroy', $lead) }}' method='POST'>
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
