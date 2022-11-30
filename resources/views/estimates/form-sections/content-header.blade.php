<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="float-left">{{ __('Add Estimate') }}</h1>
            <button type="submit" class="btn btn-sm btn-danger float-right" form="estimateForm">
                <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
            </button>
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark mr-1 float-right">
                <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
</div>
