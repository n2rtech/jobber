@extends('layouts.app')
@section('title', 'Invoice Settings')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Invoice Settings') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-danger" form="invoiceSettingForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="invoiceSettingForm" method="POST" action="{{ route('invoice-settings.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="due_on_receipt">Due on Receipt</label>
                                <input type="number" class="form-control" id="due_on_receipt" name="due_on_receipt"
                                    placeholder="Enter Number of days" value="{{ $setting['due_on_receipt'] }}">
                                @error('due_on_receipt')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="conditions">Notes</label>
                                <textarea class="form-control" id="notes" name="notes" placeholder="Enter Terms and notes">{{ $setting['notes'] }}</textarea>
                                @error('notes')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="conditions">Terms and Conditions</label>
                                <textarea class="form-control" id="conditions" name="conditions" placeholder="Enter Terms and Conditions">{{ $setting['conditions'] }}</textarea>
                                @error('conditions')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="allow_for_note">Allow for Note</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="allow_for_note" value="1" @if($setting['allow_for_note'] == 1) checked @endif>
                                    <label class="form-check-label">Yes</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="allow_for_note" value="0" @if($setting['allow_for_note'] == 0) checked @endif>
                                    <label class="form-check-label">No</label>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script>
tinymce.init({
  selector: 'textarea#conditions',
  height: 200,
  menubar: false,
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});

tinymce.init({
  selector: 'textarea#notes',
  height: 200,
  menubar: false,
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});
</script>
@endpush
