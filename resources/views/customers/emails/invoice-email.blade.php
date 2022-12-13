<div class="modal fade" id="modal-invoice-email-template" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Email Template</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="invoicetemplateForm" method="POST" action="{{ route('invoices.confirmation') }}">
                    @csrf
                    <input type="hidden" name="invoice_id" id="invoice_id">
                    <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input class="form-control" name="email_address" id="invoice_email_address" value="{{ $customer->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email_template">Template</label>
                        <select class="form-control" name="email_template" id="invoice_email_template"
                            onchange="getInvoicetemplate();">
                            @foreach ($template_confirmation->contents as $content)
                                <option value="{{ $content->id }}" @if ($loop->first) selected @endif>
                                    {{ $content->template_name }}</option>
                            @endforeach
                            @foreach ($template_followup->contents as $content)
                                <option value="{{ $content->id }}">
                                    {{ $content->template_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email_subject">Subject</label>
                        <input class="form-control" name="email_subject" id="invoice_email_subject">
                    </div>
                    <div class="form-group">
                        <label for="email_message">Message</label>
                        <textarea class="form-control" name="email_message" id="invoice_email_message" rows="6"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="invoicetemplateForm">Send</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
