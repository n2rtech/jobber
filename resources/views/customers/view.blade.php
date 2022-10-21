@extends('layouts.app')
@section('title', 'Show Customer')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Customer Details') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-pink">
                        <i class="btn-icon fas fa-pen"></i> {{ __('Edit Customer') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-dark" style="padding: 7px 17px;">
                <h4 class="card-title mt-3">{{ __('Customer Name :') }} <strong>{{ $customer->name }}</strong></h4>
                <div class="card-tools text-right">
                    <small>{{ __('Added On') }}</small><br/>
                    <strong>{{ \Carbon\Carbon::parse($customer->created_at)->format('g:i A') }} | {{ \Carbon\Carbon::parse($customer->created_at)->format('d, M Y') }}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="address_1" class="col-sm-3 col-form-label">{{ __('Address 1') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_1" name="address_1"
                                            placeholder="Enter Street Address 1" value="{{ old('address_1', $customer->address_1) }}" readonly>
                                        @error('address_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address_2" class="col-sm-3 col-form-label">{{ __('Address 2') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_2" name="address_2"
                                            placeholder="Enter Street Address 2" value="{{ old('address_2', $customer->address_2) }}" readonly>
                                        @error('address_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter City" value="{{ old('city', $customer->city) }}" readonly>
                                        @error('city')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label">{{ __('State') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter State" value="{{ old('state', $customer->state) }}" readonly>
                                        @error('state')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-3 col-form-label">{{ __('Country') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="country" name="country"
                                            placeholder="Enter Country" value="{{ old('country', $customer->country) }}" readonly>
                                        @error('country')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="directions" class="col-sm-3 col-form-label">{{ __('Direction') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Directions" readonly>{{ old('directions', $customer->directions) }}</textarea>
                                        @error('directions')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="eir_code" class="col-sm-3 col-form-label">{{ __('Eircode') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="eir_code" name="eir_code"
                                            placeholder="Enter Eircode" value="{{ old('eir_code', $customer->eir_code) }}" readonly>
                                        @error('eir_code')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email" value="{{ old('email', $customer->email) }}" readonly>
                                        @error('email')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Enter Phone" value="{{ old('phone', $customer->phone) }}" readonly>
                                        @error('phone')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="phone_name" name="phone_name"
                                            placeholder="Enter Name" value="{{ old('phone_name', $customer->phone_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_1" class="col-sm-3 col-form-label">{{ __('Mobile 1') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_1" name="mobile_1"
                                            placeholder="Enter Mobile 1" value="{{ old('mobile_1', $customer->mobile_1) }}" readonly>
                                        @error('mobile_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_1_name" name="mobile_1_name"
                                            placeholder="Enter Name" value="{{ old('mobile_1_name', $customer->mobile_1_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_2" class="col-sm-3 col-form-label">{{ __('Mobile 2') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_2" name="mobile_2"
                                            placeholder="Enter Mobile 2" value="{{ old('mobile_2', $customer->mobile_2) }}" readonly>
                                        @error('mobile_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_2_name" name="mobile_2_name"
                                            placeholder="Enter Name" value="{{ old('mobile_2_name', $customer->mobile_2_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-3 col-form-label">{{ __('Notes') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="note" name="note" placeholder="Enter Note" readonly>{{ old('note') }}</textarea>
                                        @error('note')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="card card-dark card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-estimates-tab" data-toggle="pill" href="#custom-tabs-one-estimates" role="tab" aria-controls="custom-tabs-one-estimates" aria-selected="true">Estimates</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-invoices-tab" data-toggle="pill" href="#custom-tabs-one-invoices" role="tab" aria-controls="custom-tabs-one-invoices" aria-selected="false">Invoices</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-photos-tab" data-toggle="pill" href="#custom-tabs-one-photos" role="tab" aria-controls="custom-tabs-one-photos" aria-selected="false">Photos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-reminders-tab" data-toggle="pill" href="#custom-tabs-one-reminders" role="tab" aria-controls="custom-tabs-one-reminders" aria-selected="false">Reminders</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-notes-tab" data-toggle="pill" href="#custom-tabs-one-notes" role="tab" aria-controls="custom-tabs-one-notes" aria-selected="false">Calls / Notes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-documents-tab" data-toggle="pill" href="#custom-tabs-one-documents" role="tab" aria-controls="custom-tabs-one-documents" aria-selected="false">Documents</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-letters-tab" data-toggle="pill" href="#custom-tabs-one-letters" role="tab" aria-controls="custom-tabs-one-letters" aria-selected="false">Letters</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade active show" id="custom-tabs-one-estimates" role="tabpanel" aria-labelledby="custom-tabs-one-estimates-tab">
                             <p class="text-center mt-4"> No Estimate Found</p>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-invoices" role="tabpanel" aria-labelledby="custom-tabs-one-invoices-tab">
                            <p class="text-center mt-4"> No Invoice Found</p>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-photos" role="tabpanel" aria-labelledby="custom-tabs-one-photos-tab">
                            <p class="text-center mt-4"> No Photos Found</p>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-reminders" role="tabpanel" aria-labelledby="custom-tabs-one-reminders-tab">
                            <p class="text-center mt-4"> No Reminders Found</p>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-notes" role="tabpanel" aria-labelledby="custom-tabs-one-notes-tab">
                            <p class="text-center mt-4"> No Call / Notes Found</p>
                         </div>
                         <div class="tab-pane fade" id="custom-tabs-one-documents" role="tabpanel" aria-labelledby="custom-tabs-one-documents-tab">
                            <p class="text-center mt-4"> No Documents Found</p>
                         </div>
                         <div class="tab-pane fade" id="custom-tabs-one-letters" role="tabpanel" aria-labelledby="custom-tabs-one-letters-tab">
                            <p class="text-center mt-4"> No Letters Found</p>
                         </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
            </div>
        </div>
         <div class="card">
            <div class="card-body">
                <div class="col-sm-12 text-center">
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-pink">Edit Customer</a>
                    <a href="{{ route('customer.upload-photos', $customer->id) }}" class="btn btn-orange">Upload Photo</a>
                    <a href="{{ route('customer.upload-documents', $customer->id) }}" class="btn btn-info">Upload Document</a>
                    <a href="{{ route('jobs.create') }}" class="btn btn-warning">New Job</a>
                    <a href="{{ route('customer.add-notes', $customer->id) }}" class="btn btn-success">Add Note</a>
                    <a href="{{ route('invoices.create') }}" class="btn btn-dark">New Invoice</a>
                    <a href="{{ route('estimates.create') }}" class="btn btn-danger">New Estimate</a>
                    <a href="{{ route('customer.send-email', $customer->id) }}" class="btn btn-indigo">Send Email</a>
                </div>
            </div>
         </div>
    </section>
@endsection
@push('scripts')

@endpush
