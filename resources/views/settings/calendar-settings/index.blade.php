@extends('layouts.app')
@section('title', 'Calendar Settings')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Calendar Settings') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-danger" form="calendarSettingForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="calendarSettingForm" method="POST" action="{{ route('calendar-settings.store') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="no_of_days">No of Week Days</label>
                                <input type="number" class="form-control" id="no_of_days" name="no_of_days"
                                    placeholder="Enter Number of Week Days" value="{{ $setting['no_of_days'] }}">
                                @error('no_of_days')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="timing_starts">Timing Starts at</label>
                                <input type="text" class="form-control" id="timing_starts" name="timing_starts"
                                    placeholder="Enter Start Timing" value="{{ $setting['timing_starts'] }}">
                                @error('timing_starts')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
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
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});
</script>
@endpush
