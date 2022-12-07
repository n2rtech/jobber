<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        @include('customers.filter')
        <table id="customerDataTable" class="set-fonts table table-bordered table-striped" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Mobile 1') }}</th>
                    <th>{{ __('Mobile 2') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td><a href="{{ route('customers.show', $customer->id) }}">{{ $customer->name }}</a></td>
                        <td>{{ getAddress($customer->id) }}</td>
                        <td>
                            <br class="hidden-sm" />
                            {{ $customer->phone }}
                        <td>
                            <br class="hidden-sm" />
                           {{ $customer->mobile_1 }}
                        </td>
                        <td>
                            <br class="hidden-sm" />
                           {{ $customer->mobile_2 }}
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                  <a class="dropdown-item" href="{{ route('customers.edit', $customer->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                  <a class="dropdown-item" href="{{ route('customers.show', $customer->id) }}"><i class="fas fa-eye"></i> View</a>
                                </div>
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
