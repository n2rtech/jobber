<div class="row mb-2">

    <div class="col-md-6">
        <label for="name" class="label-small">{{ __('Job For') }}</label>
        <select class="form-control" id="name" name="name"></select>
        @error('name')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="terms" class="label-small">{{ __('Title') }}</label>
        <select class="form-control" id="job_title_id" name="job_title_id" required>
            <option value="">Select Job Title</option>
            @foreach ($job_titles as $job_title)
                <option value="{{ $job_title->id }}" @isset($job) @if($job_title->id == $job->job_title_id) selected @endif @endisset>{{ $job_title->title }}</option>
            @endforeach
        </select>
        @error('terms')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="row mb-2">

    <div class="col-md-12">
        <label for="address" class="label-small">{{ __('Address') }}</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Customer Address">
        @error('address')
            <span id="address-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>

<div class="row mb-2">

    <div class="col-md-12">
        <label for="instructions" class="label-small">{{ __('Instructions') }}</label>
        <textarea rows="2" class="form-control" id="instructions" name="instructions" placeholder="Enter Instructions">{{ old('instructions') }}</textarea>
        @error('instructions')
            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card card-dark collapsed-card">
            <div class="card-header">
                <h3 class="card-title">{{ __('Job Forms') }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                        title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    @foreach($job_forms as $job_form)
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-success"
                            type="checkbox" id="jobForm{{ $job_form->id }}" name="job_forms[]" value="{{ $job_form->id }}" @isset($job) @isset($job->job_forms) @if(in_array($job_form->id, $job->job_forms)) checked @endif @endisset @endisset>
                        <label for="jobForm{{ $job_form->id }}" class="custom-control-label">{{ $job_form->title }}</label>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
