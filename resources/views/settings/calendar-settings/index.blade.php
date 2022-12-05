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
                                <label for="days">Open Days</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="sunday" name="days[]" value="0" @if(in_array(0, $days )) checked @endif >
                                    <label class="form-check-label" for="sunday">Sunday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="monday" name="days[]" value="1" @if(in_array(1, $days )) checked @endif >
                                    <label class="form-check-label" for="monday">Monday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tuesday" name="days[]" value="2" @if(in_array(2, $days )) checked @endif>
                                    <label class="form-check-label" for="tuesday">Tuesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="wednesday" name="days[]" value="3" @if(in_array(3, $days )) checked @endif>
                                    <label class="form-check-label" for="wednesday">Wednesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="thursday" name="days[]" value="4" @if(in_array(4, $days )) checked @endif>
                                    <label class="form-check-label" for="thursday">Thursday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="friday" name="days[]" value="5" @if(in_array(5, $days )) checked @endif>
                                    <label class="form-check-label" for="friday">Friday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="saturday" name="days[]" value="6" @if(in_array(6, $days )) checked @endif>
                                    <label class="form-check-label" for="saturday">Saturday</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="timing_starts">Timing Starts at</label>
                                <input type="time" class="form-control" id="timing_starts"
                                    name="timing_starts" placeholder="Enter Start Timing"
                                    value="{{ $setting['timing_starts'] }}">
                                @error('timing_starts')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="timing_starts">Timing Ends at</label>
                                <input type="time" class="form-control" id="timing_ends"
                                    name="timing_ends" placeholder="Enter End Timing"
                                    value="{{ $setting['timing_ends'] }}">
                                @error('timing_ends')
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
