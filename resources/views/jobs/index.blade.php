@extends('layouts.app')

@section('title', 'Jobs')

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
                    <h1 class="m-0">{{ __('Jobs') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <button type="submit" form="jobSearchForm" class="btn btn-success">
                        <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                    </button>

                    <a href="{{ route('jobs.index') }}" class="btn btn-indigo">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Reset') }}
                    </a>

                    <a href="{{ route('jobs.create') }}" class="btn btn-danger">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('jobs.filter')

            @include('jobs.listing')

        </div>

    </section>

@endsection

@push('scripts')

@include('sections.utilities')

@endpush
