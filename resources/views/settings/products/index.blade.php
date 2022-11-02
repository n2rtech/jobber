@extends('layouts.app')

@section('title', 'Product & Services')

@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Product & Services') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modal-product">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('settings.products.listing')

        </div>

    </section>

    @include('settings.products.modal')

@endsection

@push('scripts')
    @include('sections.utilities')

    <script>
        $(".edit-product").click(function() {
            var id = $(this).data('id');
            var type = $(this).data('type');
            var name = $(this).data('name');
            var unitprice = $(this).data('unitprice');
            var description = $(this).data('description');
            var tax = $(this).data('tax');
            $('#edit_type').val(type);
            $('#edit_name').val(name);
            $('#edit_description').val(description);
            $('#edit_unitprice').val(unitprice);
            $('#product_id').val(id);
            $('#edit_tax'+tax).prop('checked', true);
        });
    </script>
@endpush
