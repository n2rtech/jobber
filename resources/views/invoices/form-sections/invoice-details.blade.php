<div class="row mb-2">

    <div class="col-md-6">
        <label for="name" class="label-small">{{ __('Invoice For') }}</label>
        <select class="form-control" id="name" name="name"></select>
        @error('name')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="terms" class="label-small">{{ __('Invoice Terms') }}</label>
        <select class="custom-select" id="terms" name="terms" onchange="setDueDate();">
            <option value="">Select Term</option>
            <option value="30" @isset($invoice) @if($invoice->terms == 30) selected @endif @else selected @endisset>Net 30</option>
            <option value="60" @isset($invoice) @if($invoice->terms == 60) selected @endif @endisset>Net 60</option>
            <option value="{{ $setting['due_on_receipt'] }}" @isset($invoice) @if($invoice->terms == $setting['due_on_receipt']) selected @endif @endisset>Due on Receipt</option>
        </select>
        @error('terms')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="row mb-2">

    <div class="col-md-3">
        <label for="billing_address" class="label-small">{{ __('Billing Address') }}</label>
        <p id="billing_address" class="text-small text-muted">@isset($customer) {!! getAddress($customer->id) !!} @else @isset($invoice) {!! getAddress($invoice->customer->id) !!} @else {{ __('Select Customer') }} @endisset @endif</p>
    </div>

    <div class="col-md-3">
        <label for="invoice_no" class="label-small">{{ __('Invoice No.') }}</label>
        <p id="invoice_no" class="text-small text-muted">#@isset($invoice) {{ $invoice->id }} @else {{ $invoice_no }} @endisset</p>
    </div>

    <div class="col-md-3">
        <label for="phone" class="label-small">{{ __('Phone') }}</label>
        <p id="phone" class="text-small text-muted">@isset($customer->phone) {{ $customer->phone }} @else @isset($invoice) {{ $invoice->customer->phone }} @else {{ __('Select Customer') }} @endisset @endif</p>
    </div>

    <div class="col-md-3">
        <label for="shipping_address" class="label-small">{{ __('Shipping Address') }}</label>
        <div id="shipping_address_div">
            @isset($invoice)
                @if($invoice->same_as_billing_address)
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox"
                            id="same_as_billing_address" name="same_as_billing_address" value="1" checked onchange="shippingAddressOptions();">
                        <label for="same_as_billing_address"
                            class="custom-control-label ctrl-label text-small">{{ __('Same as Billing
                                            Address') }}</label>
                    </div>
                @else
                <p id="shipping_address" class="text-small text-muted" data-toggle="#modal" onclick="showAddressModal();">{{ $invoice->shipping_address_1 }} {{ $invoice->shipping_address_2 }} {{ $invoice->shipping_city }} {{ $invoice->shipping_state }} {{ $invoice->shipping_country }} <a target="_blank" href="http://maps.google.com/?q={{ $invoice->shipping_eir_code }}">{{ $invoice->shipping_eir_code }}</a></p>
                @endif
            @else
                <div class="custom-control custom-checkbox">
                    <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox"
                        id="same_as_billing_address" name="same_as_billing_address" value="1" checked onchange="shippingAddressOptions();">
                    <label for="same_as_billing_address"
                        class="custom-control-label ctrl-label text-small">{{ __('Same as Billing
                                        Address') }}</label>
                </div>
            @endisset
        </div>
    </div>
</div>

<div class="row mb-3">

    <div class="col-md-6">
        <label for="invoice_date" class="label-small">{{ __('Invoice Date') }}</label>
        <div class="input-group date" id="invoice_date" data-target-input="nearest">
            <input type="text" class="form-control form-control-sm datetimepicker-input" name="invoice_date"
                id="invoice_date_input" data-target="#invoice_date" @isset($invoice) value="{{ $invoice->invoice_date }}" @else value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}" @endisset>
            <div class="input-group-append" data-target="#invoice_date" data-toggle="datetimepicker">
                <div class="input-group-text text-sm"><i class="fa fa-calendar"></i></div>
            </div>
            @error('invoice_date')
                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <label for="due_date" class="label-small">{{ __('Due Date') }}</label>
        <div class="input-group date" id="due_date" data-target-input="nearest">
            <input type="text" class="form-control form-control-sm datetimepicker-input" name="due_date"
                id="due_date_input" data-target="#due_date" @isset($invoice) value="{{ $invoice->due_date }}" @endisset>
            <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
                <div class="input-group-text  text-sm"><i class="fa fa-calendar"></i>
                </div>
            </div>
            @error('expiry_date')
                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
