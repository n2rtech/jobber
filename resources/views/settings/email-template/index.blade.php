@extends('layouts.app')

@section('title', 'Email Templates')

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
                    <h1 class="m-0">{{ __('Email Templates') }}</h1>
                </div>

            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('settings.email-template.listing')

        </div>

    </section>

@endsection

@push('scripts')
    @include('sections.utilities')

    <script>
        $(".edit-product").click(function() {
            var id = $(this).data('id');
            var name = $(this).data('name');
            var description = $(this).data('description');
            $('#edit_name').val(name);
            $('#edit_description').val(description);
            $('#product_id').val(id);
        });
    </script>
@endpush
