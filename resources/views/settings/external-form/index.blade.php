@extends('layouts.app')
@section('title', 'External Forms')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">External Forms</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    @foreach ($external_forms as $external_form)
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-footer">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="post">
                                            <div class="user-block">
                                              <span class="form-name">
                                                {{ $external_form->title }}
                                              </span>
                                              <span class="form-description text-dark">Total Fields : {{ count($external_form->questions) }} </span>
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
                                                  <a class="dropdown-item" href="{{ route('external-forms.edit', $external_form->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                                  <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $external_form->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                                  <form id='delete-form{{ $external_form->id }}'
                                                    action='{{ route('external-forms.destroy', $external_form->id) }}' method='POST'>
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
