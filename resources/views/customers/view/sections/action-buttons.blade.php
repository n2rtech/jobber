<div class="card">
    <div class="card-header bg-dark text-center">
        <h3 style="font-size:1.1rem;font-weight: 400;margin: 0">Actions</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-block mb-4 btn-indigo">Edit
                    Customer</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('customer.send-email', $customer->id) }}"
                    class="btn btn-sm btn-block mb-4 btn-pink">Send Email</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('customer.upload-photos', $customer->id) }}"
                    class="btn btn-sm btn-block mb-4 btn-orange">Upload
                    Photo</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('customer.upload-documents', $customer->id) }}"
                    class="btn btn-sm btn-block mb-4 btn-info">Upload
                    Document</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('jobs.create', ['customer_id' => $customer->id]) }}"
                    class="btn btn-sm btn-block mb-4 btn-warning">New Job</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('customer.add-notes', $customer->id) }}"
                    class="btn btn-sm btn-block mb-4 btn-lime">Add Note</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('invoices.create', ['customer_id' => $customer->id]) }}"
                    class="btn btn-sm btn-block mb-3 btn-dark">New Invoice</a>
            </div>
            <div class="col-sm-6">
                <a href="{{ route('estimates.create', ['customer_id' => $customer->id]) }}"
                    class="btn btn-sm btn-block mb-3 btn-danger">New Estimate</a>
            </div>
        </div>
    </div>
</div>
