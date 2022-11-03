@extends('layouts.app')
@section('title', 'Company Settings')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Company Settings') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-danger" form="companyForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="companyForm" method="POST" action="{{ route('company-settings.update', $company->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="company" class="col-sm-3 col-form-label">{{ __('Company') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="company" name="company"
                                        placeholder="Enter company" value="{{ old('company', $company->company) }}">
                                    @error('company')
                                        <span id="company-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email', $company->email) }}">
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">{{ __('Mobile') }}</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="mobile" name="mobile"
                                        placeholder="Enter mobile" value="{{ old('mobile', $company->mobile) }}">
                                    @error('mobile')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_1" class="col-sm-3 col-form-label">{{ __('Line Address 1') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address_1" name="address_1"
                                        placeholder="Line Address 1" value="{{ old('address_1', $company->address_1) }}">
                                    @error('address_1')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_2" class="col-sm-3 col-form-label">{{ __('Line Address 2') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address_2" name="address_2"
                                        placeholder="Line Address 1" value="{{ old('address_2', $company->address_2) }}">
                                    @error('address_2')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter City" value="{{ old('city', $company->city) }}">
                                    @error('city')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zipcode" class="col-sm-3 col-form-label">{{ __('Zipcode') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                                        placeholder="Enter Zipcode" value="{{ old('zipcode', $company->zipcode) }}">
                                    @error('zipcode')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="state" class="col-sm-3 col-form-label">{{ __('State') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="Enter State" value="{{ old('state', $company->state) }}">
                                    @error('state')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country" class="col-sm-3 col-form-label">{{ __('Country') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="Enter Country" value="{{ old('country', $company->country) }}">
                                    @error('country')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
@endsection

