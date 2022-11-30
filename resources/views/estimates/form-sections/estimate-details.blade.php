<div class="row mb-2">

    <div class="col-md-6">
        <label for="name" class="label-small">{{ __('Estimate For') }}</label>
        <select class="form-control" id="name" name="name"></select>
        @error('name')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="terms" class="label-small">{{ __('Expiry Terms') }}</label>
        <select class="custom-select" id="terms" name="terms" onchange="setDueDate(this.value);">
            <option value="">Select Term</option>
            <option value="30">Net 30</option>
            <option value="60">Net 60</option>
            <option value="{{ $setting['due_on_receipt'] }}">Due on Receipt</option>
        </select>
        @error('terms')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="row mb-2">

    <div class="col-md-3">
        <label for="billing_address" class="label-small">{{ __('Billing Address') }}</label>
        <p id="billing_address" class="text-small text-muted">{{ __('Select Customer') }}</p>
    </div>

    <div class="col-md-3">
        <label for="estimate_no" class="label-small">{{ __('Estimate No.') }}</label>
        <p id="estimate_no" class="text-small text-muted">#{{ $estimate_no }}</p>
    </div>

    <div class="col-md-3">
        <label for="phone" class="label-small">{{ __('Phone') }}</label>
        <p id="phone" class="text-small text-muted">{{ __('Select Customer') }}</p>
    </div>

    <div class="col-md-3">
        <label for="shipping_address" class="label-small">{{ __('Shipping Address') }}</label>
        <div class="custom-control custom-checkbox">
            <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox"
                id="same_as_billing_address" name="same_as_billing_address" value="1" checked
                onchange="shippingAddressOptions();">
            <label for="same_as_billing_address"
                class="custom-control-label ctrl-label text-small">{{ __('Same as Billing
                                Address') }}</label>
        </div>
    </div>
</div>

<div class="row mb-2" id="shipping_address_div">
    <div class="col-md-12">
        <input class="form-control form-control-sm" name="shipping_address" placeholder="Enter Shipping Address" />
    </div>
</div>

<div class="row mb-3">

    <div class="col-md-6">
        <label for="estimate_date" class="label-small">{{ __('Estimate Date') }}</label>
        <div class="input-group date" id="estimate_date" data-target-input="nearest">
            <input type="text" class="form-control form-control-sm datetimepicker-input" name="estimate_date"
                id="estimate_date_input" data-target="#estimate_date"
                value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
            <div class="input-group-append" data-target="#estimate_date" data-toggle="datetimepicker">
                <div class="input-group-text text-sm"><i class="fa fa-calendar"></i></div>
            </div>
            @error('estimate_date')
                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="col-md-6">
        <label for="expiry_date" class="label-small">{{ __('Expiry Date') }}</label>
        <div class="input-group date" id="expiry_date" data-target-input="nearest">
            <input type="text" class="form-control form-control-sm datetimepicker-input" name="expiry_date"
                id="expiry_date_input" data-target="#expiry_date">
            <div class="input-group-append" data-target="#expiry_date" data-toggle="datetimepicker">
                <div class="input-group-text  text-sm"><i class="fa fa-calendar"></i>
                </div>
            </div>
            @error('expiry_date')
                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

</div>
