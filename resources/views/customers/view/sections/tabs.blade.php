<div class="customer-tabs">
        <div class="col-sm-12">
            <div class="card card-dark card-tabs">
                <div class="card-header p-0 pt-1">
                    {{-- Tab navlinks --}}
                    <ul class="nav nav-tabs nav-fill" id="customer-tab" role="tablist">

                        <li class="nav-item" id="customer-notes-b">
                            <a class="nav-link active" id="customer-notes-tab" data-toggle="pill"
                                href="#customer-notes" role="tab" aria-controls="customer-notes"
                                aria-selected="true">Calls /Notes</a>
                        </li>

                        <li class="nav-item" id="customer-archived-notes-b">
                            <a class="nav-link" id="customer-archived-notes-tab" data-toggle="pill"
                                href="#customer-archived-notes" role="tab" aria-controls="customer-archived-notes"
                                aria-selected="false">Archived Notes</a>
                        </li>

                        <li class="nav-item" id="customer-jobs-b">
                            <a class="nav-link" id="customer-jobs-tab" data-toggle="pill"
                                href="#customer-jobs" role="tab" aria-controls="customer-jobs"
                                aria-selected="false">Jobs</a>
                        </li>

                        <li class="nav-item" id="customer-estimates-b">
                            <a class="nav-link" id="customer-estimates-tab" data-toggle="pill"
                                href="#customer-estimates" role="tab" aria-controls="customer-estimates"
                                aria-selected="false">Estimates</a>
                        </li>

                        <li class="nav-item" id="customer-invoices-b">
                            <a class="nav-link" id="customer-invoices-tab" data-toggle="pill"
                                href="#customer-invoices" role="tab" aria-controls="customer-invoices"
                                aria-selected="false">Invoices</a>
                        </li>

                        <li class="nav-item" id="customer-photos-b">
                            <a class="nav-link" id="customer-photos-tab" data-toggle="pill"
                                href="#customer-photos" role="tab" aria-controls="customer-photos"
                                aria-selected="false">Photos</a>
                        </li>

                        <li class="nav-item" id="customer-documents-b">
                            <a class="nav-link" id="customer-documents-tab" data-toggle="pill"
                                href="#customer-documents" role="tab" aria-controls="customer-documents"
                                aria-selected="false">Documents</a>
                        </li>

                        <li class="nav-item" id="customer-directions-b">
                            <a class="nav-link" id="customer-directions-tab" data-toggle="pill"
                                href="#customer-directions" role="tab" aria-controls="customer-directions"
                                aria-selected="false">Directions</a>
                        </li>

                        <li class="nav-item" id="customer-sentemails-b">
                            <a class="nav-link" id="customer-sentemails-tab" data-toggle="pill"
                                href="#customer-sentemails" role="tab" aria-controls="customer-sentemails"
                                aria-selected="false">Sent Emails</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="customer-banh-tab" data-toggle="pill"
                                href="#customer-banh" role="tab" aria-controls="customer-banh"
                                aria-selected="false">Banh</a>
                        </li>

                    </ul>

                </div>

                <div class="card-body">
                    <div class="tab-content" id="customer-tabContent">

                        @include('customers.view.tabs.notes')

                        @include('customers.view.tabs.archived')

                        @include('customers.view.tabs.jobs')

                        @include('customers.view.tabs.estimates')

                        @include('customers.view.tabs.invoices')

                        @include('customers.view.tabs.photos')

                        @include('customers.view.tabs.documents')

                        @include('customers.view.tabs.directions')

                        @include('customers.view.tabs.sent-emails')

                        @include('customers.view.tabs.banh')

                    </div>
                </div>
            </div>
        </div>
</div>
