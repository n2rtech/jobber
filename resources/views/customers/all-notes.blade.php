@extends('layouts.app')
@section('title', 'All Notes')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('All Notes') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-body">
                <table id="invoiceTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>{{ __('Added By') }}</th>
                            <th>{{ __('Note') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer->allnotes as $note)
                            <tr>
                                <td>
                                    <span class="badge bg-danger"><i
                                            class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ isset($note->user_id) ? $note->user->name : 'Customer' }}</span>
                                    <br>
                                    <span class="badge bg-info"> <i
                                            class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($note->created_at)->format('Y-m-d') }}</span>
                                    <br />
                                    <span class="badge bg-info"><i
                                            class="fas fa-calendar-day"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($note->created_at)->format('l') }}</span>
                                    <br />
                                    <span class="badge bg-success"><i
                                            class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($note->created_at)->format('H:i:s') }}</span>
                                </td>
                                <td>{!! $note->note !!}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    @include('sections.utilities')
@endpush
