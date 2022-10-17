@extends('layouts.app')

@section('title', 'Job Titles')

@section('head')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Job Titles') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modal-title">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('settings.job-title.listing')

        </div>

    </section>

    @include('settings.job-title.modal')

@endsection

@push('scripts')

@include('sections.utilities')

<script>
    $(".edit-title").click(function () {
            var id      = $(this).data('id');
            var title   = $(this).data('title');
            $('#edit_title').val(title);
            $('#title_id').val(id);
        });
</script>

@endpush
