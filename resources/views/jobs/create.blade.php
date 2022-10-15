@extends('layouts.app')
@section('title', 'Add Job')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Add Job') }}</h1>
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
        <form id="jobForm" method="POST" action="{{ route('jobs.store') }}">
            @csrf
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">{{ __('Job For') }}</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter Name" value="{{ old('name') }}">
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Enter Email" value="{{ old('email') }}">
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="directions" class="col-sm-2 col-form-label">{{ __('Instructions') }}</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Instructions">{{ old('directions') }}</textarea>
                                    @error('directions')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-5">
                                    <div class="card card-dark">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('Invoicing') }}</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input custom-control-input-success"
                                                        type="checkbox" id="customCheckbox1" value="option1">
                                                    <label for="customCheckbox1" class="custom-control-label">Remind me to
                                                        invoice when i close the job</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="card card-dark">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('Job Forms') }}</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input custom-control-input-success"
                                                        type="checkbox" id="customCheckbox1" value="option1">
                                                    <label for="customCheckbox1" class="custom-control-label">Job Form
                                                        1</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="card card-dark">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('Line Items') }}</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                    title="Collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th width="40%">{{ __('Product / Service') }}</th>
                                                            <th class="text-right">{{ __('Quantity') }}</th>
                                                            <th class="text-right">{{ __('Unit Price') }}</th>
                                                            <th class="text-right">{{ __('Total') }}</th>
                                                            <th class="text-right"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="product" name="product" placeholder="Name">
                                                                <textarea name="description" id="description" rows="2" placeholder="Description"
                                                                    class="form-control form-control-sm mt-1"></textarea>
                                                            </td>
                                                            <td>
                                                                <input type="text" class="form-control form-control-sm text-align-right"
                                                                    id="quantity" name="name" placeholder="Quantity">
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-sm">£</span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm text-align-right"
                                                                        id="unit_price" name="unit_price"
                                                                        placeholder="Unit Price">
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-sm">£</span>
                                                                    </div>
                                                                    <input type="text"
                                                                        class="form-control form-control-sm text-align-right"
                                                                        id="total" name="total"
                                                                        placeholder="Total">
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><button
                                                                    class="btn btn-sm btn-danger"><i
                                                                        class="fa fa-minus"></i></button></td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="5">
                                                                <button class="btn btn-sm btn-success"><i
                                                                        class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <div class="card card-dark">
                                        <div class="card-header">
                                            <h3 class="card-title">{{ __('Totals') }}</h3>

                                            <div class="card-tools">
                                                <h6>£ 23</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-danger" form="jobForm">
                                        <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
