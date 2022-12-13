@extends('layouts.app')
@section('title', 'Edit Job')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

    <!-- Content Header Box Starts Here -->
    <div class="content-header col-xl-9 mx-auto">
        @include('jobs.form-sections.content-header')
    </div>
    <!-- Content Header Box Ends Here -->

    <!-- Content Box Starts Here -->
    <div class="content col-xl-9 mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="jobForm" method="POST" action="{{ route('jobs.update', $job->id) }}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="customer_id" id="customer_id">
                                @csrf
                                @method('PUT')
                                <!-- Estimate Details Box Starts Here -->
                                @include('jobs.form-sections.job-details')
                                <!-- Estimate Details Ends Here -->

                                <!-- Line Items Box Starts Here -->
                                @include('jobs.form-sections.line-items')
                                <!-- Line Items Ends Here -->

                                 <!--Total Box Starts Here -->
                                 @include('jobs.form-sections.total')
                                 <!--Total Ends Here -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-sm btn-danger float-right"
                                            form="jobForm">
                                            <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @include('jobs.scripts')
    @include('jobs.editable')
@endpush
