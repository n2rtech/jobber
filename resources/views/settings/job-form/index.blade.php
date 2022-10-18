@extends('layouts.app')
@section('title', 'Job Forms')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Job Forms</h1>
            </div>
            <div class="col-sm-6 text-right">

                <a href="{{ route('job-forms.create') }}" class="btn btn-danger">
                    <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                </a>

            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    @foreach ($job_forms as $job_form)
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-footer">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="post">
                                            <div class="user-block">
                                              <span class="form-name">
                                                {{ $job_form->title }}
                                              </span>
                                              <span class="form-description text-dark">Total Questions : {{ count($job_form->questions) }} </span>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="float-right">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                  <a class="dropdown-item" href="{{ route('job-forms.edit', $job_form->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                  <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $job_form->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                                  <form id='delete-form{{ $job_form->id }}'
                                                    action='{{ route('job-forms.destroy', $job_form->id) }}' method='POST'>
                                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                    <input type='hidden' name='_method' value='DELETE'>
                                                </form>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
@include('sections.utilities')
@endpush
