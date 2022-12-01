<div class="row">
    @if ($setting['allow_for_note'] == 1)
        <div class="col-md-6">
            <div class="card card-dark collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Internal Notes & Attachments') }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <textarea rows="5" class="form-control" id="notes" name="notes" placeholder="Enter Notes">@isset($estimate) {{ old('notes', $estimate->notes) }} @else {{ old('notes', $setting['notes']) }} @endif</textarea>
                        @error('notes')
                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div @if ($setting['allow_for_note'] == 1) class="col-md-6" @else class="col-md-12" @endif>
        <div class="card card-dark collapsed-card">
            <div class="card-header">
                <h3 class="card-title">{{ __('Terms & Conditions') }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <textarea rows="5" class="form-control" id="conditions" name="conditions" placeholder="Enter Terms & Conditions">@isset($estimate) {{ old('notes', $estimate->conditions) }} @else {{ old('conditions', $setting['conditions'] ) }} @endif</textarea>
                    @error('conditions')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="shipping_address_1" id="shipping_address_1" value="@isset($estimate) {{ $estimate->shipping_address_1 }} @endisset">
    <input type="hidden" name="shipping_address_2" id="shipping_address_2" value="@isset($estimate) {{ $estimate->shipping_address_2 }} @endisset">
    <input type="hidden" name="shipping_city" id="shipping_city" value="@isset($estimate) {{ $estimate->shipping_city }} @endisset">
    <input type="hidden" name="shipping_state" id="shipping_state" value="@isset($estimate) {{ $estimate->shipping_state }} @endisset">
    <input type="hidden" name="shipping_country" id="shipping_country" value="@isset($estimate) {{ $estimate->shipping_country }} @endisset">
    <input type="hidden" name="shipping_eir_code" id="shipping_eir_code" value="@isset($estimate) {{ $estimate->shipping_eir_code }} @endisset">
</div>
