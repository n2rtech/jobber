{{-- Estimates Tab Start --}}

<div class="tab-pane customer-jobs-tabs" id="customer-estimates" role="tabpanel" aria-labelledby="customer-estimates-tab">
    @if (count($customer->estimates) > 0)
    <div class="table-responsive">
        <table id="dataTable" class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>{{ __('Estimate No.') }}</th>
                    <th>{{ __('Estimate Date') }}</th>
                    <th>{{ __('Expiry Date') }}</th>
                    <th>{{ __('Total') }}</th>
                    <th>{{ __('Paid') }}</th>
                    <th>{{ __('Balance') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer->estimates as $estimate)
                    <tr>
                        <td><a href="{{ route('estimates.edit', $estimate->id) }}">#{{ $estimate->id }}</a></td>
                        <td>{{ $estimate->estimate_date}}</td>
                        <td>{{ $estimate->expiry_date}}</td>
                        <td>€ {{ $estimate->total }}</td>
                        <td>€ {{ $estimate->paid }}</td>
                        <th>€ {{ $estimate->total - $estimate->paid }}</th>
                        <td>
                            @if ($estimate->status == 'created')
                                <span class="badge bg-info">{{ ucfirst($estimate->status) }}</span>
                            @endif
                            @if ($estimate->status == 'converted')
                                <span class="badge bg-success">{{ ucfirst($estimate->status) }}</span>
                            @endif
                            @if ($estimate->status == 'expired')
                                <span class="badge bg-danger">{{ ucfirst($estimate->status) }}</span>
                            @endif
                            @if ($estimate->status == 'sent')
                                <span class="badge bg-warning">{{ ucfirst($estimate->status) }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                <a class="dropdown-item" href="{{ route('estimates.edit', $estimate->id) }}"> Edit</a>
                                <a class="dropdown-item" href="{{ route('estimates.show', $estimate->id) }}"> View</a>
                                @if($estimate->status == 'converted')
                                <a class="dropdown-item" href="{{ route('invoices.show', $estimate->invoice_id) }}"> View Invoice</a>
                                @else
                                <a class="dropdown-item" href="javascript:void(0)" onclick="confirmConvert({{ $estimate->id }})"> Convert to Invoice</a>
                                @endif
                                <a class="dropdown-item" href="javascript:void(0)"> Send as Email</a>
                                <a class="dropdown-item" href="javascript:void(0)"> Download PDF</a>
                                <a class="dropdown-item" href="{{ route('estimates.show', ['estimate' => $estimate->id, 'print' => 'yes']) }}"> Print</a>
                                <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $estimate->id }})"> Delete</a>
                                <form id='delete-form{{ $estimate->id }}'
                                    action='{{ route('estimates.destroy', $estimate->id) }}' method='POST'>
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
        <p class="text-center mt-4">{{ __('No Estimates Added') }}</p>
    @endif
</div>

{{-- Estimates Tab End --}}
