@extends('layouts.app')
@section('title', 'Show Customer')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
@endsection
@section('content')
    @include('customers.view.sections.content-header')
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                @include('customers.view.sections.details')
            </div>
            <div class="col-md-6">
                @include('customers.view.sections.action-buttons')
            </div>
        </div>
        @include('customers.view.sections.tabs')
    </section>
    @include('customers.emails.invoice-email')
    @include('customers.emails.estimate-email')
@endsection
@push('scripts')
    @include('customers.view.script')
@endpush
