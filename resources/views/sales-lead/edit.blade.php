@extends('layouts.app')
@section('title', 'Edit Lead')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Lead') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <form id='delete-form{{ $lead->id }}'
                        action='{{ route('sales-leads.destroy', $lead) }}' method='POST'>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='_method' value='DELETE'>
                    </form>
                    <a href="javascript:void(0)" onclick="confirmDelete({{ $lead->id }})"
                        class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                    <a href="{{ route('sales-leads.index') }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-success" form="leadForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="leadForm" method="POST" action="{{ route('sales-leads.update', $lead->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body pb-5">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" value="{{ old('name', $lead->name) }}">
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email', $lead->email) }}">
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">{{ __('Phone') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="Enter Phone" value="{{ old('phone', $lead->phone) }}">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="phone_name" name="phone_name"
                                        placeholder="Enter Name" value="{{ old('phone_name', $lead->phone_name) }}">
                                </div>
                                @error('phone')
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="mobile_1" class="col-sm-2 col-form-label">{{ __('Mobile 1') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="mobile_1" name="mobile_1"
                                        placeholder="Enter Mobile 1" value="{{ old('mobile_1', $lead->mobile_1) }}">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mobile_1_name" name="mobile_1_name"
                                        placeholder="Enter Name" value="{{ old('mobile_1_name', $lead->mobile_1_name) }}">
                                </div>
                                @error('mobile_1')
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="mobile_2" class="col-sm-2 col-form-label">{{ __('Mobile 2') }}</label>
                                <div class="col-sm-5">
                                    <input type="tel" class="form-control" id="mobile_2" name="mobile_2"
                                        placeholder="Enter Mobile 2" value="{{ old('mobile_2', $lead->mobile_2) }}">
                                </div>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="mobile_2_name" name="mobile_2_name"
                                        placeholder="Enter Name" value="{{ old('mobile_2_name', $lead->mobile_2_name) }}">
                                </div>
                                @error('mobile_2')
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                </div>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <label for="address_1" class="col-sm-2 col-form-label">{{ __('Address 1') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address_1" name="address_1"
                                        placeholder="Enter Street Address 1" value="{{ old('address_1', $lead->address_1) }}">
                                    @error('address_1')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address_2" class="col-sm-2 col-form-label">{{ __('Address 2') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address_2" name="address_2"
                                        placeholder="Enter Street Address 2" value="{{ old('address_2', $lead->address_2) }}">
                                    @error('address_2')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card pb-3">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="type" class="col-sm-2 col-form-label">{{ __('As Lead') }}</label>
                                <div class="col-sm-10">
                                    <input type="checkbox" id="type" name="type" value="sales-lead" @if($lead->type == 'sales-lead') checked @endif data-bootstrap-switch>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label for="state" class="col-sm-2 col-form-label">{{ __('State') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="Enter State" value="{{ old('state', $lead->state) }}">
                                    @error('state')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">{{ __('City') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter City" value="{{ old('city', $lead->city) }}">
                                    @error('city')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country" class="col-sm-2 col-form-label">{{ __('County') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="Enter County" value="{{ old('country', $lead->country) }}">
                                    @error('country')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="eir_code" class="col-sm-2 col-form-label">{{ __('Eircode') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="eir_code" name="eir_code"
                                        placeholder="Enter Eircode" value="{{ old('eir_code', $lead->eir_code) }}">
                                    @error('eir_code')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="directions" class="col-sm-2 col-form-label">{{ __('Direction') }}</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Directions">{{ old('directions', $lead->directions) }}</textarea>
                                    @error('directions')
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
                        @isset($lead->notes)
                        <div class="card-comment">

                            <div class="comment-text">
                                {!! $lead->notes !!}
                            </div>

                        </div>
                        @else
                        <div class="card-comment">
                            <p class="text-center mt-4">No Notes Found.</p>
                        </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
@include('sections.utilities')
@push('scripts')
<script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <script>
        $("input[data-bootstrap-switch]").each(function(){
        $(this).bootstrapSwitch();
        })
    </script>
@endpush
@endpush
