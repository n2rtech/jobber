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
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $invoice->customer->name }}</td>
                        <td>{{ $invoice->customer->address_1 }} @isset($invoice->customer->address_2) {{ $invoice->customer->address_2 }} @endisset</td>
                        <td>{{ $invoice->customer->phone }}</td>
                        <td>
                            @if ($invoice->scheduled == 'no')
                                <span class="badge bg-danger">{{ __('No') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Yes') }}</span>
                            @endif
                        </td>
                        <td>£ {{ $invoice->total }}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('invoices.edit', $invoice) }}" class="btn btn-warning"> <i
                                        class="fas fa-pen"></i> </a>
                                <button type="button" onclick="confirmDelete({{ $invoice->id }})"
                                    class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                <form id='delete-form{{ $invoice->id }}'
                                    action='{{ route('invoices.destroy', $invoice) }}' method='POST'>
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
