<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-pink">Edit Customer</a>
            <a href="{{ route('customer.upload-photos', $customer->id) }}" class="btn btn-sm btn-orange">Upload Photo</a>
            <a href="{{ route('customer.upload-documents', $customer->id) }}" class="btn btn-sm btn-info">Upload Document</a>
            <a href="{{ route('jobs.create', ['customer_id' => $customer->id]) }}" class="btn btn-sm btn-warning">New Job</a>
            <a href="{{ route('customer.add-notes', $customer->id) }}" class="btn btn-sm btn-lime">Add Note</a>
            <a href="{{ route('invoices.create', ['customer_id' => $customer->id]) }}" class="btn btn-sm btn-dark">New Invoice</a>
            <a href="{{ route('estimates.create', ['customer_id' => $customer->id]) }}" class="btn btn-sm btn-danger">New Estimate</a>
            <a href="{{ route('customer.send-email', $customer->id) }}" class="btn btn-sm btn-indigo">Send Email</a>
        </div>
    </div>
 </div>
