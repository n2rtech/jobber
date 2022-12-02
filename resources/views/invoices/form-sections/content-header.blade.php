<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="float-left">@isset($invoice) {{ __('Edit Invoice') }} @else {{ __('Add Invoice') }} @endif</h1>
            @isset($invoice)
                <button type="submit" class="btn btn-sm btn-danger float-right" form="invoiceForm">
                    <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                </button>
            @else
                <button type="submit" class="btn btn-sm btn-danger float-right" form="invoiceForm">
                    <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                </button>
            @endisset
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark mr-1 float-right">
                <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
            </a>
        </div>
    </div>
</div>
