@extends('layouts.app')
@section('title', 'Upload Documents')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Upload Documents') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-dark" style="padding: 7px 17px;">
                <h4 class="card-title mt-3">{{ __('Customer Name :') }} <strong>{{ $customer->name }}</strong></h4>
                <div class="card-tools text-right">
                    <small>{{ __('Added On') }}</small><br/>
                    <strong>{{ \Carbon\Carbon::parse($customer->created_at)->format('g:i A') }} | {{ \Carbon\Carbon::parse($customer->created_at)->format('d, M Y') }}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <form id="documentUploadForm" method="POST" action="{{ route('customer.documents-upload') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <label for="documents">{{ __('Choose Documents') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="documents" name="documents[]"
                                            multiple>
                                        <label class="custom-file-label" for="documents">{{ __('Choose Documents') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success" form="documentUploadForm">{{ __('Upload') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-center">
                        <label for="photos">{{ __('Uploaded Documents') }}</label>
                        </div>
                        <div class="card card-widget widget-user-2">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="card-footer p-0">
                                    <ul class="nav flex-column">
                                        @forelse($customer->documents as $document)
                                        <li class="nav-item">
                                            <a href="{{ $document->path }}" class="nav-link" download="">
                                              {{ $document->document }} <span class="float-right badge bg-primary">{{ $document->created_at }}</span>
                                            </a>
                                          </li>
                                        @empty
                                            <p class="text-center mt-3">{{ __('No Documents uploaded') }}</p>
                                        @endforelse
                                    </ul>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
