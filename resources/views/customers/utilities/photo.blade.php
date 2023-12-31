@extends('layouts.app')
@section('title', 'Upload Photos')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-6">
                    <h1>{{ __('Upload Photos') }}</h1>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{ route('customers.show', ['customer' => $customer, 'activeTab' => 'customer-photos']) }}"
                        class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark" style="padding: 7px 17px;">
                        <h4 class="card-title mt-3">{{ __('Customer Name :') }} <strong>{{ $customer->name }}</strong></h4>
                        <div class="card-tools text-right">
                            <small>{{ __('Added On') }}</small><br />
                            <strong>{{ \Carbon\Carbon::parse($customer->created_at)->format('g:i A') }} |
                                {{ \Carbon\Carbon::parse($customer->created_at)->format('d, M Y') }}</strong>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="photoUploadForm" method="POST" action="{{ route('customer.photos-upload') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <label for="images">{{ __('Choose Photos') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="images" name="images[]"
                                            multiple onchange="preview_image();">
                                        <label class="custom-file-label" for="images">{{ __('Choose Photos') }}</label>
                                    </div>
                                    @error('images')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success"
                                    form="photoUploadForm">{{ __('Upload') }}</button>
                            </div>
                        </form>
                        <div class="form-group" id="preview">
                            <p><small>Preview Image</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('plugins/simple-lightbox/simple-lightbox.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script>
        function preview_image() {
            var total_file = document.getElementById("images").files.length;
            for (var i = 0; i < total_file; i++) {
                $('#preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) +
                    "' width=150px' height='150px' style='margin:10px;'>");
            }
        }
    </script>
    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
@endpush
