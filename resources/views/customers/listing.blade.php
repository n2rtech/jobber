<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="customerDataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ getAddress($customer->id) }}</td>
                        <td>
                            @isset($customer->phone) <i class="fa fa-square-phone"></i> {{ $customer->phone }} <br/> @endisset
                            @isset($customer->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $customer->mobile_1 }} <br/> @endisset
                            @isset($customer->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $customer->mobile_2 }}</td> @endisset
                        <td>
                            @if ($customer->status == 'pending')
                                <span class="badge bg-danger">{{ __('Pending') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Completed') }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-info"> <i
                                        class="fas fa-pen"></i> </a>
                                <a href="{{ route('customers.show', $customer) }}" class="btn btn-warning"> <i class="fas fa-eye"></i> </a>

                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2">
            {{$customers->appends(request()->query())->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>
<!-- Listing Box Starts Here -->
