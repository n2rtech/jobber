<div class="modal fade" id="modal-payment" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Add Payment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <form id="paymentForm" method="POST" action="{{ route('payments.update', $invoice->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="date" class="col-sm-4 col-form-label">{{ __('Date') }}</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="date" name="date"
                                    placeholder="Enter Date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="amount" class="col-sm-4 col-form-label">{{ __('Amount') }}</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="amount" name="amount"
                                    placeholder="Enter Amount" value="{{ $invoice->total - $invoice->payments->sum('amount') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="transaction_id"
                                class="col-sm-4 col-form-label">{{ __('Transaction Id') }}</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="transaction_id" name="transaction_id"
                                    placeholder="Enter Transaction Id">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="paymentForm">Add Payment</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
