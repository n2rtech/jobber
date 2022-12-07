@extends('layouts.app')
@section('title', 'Add Job Form')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Add Job Form') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-danger" form="jobForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="jobForm" method="POST" action="{{ route('job-forms.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter Job Form name" value="{{ old('title') }}">
                                @error('title')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group" id="questionBox">
                                <div class="card" id="question-row0">
                                    <div class="job-form-footer">
                                        <div class="form-group">
                                            <label for="question">Question</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="question0"
                                                    name="question[0][question]" placeholder="Write Question here">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="$('#question-row0').remove();"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="question">Answer Type</label><br />
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="checkbox0"
                                                        name="question[0][type]" value="checkbox" onclick="askOption(this.value, 0);">
                                                    <label for="checkbox0" class="custom-control-label">Checkbox</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="dropdown0"
                                                        name="question[0][type]" value="dropdown" onclick="askOption(this.value, 0);">
                                                    <label for="dropdown0" class="custom-control-label">Dropdown</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="radio0"
                                                        name="question[0][type]" value="radio" onclick="askOption(this.value, 0);">
                                                    <label for="radio0" class="custom-control-label">Radio</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="text0"
                                                        name="question[0][type]" value="text" onclick="askOption(this.value, 0);">
                                                    <label for="text0" class="custom-control-label">Text</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="textarea0"
                                                        name="question[0][type]" value="textarea" onclick="askOption(this.value, 0);">
                                                    <label for="textarea0" class="custom-control-label">Textarea</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div  id="job-form-option0">

                                        </div>
                                        <div class="form-group text-right" id="job-form-option-add0" style="display: none;">
                                            <button type="button" class="btn btn-info" onclick="addOption(0);">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="button" class="btn btn-lime" onclick="addQuestion();">
                                <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New Question') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@push('scripts')
    @include('settings.job-form.utilities')
@endpush
