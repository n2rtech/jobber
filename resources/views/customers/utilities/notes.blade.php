@extends('layouts.app')
@section('title', 'Add Notes')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Add Notes') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('customers.show', $customer) }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
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
                    <div class="col-sm-5">
                        <form id="documentUploadForm" method="POST" action="{{ route('customer.notes-add') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                            <div class="form-group">
                                <label for="note">{{ __('Note') }}</label>
                                <textarea rows="4" class="form-control" id="note" name="note" placeholder="Type Note" autofocus>{{ old('note') }}</textarea>
                                @error('note')
                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="file">{{ __('Choose File') }}</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" name="file"
                                            multiple>
                                        <label class="custom-file-label" for="file">{{ __('Choose File') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-success" form="documentUploadForm">{{ __('Add Note') }}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-center">
                        <label for="photos">{{ __('Calls / Notes') }}</label>
                        </div>
                        <div class="card card-widget widget-user-2">
                            <div class="card-body card-comments">
                                @forelse($customer->allnotes as $note)
                                <div class="card-comment">

                                    <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">

                                    <div class="comment-text">
                                        <span class="username">
                                            {{  $note->user->name }}
                                            <span class="text-muted float-right">{{ $note->created_at }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                                        </span>
                                        {!! $note->note !!}
                                    </div>

                                </div>
                                @empty
                                <div class="card-comment">
                                    <p class="text-center mt-4">No Notes Added.</p>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endpush
