<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        @include('invoices.filter')
        <table id="dataTable" class="table table-bordered table-striped" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>{{ __('Invoice No.') }}</th>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Invoice Date') }}</th>
                    <th>{{ __('Total') }}</th>
                    <th>{{ __('Paid') }}</th>
                    <th>{{ __('Balance') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td><a href="{{ route('invoices.edit', $invoice->id) }}">#{{ $invoice->id }}</a></td>
                        <td><a href="{{ route('customers.show', $invoice->customer_id) }}">{{ $invoice->customer->name }}</a></td>
                        <td>{{ $invoice->invoice_date}}</td>
                        <td>€ {{ $invoice->total }}</td>
                        <td>€ {{ $invoice->paid }}</td>
                        <th>€ {{ $invoice->total - $invoice->paid }}</th>
                        <td>
                            @if ($invoice->status == 'paid')
                                <span class="badge bg-success">{{ ucfirst($invoice->status) }}</span>
                            @endif
                            @if ($invoice->status == 'unpaid')
                                <span class="badge bg-danger">{{ ucfirst($invoice->status) }}</span>
                            @endif
                            @if ($invoice->status == 'cancelled')
                                <span class="badge bg-warning">{{ ucfirst($invoice->status) }}</span>
                            @endif
                            @if ($invoice->status == 'partial')
                                <span class="badge bg-info">{{ ucfirst($invoice->status) }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                  <a class="dropdown-item" href="{{ route('invoices.edit', $invoice->id) }}"> Edit</a>
                                  <a class="dropdown-item" href="{{ route('invoices.show', $invoice->id) }}"> View</a>
                                  <a class="dropdown-item" href="javascript:void(0)"> Send as Email</a>
                                  <a class="dropdown-item" href="{{ route('invoices.show', ['invoice' => $invoice->id, 'print' => 'yes']) }}"> Download PDF</a>
                                  <a class="dropdown-item" href="{{ route('invoices.show', ['invoice' => $invoice->id, 'print' => 'yes']) }}"> Print</a>
                                  <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $invoice->id }})"> Delete</a>
                                  <form id='delete-form{{ $invoice->id }}'
                                    action='{{ route('invoices.destroy', $invoice->id) }}' method='POST'>
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
