@extends('layouts.app')
@section('title', 'Edit Invoice')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

    <!-- Content Header Box Starts Here -->
    <div class="content-header col-xl-9 mx-auto">
        @include('invoices.form-sections.content-header')
    </div>
    <!-- Content Header Box Ends Here -->

    <!-- Content Box Starts Here -->
    <div class="content col-xl-9 mx-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="invoiceForm" method="POST" action="{{ route('invoices.update', $invoice->id) }}"
                                enctype="multipart/form-data">
                                <input type="hidden" name="customer_id" id="customer_id">
                                @csrf
                                @method('PUT')
                                <!-- Invoice Details Box Starts Here -->
                                    @include('invoices.form-sections.invoice-details')
                                <!-- Invoice Details Ends Here -->

                                <!-- Line Items Box Starts Here -->
                                    @include('invoices.form-sections.line-items')
                                <!-- Line Items Ends Here -->

                                <!-- Notes and Terms Box Starts Here -->
                                    @include('invoices.form-sections.others')
                                <!-- Notes and Terms Box Ends Here -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-sm btn-danger float-right" form="invoiceForm">
                                            <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
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
     <!-- Content Box Ends Here -->


     @include('invoices.form-sections.shipping-address')
@endsection
@push('scripts')
    @include('invoices.scripts')
    @include('invoices.editable')
@endpush
