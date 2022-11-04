@extends('layouts.app')
@section('title', 'Show Customer')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    @include('customers.view.sections.content-header')
    <section class="content">
        @include('customers.view.sections.details')
        @include('customers.view.sections.action-buttons')
        @include('customers.view.sections.tabs')
    </section>
@endsection
@push('scripts')
    @include('customers.view.script')
@endpush
