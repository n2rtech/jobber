@extends('layouts.app')
@section('title', 'Manage Team')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-6">
                <h1 class="m-0">{{ __('Manage Team') }}</h1>
            </div>

            <div class="col-sm-6 text-right">

                <button type="submit" form="teamForm" class="btn btn-success">
                    <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                </button>

                <a href="{{ route('manage-team.index') }}" class="btn btn-indigo">
                    <i class="btn-icon fas fa-undo"></i> {{ __('Reset') }}
                </a>

                <a href="{{ route('manage-team.create') }}" class="btn btn-danger">
                    <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                </a>

            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form id="teamForm" action="{{ route('manage-team.index') }}">
                    <div class="form-row">
                        <div class="col-xl-3 col-md-12">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="name" name="name" class="form-control form-control-sm" placeholder="Name"
                                    value="{{ $filter_name }}">
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="Email"
                                    value="{{ $filter_email }}">
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="form-group">
                                <label for="mobile">{{ __('Mobile') }}</label>
                                <input type="text" class="form-control form-control-sm" id="mobile"
                                    placeholder="Mobile No" name="mobile" value="{{ $filter_mobile }}">
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-12">
                            <div class="form-group">
                                <label for="role">{{ __('Role') }}</label>
                                <select class="form-control form-control-sm" name="role" id="role">
                                    <option value="">{{ __('Select Role') }}</option>
                                    <option value="administrator" @if($filter_role == 'administrator') selected @endif>{{ __('Administrator') }}</option>
                                    <option value="worker" @if($filter_role == 'worker') selected @endif>{{ __('Worker') }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                @foreach ($users as $user)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-footer">

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="post">
                                        <div class="user-block">
                                          <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                                          <span class="username">
                                            {{ $user->name }}
                                          </span>
                                          <span class="description text-dark">{{ $user->email }} @isset($user->mobile)  |  {{ $user->mobile }} @endisset</span>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="ml-5 mt-2 custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="float-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-ellipsis-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu" role="menu" style="">
                                              <a class="dropdown-item" href="{{ route('manage-team.edit', $user->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                              <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $user->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                              <form id='delete-form{{ $user->id }}'
                                                action='{{ route('manage-team.destroy', $user->id) }}' method='POST'>
                                                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                <input type='hidden' name='_method' value='DELETE'>
                                            </form>
                                            </div>
                                          </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@include('sections.utilities')
@endpush
