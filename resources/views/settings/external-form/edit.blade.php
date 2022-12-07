@extends('layouts.app')
@section('title', 'Edit External Form')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ $external_form->title }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    @if ($external_form->type == 'single')
                        <button type="submit" class="btn btn-danger" form="externalForm"><i class="fas fa-save"></i> Update</button>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        @if ($external_form->type == 'single')
            @include('settings.external-form.form-sections.single')
        @else
            @include('settings.external-form.form-sections.multiple')
        @endif
    </section>
@endsection
@push('scripts')
    @if ($external_form->type == 'single')
        @include('settings.external-form.utilities-single')
    @else
        @include('settings.external-form.utilities-multiple')
    @endif
@endpush
