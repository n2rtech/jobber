@extends('layouts.app')
@section('title', 'My Account')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>My Account</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button form="accountForm" type="submit" class="btn btn-danger">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>

                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="accountForm" method="POST" action="{{ route('my-account.update') }}"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">{{ __('Name') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-sm-3 col-form-label">{{ __('Mobile') }}</label>
                                <div class="col-sm-9">
                                    <input type="tel" class="form-control" id="mobile" name="mobile"
                                        placeholder="Enter mobile" value="{{ old('mobile', $user->mobile) }}">
                                    @error('mobile')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-3 col-form-label">{{ __('Address') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" name="address"
                                        placeholder="Enter Address" value="{{ old('address', $user->address) }}">
                                    @error('address')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="city" name="city"
                                        placeholder="Enter City" value="{{ old('city', $user->city) }}">
                                    @error('city')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="zipcode" class="col-sm-3 col-form-label">{{ __('Zipcode') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="zipcode" name="zipcode"
                                        placeholder="Enter Zipcode" value="{{ old('zipcode', $user->zipcode) }}">
                                    @error('zipcode')
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
                                <label for="state" class="col-sm-3 col-form-label">{{ __('State') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="state" name="state"
                                        placeholder="Enter State" value="{{ old('state', $user->state) }}">
                                    @error('state')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="country" class="col-sm-3 col-form-label">{{ __('Country') }}</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="country" name="country"
                                        placeholder="Enter Country" value="{{ old('country', $user->country) }}">
                                    @error('country')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="notes" class="col-sm-3 col-form-label">{{ __('Upload Image') }}</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="avatar" name="avatar" onchange="loadPreview(this);">
                                    <img id="preview_img" src="{{ $user->avatar }}"
                                        class="mt-2" width="128px" height="128px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-danger" form="accountForm">
                                <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
<script>
    function loadPreview(input, id) {
        id = id || '#preview_img';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(128)
                    .height(128);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
