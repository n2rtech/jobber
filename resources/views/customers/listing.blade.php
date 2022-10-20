<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="customerDataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            @if ($customer->status == 'pending')
                                <span class="badge bg-danger">{{ __('Pending') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Completed') }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('customers.edit', $customer) }}" class="btn btn-warning"> <i
                                        class="fas fa-pen"></i> </a>
                                <button type="button" onclick="confirmDelete({{ $customer->id }})"
                                    class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                <form id='delete-form{{ $customer->id }}'
                                    action='{{ route('customers.destroy', $customer) }}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
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
