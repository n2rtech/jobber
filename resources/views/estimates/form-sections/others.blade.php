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
                        <textarea rows="5" class="form-control" id="notes" name="notes" placeholder="Enter Notes">{{ old('notes') }}</textarea>
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
                    <textarea rows="5" class="form-control" id="conditions" name="conditions" placeholder="Enter Terms & Conditions">{{ old('conditions', $setting['conditions']) }}</textarea>
                    @error('conditions')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
