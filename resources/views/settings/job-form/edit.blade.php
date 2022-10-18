@extends('layouts.app')
@section('title', 'Edit Job Form')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Job Form') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-danger" form="jobForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form id="jobForm" method="POST" action="{{ route('job-forms.update', $job_form->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter Job Form name" value="{{ old('title', $job_form->title) }}">
                                @error('title')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group" id="questionBox">
                                @foreach($job_form->questions as $key => $question)
                                <div class="card" id="question-row{{ $key }}">
                                    <div class="job-form-footer">
                                        <div class="form-group">
                                            <label for="question">Question</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="question{{ $key }}"
                                                    name="question[{{ $key }}][question]" placeholder="Write Question here" value="{{ $question->question }}">
                                                <div class="input-group-append">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="$('#question-row{{ $key }}').remove();"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="question">Answer Type</label><br />
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="checkbox{{ $key }}"
                                                        name="question[{{ $key }}][type]" value="checkbox" onclick="askOption(this.value, {{ $key }});" @if($question->type == 'checkbox') checked @endif>
                                                    <label for="checkbox{{ $key }}" class="custom-control-label">Checkbox</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="dropdown{{ $key }}"
                                                        name="question[{{ $key }}][type]" value="dropdown" onclick="askOption(this.value, {{ $key }});" @if($question->type == 'dropdown') checked @endif>
                                                    <label for="dropdown{{ $key }}" class="custom-control-label">Dropdown</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="radio{{ $key }}"
                                                        name="question[{{ $key }}][type]" value="radio" onclick="askOption(this.value, {{ $key }});" @if($question->type == 'radio') checked @endif>
                                                    <label for="radio{{ $key }}" class="custom-control-label">Radio</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="text{{ $key }}"
                                                        name="question[{{ $key }}][type]" value="text" onclick="askOption(this.value, {{ $key }});" @if($question->type == 'text') checked @endif>
                                                    <label for="text{{ $key }}" class="custom-control-label">Text</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline mr-3">
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="textarea{{ $key }}"
                                                        name="question[{{ $key }}][type]" value="textarea" onclick="askOption(this.value, {{ $key }});" @if($question->type == 'textarea') checked @endif>
                                                    <label for="textarea{{ $key }}" class="custom-control-label">Textarea</label>
                                                </div>
                                            </label>
                                        </div>
                                        <div  id="job-form-option{{ $key }}">
                                            @foreach($question->options as $option_key => $option)
                                            <div class="form-group mt-3 option-row{{ $key }}" id="option{{ $key }}-row{{ $option_key }}">
                                            <div class="input-group">
                                            <input type="text" class="form-control" id="question{{ $key }}-option{{ $option_key }}" name="question[{{ $key }}][option][{{ $option_key }}]" placeholder = "{{ ucfirst($question->type) }} option" value="{{ $option->option }}">
                                            <div class="input-group-append">
                                            <button type="button" class="btn btn-pink" onclick="$('#option{{ $key }}-row{{ $option_key }}').remove();"><i class="fas fa-minus" ></i ></button >
                                            </div>
                                            </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="form-group text-right" id="job-form-option-add{{ $key }}" style="display: none;">
                                            <button type="button" class="btn btn-info" onclick="addOption({{ $key }});">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
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
