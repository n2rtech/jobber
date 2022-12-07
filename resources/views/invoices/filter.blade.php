<!-- Filter Box Starts Here -->
<div id="filterBox">
        <form id="invoiceSearchForm" action="{{ route('invoices.index') }}">
            <div class="form-row">
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="name">{{ __('Customer Name') }}</label>
                        <input type="name" name="name" class="form-control form-control-sm" placeholder="Customer Name"
                            value="{{ $filter_name }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Contact No') }}</label>
                        <input type="text" class="form-control form-control-sm" id="phone"
                            placeholder="Contact No" name="phone" value="{{ $filter_phone }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="statuses">{{ __('Status') }}</label>
                        <select class="form-control form-control-sm" name="status" id="statuses">
                            <option value="">{{ __('All') }}</option>
                            <option value="paid" @if($filter_status == 'paid') selected @endif>{{ __('Paid') }}</option>
                            <option value="unpaid" @if($filter_status == 'unpaid') selected @endif>{{ __('Unpaid') }}</option>
                            <option value="cancelled" @if($filter_status == 'cancelled') selected @endif>{{ __('Cancelled') }}</option>
                            <option value="partial" @if($filter_status == 'partial') selected @endif>{{ __('Partial') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="invoice_from">{{ __('Invoice From') }}</label>
                        <input type="date" name="invoice_from" id="invoice_from" class="form-control form-control-sm"
                            value="{{ $filter_invoice_from }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="invoice_to">{{ __('Invoice To') }}</label>
                        <input type="date" class="form-control form-control-sm" name="invoice_to" id="invoice_to" value="{{ $filter_invoice_to }}">
                    </div>
                </div>
                <div class="col-xl-1 col-md-12 mt-4">
                    <div class="form-group" style="margin-top: 8px">
                        <button type="submit" class="btn btn-success btn-sm" form="invoiceSearchForm"><i class="fas fa-search"></i></button>
                        <a href={{ route('invoices.index') }} class="btn btn-sm btn-indigo"><i class="fas fa-refresh"></i></a>
                    </div>
                </div>
            </div>
        </form>
</div>
<!-- Filter Box Ends Here -->
