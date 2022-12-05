@extends('layouts.app')
@section('title', 'Edit User')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit User') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-danger" form="userForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="userForm" method="POST" action="{{ route('manage-team.update', $user->id) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                                <label class="col-sm-3 col-form-label">Set color</label>
                                <div class="col-sm-9">
                                    <input type="text" id="colorInput" name="colorInput" class="form-control" placeholder="Enter color code" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card pb-4">
                        <div class="card-body">
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
                                <label for="password" class="col-sm-3 col-form-label">{{ __('Password') }}</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter Password" value="{{ old('password') }}">
                                    <small class="text-info"><i class="fa-solid fa-circle-info mr-2"></i>
                                        {{ __('Enter only to change Password') }}</small>
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
                        <div class="card-body">
                            <h4 class="mb-3">{{ __('Preset permission levels') }}</h4>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input
                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                        type="radio" id="administrator" name="role" value="administrator"
                                        @if ($user->role == 'administrator') checked @endif>
                                    <label for="administrator" class="custom-control-label">{{ __('Make Administrator') }}</label>
                                    <br />
                                    <small>{{ __('This allows them access to everything within the account - including invoice,
                                        estimate, customer list, editing all team members permissions, etc.') }}</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input
                                        class="custom-control-input custom-control-input-success custom-control-input-outline"
                                        type="radio" id="worker" value="worker" name="role"
                                        @if ($user->role == 'worker') checked @endif>
                                    <label for="worker" class="custom-control-label">{{ __('Make Worker') }}</label>
                                    <br />
                                    <small>{{ __('This allows them access only assigned customer booking.') }}</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="status" class="col-sm-1 col-form-label">{{ __('Status') }}</label>
                                <div class="col-sm-11 mt-2">
                                    <div
                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="status"
                                            value="1" @if ($user->status == '1') checked @endif name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-danger" form="userForm">
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
