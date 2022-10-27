@extends('layouts.app')
@section('title', 'Send Email')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Send Email') }}</h1>
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
                <form id="emailForm" method="POST" action="{{ route('customer.email-send') }}">
                    @csrf
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">{{ __('Customer Email') }}</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter Customer Email" value="{{ old('email', $customer->email) }}" readonly>
                            @error('email')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-sm-2 col-form-label">{{ __('Subject') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="subject" name="subject"
                                placeholder="Enter Subject" value="{{ old('subject', $customer->subject) }}">
                            @error('subject')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="message" class="col-sm-2 col-form-label">{{ __('Message') }}</label>
                        <div class="col-sm-10">
                            <textarea rows="4" class="form-control" id="message" name="message" placeholder="Enter Message">{{ old('message') }}</textarea>
                            @error('message')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="attachment" class="col-sm-2 col-form-label">{{ __('Attachment') }}</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="attachment" name="attachment"
                                        multiple>
                                    <label class="custom-file-label" for="attachment">{{ __('Choose Attachment') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-success" form="emailForm">
                            <i class="btn-icon fas fa-envelope"></i> {{ __('Send') }}
                        </button>
                    </div>
                </form>
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
