<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            @if ($customer->status == 'pending')
                                <span class="badge bg-danger">Pending</span>
                            @else
                                <span class="badge bg-success">Completed</span>
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
    </div>
</div>
<!-- Listing Box Starts Here -->
