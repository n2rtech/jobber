@extends('layouts.app')
@section('title', 'Edit Customer')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Customer') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <a href="javascript:void(0)" class="btn btn-indigo">
                        <i class="btn-icon fas fa-check-circle"></i> {{ __('Create Job') }}
                    </a>
                    <button type="submit" class="btn btn-danger" form="customerForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="customerForm" method="POST" action="{{ route('customers.update', 0) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone" value="{{ old('phone') }}">
                                    @error('phone')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="phone_name" name="phone_name"
                                        placeholder="Enter Name" value="{{ old('phone_name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile_1" class="col-sm-2 col-form-label">{{ __('Mobile 1') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="mobile_1" name="mobile_1"
                                        placeholder="Enter Mobile 1" value="{{ old('mobile_1') }}">
                                    @error('mobile_1')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mobile_1_name" name="mobile_1_name"
                                        placeholder="Enter Name" value="{{ old('mobile_1_name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="mobile_2" class="col-sm-2 col-form-label">{{ __('Mobile 2') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="mobile_2" name="mobile_2"
                                        placeholder="Enter Mobile 2" value="{{ old('mobile_2') }}">
                                    @error('mobile_2')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mobile_2_name" name="mobile_2_name"
                                        placeholder="Enter Name" value="{{ old('mobile_2_name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_1" class="col-sm-2 col-form-label">{{ __('Address 1') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address_1" name="address_1"
                                        placeholder="Enter Street Address 1" value="{{ old('address_1') }}">
                                    @error('address_1')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_2" class="col-sm-2 col-form-label">{{ __('Address 2') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address_2" name="address_2"
                                        placeholder="Enter Street Address 2" value="{{ old('address_2') }}">
                                    @error('address_2')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">{{ __('City') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter City" value="{{ old('city') }}">
                                    @error('city')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card pb-4">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label">{{ __('Country') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="Enter Country" value="{{ old('country') }}">
                                    @error('country')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="eir_code" class="col-sm-2 col-form-label">{{ __('Eircode') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="eir_code" name="eir_code"
                                        placeholder="Enter Eircode" value="{{ old('eir_code') }}">
                                    @error('eir_code')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="directions" class="col-sm-2 col-form-label">{{ __('Direction') }}</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Directions">{{ old('directions') }}</textarea>
                                    @error('directions')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notes" class="col-sm-2 col-form-label">{{ __('Notes') }}</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="notes" name="notes" placeholder="Enter Notes">{{ old('notes') }}</textarea>
                                    @error('notes')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-widget bg-warning">
                    <div class="card-header">
                        <div class="user-block">
                            <span class="text-dark">{{ __('Archive Notes') }}</span>
                        </div>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>

                    </div>

                    <div class="card-body card-comments">
                        <div class="card-comment">

                            <img class="img-circle img-sm" src="/dist/img/user3-128x128.jpg" alt="User Image">

                            <div class="comment-text">
                                <span class="username">
                                    Administrator 2
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                </span>
                                It is a long established fact that a reader will be distracted
                                by the readable content of a page when looking at its layout.
                            </div>

                        </div>

                        <div class="card-comment">

                            <img class="img-circle img-sm" src="/dist/img/user5-128x128.jpg" alt="User Image">

                            <div class="comment-text">
                                <span class="username">
                                    Administrator 1
                                    <span class="text-muted float-right">8:03 PM Today</span>
                                </span>
                                The point of using Lorem Ipsum is that it hrs a morer-less
                                normal distribution of letters, as opposed to using
                                'Content here, content here', making it look like readable English.
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection