@extends('layouts.app')
@section('title', 'Payments')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Payments</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Finance</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Payments</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <p class="text-center mt-5">Work in Progress</p>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')

@endpush