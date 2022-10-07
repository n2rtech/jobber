@extends('layouts.app')
@section('title', 'Users')
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
                <h1 class="m-0">Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="row g-2" id="filterForm" action="{{ route('user-management.index') }}">
                    <div class="col">
                        <input type="text" class="form-control"
                        id="name" placeholder="Enter Name"
                        name="name" value="{{ $filter_name }}">
                    </div>

                    <div class="col">
                    <input type="email" class="form-control"
                        id="email" placeholder="Enter Email"
                        name="email" value="{{ $filter_email }}">
                    </div>

                    <div class="col">
                    <select class="form-control" id="statuses" name="status">
                        <option value="">All</option>
                        <option value="1" @if($filter_status == 1) selected @endif>Enabled</option>
                        <option value="0" @if($filter_status == 0) selected @endif>Disabled</option>
                    </select>
                    </div>

                    <div class="col-auto">

                        <button type="submit" form="filterForm" class="btn btn-info ml-1">
                            <i class="fa fa-search"></i>
                        </button>

                        <a href="{{ route('user-management.index') }}" class="btn btn-orange ml-1">
                            <i class="fa fa-undo"></i>
                        </a>

                        <a href="{{ route('user-management.create') }}" class="btn btn-dark ml-1">
                            Create
                        </a>

                    </div>
                </form>
            </div>
            <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> @if($user->status == 0)  <span class="badge bg-danger">Disabled</span> @else  <span class="badge bg-success">Enabled</span> @endif</td>
                            <td>
                                <div class="btn-group">
                                <a href="{{ route('user-management.edit', $user) }}" class="btn btn-warning"> <i class="fas fa-pen"></i> </a>
                                <button type="button" onclick="confirmDelete({{$user->id}})" class="btn btn-danger"><i class="fas fa-trash"></i> </button>
                                <form id='delete-form{{$user->id}}' action='{{route('user-management.destroy', $user)}}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token()}}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@include('sections.utilities')
@endpush
