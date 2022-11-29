@extends('layouts.app')
@section('title', 'Edit Email Template')
@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    @if ($template->type == 'jobs')
                        <h1>{{ __('Booking Confirmation') }}</h1>
                    @elseif($template->type == 'estimates')
                        <h1>{{ __('Estimate Confirmation') }}</h1>
                    @elseif($template->type == 'invoices')
                        @if ($template->mode == 'confirmation')
                            <h1>{{ __('Invoice Confirmation') }}</h1>
                        @else
                            <h1>{{ __('Invoice Follow Up') }}</h1>
                        @endif
                    @elseif($template->type == 'standard')
                        <h1>{{ __('Standard Template') }}</h1>
                    @endif
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-danger" form="templateForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="templateForm" method="POST" action="{{ route('email-templates.update', $template->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="EnterSubject here" value="{{ old('subject', $template->subject) }}">
                                    @error('subject')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Message</label>
                                <textarea class="form-control" id="message" name="message" placeholder="Enter Message here" rows="6">{!! $template->message!!}</textarea>
                                @error('message')
                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-sm btn-outline-danger" onclick="setDefaultTemplate({{ $template->id }});">DEFAULT</button>
                                <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal-variable">INSERT VARIABLE</button>
                                <button type="submit" class="btn btn-danger float-right" form="templateForm">
                                    <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    @include('settings.email-template.modal')
@endsection
@push('scripts')
@include('settings.email-template.script')
@endpush
