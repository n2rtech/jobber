<div class="card">
    <div class="card-header bg-dark text-center">
        <h3 style="font-size:1.1rem;font-weight: 400;margin: 0">Actions</h3>
    </div>
    <div class="card-body buttonBlocks">
        <div class="row pt-4">
            <div class="col-sm-3 col-6">
                <a href="{{ route('jobs.create', ['customer_id' => $customer->id]) }}"
                    class="btn mb-4">Add Job</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('customers.edit', $customer->id) }}" class="btn mb-4">Edit
                    Record</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('customer.upload-photos', $customer->id) }}"
                    class="btn mb-4">Upload
                    Photo</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('invoices.create', ['customer_id' => $customer->id]) }}"
                    class="btn mb-3">New Invoice</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('customer.add-notes', $customer->id) }}"
                    class="btn mb-4">Add Note</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('customer.send-email', $customer->id) }}"
                    class="btn mb-4">Send Email</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('customer.upload-documents', $customer->id) }}"
                    class="btn mb-4">Upload
                    File</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="{{ route('estimates.create', ['customer_id' => $customer->id]) }}"
                    class="btn mb-3">New Estimate</a>
            </div>
            <div class="col-sm-3 col-6">
                <a style="background-color: #3e5774;color:#ffffff;" href="{{ route('schedules.index') }}"
                    class="btn mb-3">Schedule</a>
            </div>
            <div class="col-sm-3 col-6">
                <a style="background-color: #3e5774;color:#ffffff;" href="{{ route('customers.index') }}"
                    class="btn mb-3">Search</a>
            </div>
        </div>
    </div>
</div>
