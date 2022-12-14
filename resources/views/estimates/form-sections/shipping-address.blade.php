<div class="modal fade" id="modal-shipping-address" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h4 class="modal-title">Shipping Address</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="address_1" class="col-sm-3 col-form-label">{{ __('Address 1') }}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="address_1" name="address_1"
                            placeholder="Enter Street Address 1" value="@isset($estimate) {{ $estimate->shipping_address_1 }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address_2" class="col-sm-3 col-form-label">{{ __('Address 2') }}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="address_2" name="address_2"
                            placeholder="Enter Street Address 2" value="@isset($estimate) {{ $estimate->shipping_address_2 }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="city" name="city"
                            placeholder="Enter City" value="@isset($estimate) {{ $estimate->shipping_city }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="country" class="col-sm-3 col-form-label">{{ __('County') }}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="country" name="country"
                            placeholder="Enter County" value="@isset($estimate) {{ $estimate->shipping_state }} @endisset">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eir_code" class="col-sm-3 col-form-label">{{ __('Eircode') }}</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="eir_code" name="eir_code"
                            placeholder="Enter Eircode" value="@isset($estimate) {{ $estimate->shipping_eir_code }} @endisset">
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="sameAsBillingAddress();">Same as Billing Address</button>
                <button type="button" class="btn btn-primary" onclick="setShippingAddress();">Save</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
