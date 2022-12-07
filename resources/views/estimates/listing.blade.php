<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        @include('estimates.filter')
        @if ($agent->isMobile())
            <table id="invoiceTable" class="set-fonts table table-bordered table-striped" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th class="all">{{ __('Customer') }}</th>
                        <th class="all">{{ __('Estimate No.') }}</th>
                        <th class="all">{{ __('Total') }}</th>
                        <th class="none">{{ __('Estimate Date') }}</th>
                        <th class="none">{{ __('Paid') }}</th>
                        <th class="none">{{ __('Balance') }}</th>
                        {{-- <th>{{ __('Status') }}</th> --}}
                        <th class="none"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estimates as $estimate)
                        <tr>
                            <td><a
                                    href="{{ route('customers.show', $estimate->customer_id) }}">{{ $estimate->customer->name }}</a>
                            </td>
                            <td><a href="{{ route('estimates.show', $estimate->id) }}">#{{ $estimate->id }}</a></td>
                            <td>€ {{ $estimate->total }}</td>
                            <td> {{ $estimate->estimate_date }}</td>
                            <td>€ {{ $estimate->paid }}</td>
                            <th>€ {{ $estimate->total - $estimate->paid }}</th>
                            {{-- <td>
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
                        </td> --}}
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-hover"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                        <a class="dropdown-item" href="{{ route('estimates.edit', $estimate->id) }}">
                                            Edit</a>
                                        <a class="dropdown-item" href="{{ route('estimates.show', $estimate->id) }}">
                                            View</a>
                                        @if ($estimate->status == 'converted')
                                            <a class="dropdown-item"
                                                href="{{ route('invoices.show', $estimate->invoice_id) }}"> View
                                                Invoice</a>
                                        @else
                                            <a class="dropdown-item" href="javascript:void(0)"
                                                onclick="confirmAccept({{ $estimate->id }})"> Convert to Invoice</a>
                                        @endif
                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"
                                            data-target="#modal-email-template"
                                            onclick="$('#estimate_id').val({{ $estimate->id }});gettemplate();"> Send
                                            as Email</a>
                                        <a class="dropdown-item" href="javascript:void(0)"> Download PDF</a>
                                        <a class="dropdown-item"
                                            href="{{ route('estimates.show', ['estimate' => $estimate->id, 'print' => 'yes']) }}">
                                            Print</a>
                                        <a class="dropdown-item" href="javascript:void(0)"
                                            onclick="confirmDelete({{ $estimate->id }})"> Delete</a>
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
        @else
            <table id="invoiceTable" class="set-fonts table table-bordered table-striped" style="font-size: 14px;">
                <thead>
                    <tr>
                        <th>{{ __('Customer') }}</th>
                        <th>{{ __('Estimate Date') }}</th>
                        <th>{{ __('Total') }}</th>
                        <th>{{ __('Estimate No.') }}</th>
                        <th>{{ __('Paid') }}</th>
                        <th>{{ __('Balance') }}</th>
                        {{-- <th>{{ __('Status') }}</th> --}}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estimates as $estimate)
                        <tr>
                            <td><a
                                    href="{{ route('customers.show', $estimate->customer_id) }}">{{ $estimate->customer->name }}</a>
                            </td>
                            <td> {{ $estimate->estimate_date }}</td>
                            <td>€ {{ $estimate->total }}</td>
                            <td><a href="{{ route('estimates.show', $estimate->id) }}">#{{ $estimate->id }}</a></td>
                            <td>€ {{ $estimate->paid }}</td>
                            <th>€ {{ $estimate->total - $estimate->paid }}</th>
                            {{-- <td>
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
                        </td> --}}
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-hover"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                        <a class="dropdown-item" href="{{ route('estimates.edit', $estimate->id) }}">
                                            Edit</a>
                                        <a class="dropdown-item" href="{{ route('estimates.show', $estimate->id) }}">
                                            View</a>
                                        @if ($estimate->status == 'converted')
                                            <a class="dropdown-item"
                                                href="{{ route('invoices.show', $estimate->invoice_id) }}"> View
                                                Invoice</a>
                                        @else
                                            <a class="dropdown-item" href="javascript:void(0)"
                                                onclick="confirmAccept({{ $estimate->id }})"> Convert to Invoice</a>
                                        @endif
                                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal"
                                            data-target="#modal-email-template"
                                            onclick="$('#estimate_id').val({{ $estimate->id }});gettemplate();"> Send
                                            as Email</a>
                                        <a class="dropdown-item" href="javascript:void(0)"> Download PDF</a>
                                        <a class="dropdown-item"
                                            href="{{ route('estimates.show', ['estimate' => $estimate->id, 'print' => 'yes']) }}">
                                            Print</a>
                                        <a class="dropdown-item" href="javascript:void(0)"
                                            onclick="confirmDelete({{ $estimate->id }})"> Delete</a>
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
        @endif
    </div>
</div>
<!-- Listing Box Starts Here -->
