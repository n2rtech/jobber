@extends('layouts.app')
@section('title', 'Edit Text Template')
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
        <form id="templateForm" method="POST" action="{{ route('text-templates.update', $template->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12" id="template-row">
                    @foreach($template->contents as $key => $content)
                        <div class="card" id="template-card{{ $key }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="template_name{{ $key }}">Template Name</label>
                                    <input type="text" class="form-control" id="template_name{{ $key }}" name="template[{{ $key }}][template_name]"
                                        placeholder="Enter Template Name here" value="{{ old('template_name', $content->template_name) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="message{{ $key }}">Message</label>
                                    <textarea class="form-control" id="message{{ $key }}" name="template[{{ $key }}][message]" placeholder="Enter Message here" rows="6" required>{!! $content->message!!}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal-variable" onclick="$('#fieldrow').val({{ $key }});">INSERT VARIABLE</button>
                                    <button type="button" class="btn btn-sm btn-outline-danger"  onclick="deleteTemplate({{ $key }})"><i class="fas fa-trash"></i></button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right mb-5">
                    <button type="button" class="btn btn-primary" onclick="addTemplate();">Add Template</button>
                    <button type="submit" class="btn btn-danger" form="templateForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
    @include('settings.text-template.modal')
@endsection
@push('scripts')
@include('settings.text-template.script')
@endpush
