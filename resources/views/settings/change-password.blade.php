@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Change Password</h1>
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
        <div class="card">
            <div class="card-body">
                <form id="accountForm" method="POST" action="{{ route('change-password.update') }}">
                    @csrf
                    <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                        <label for="current_password">Current password *</label>
                        <input type="password" id="current_password" name="current_password" class="form-control">
                        @error('current_password')
                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
                        <label for="new_password">New password *</label>
                        <input type="password" id="new_password" name="new_password" class="form-control">
                        @error('new_password')
                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group {{ $errors->has('new_password_confirmation') ? 'has-error' : '' }}">
                        <label for="new_password_confirmation">New password confirmation *</label>
                        <input type="password" id="new_password_confirmation" name="new_password_confirmation"
                            class="form-control">
                        @error('new_password_confirmation')
                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </form>
            </div>
            <div class="card-footer text-right">
                <button form="accountForm" type="submit" class="btn btn-danger">
                    <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                </button>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>

    </script>
@endpush
