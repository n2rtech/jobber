@extends('layouts.app')
@section('title', 'Add Estimate')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

    <!-- Content Header Box Starts Here -->
    <div class="content-header col-xl-9 mx-auto">
        @include('estimates.form-sections.content-header')
    </div>
    <!-- Content Header Box Ends Here -->

    <!-- Content Box Starts Here -->
    <div class="content col-xl-9 mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="estimateForm" method="POST" action="{{ route('estimates.store') }}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="customer_id" id="customer_id">
                                @csrf

                                <!-- Estimate Details Box Starts Here -->
                                    @include('estimates.form-sections.estimate-details')
                                <!-- Estimate Details Ends Here -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-sm btn-danger float-right" form="estimateForm">
                                            <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Line Items Box Starts Here -->
                    @include('estimates.form-sections.line-items')
                    <!-- Line Items Ends Here -->

                    <!-- Notes and Terms Box Starts Here -->
                        @include('estimates.form-sections.others')
                    <!-- Notes and Terms Box Ends Here -->
                </div>
            </div>
        </div>
    </div>
     <!-- Content Box Ends Here -->
     @include('estimates.form-sections.shipping-address')
@endsection
@push('scripts')
    @include('estimates.scripts')
    @include('estimates.editable')
@endpush
