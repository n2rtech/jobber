@extends('layouts.app')
@section('title', 'Edit Job')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Job') }}</h1>
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
        <form id="jobForm" method="POST" action="{{ route('jobs.update', $job->id) }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="customer_id" id="customer_id" value="{{ $job->customer_id }}">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">{{ __('Job For') }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="name" name="name">
                                        <option value="{{ $job->customer_id }}">
                                            {{ $job->customer->name }}
                                      </option>
                                    </select>
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="job_title_id" class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="job_title_id" name="job_title_id" required>
                                        <option value="">Select Job Title</option>
                                        @foreach ($job_titles as $job_title)
                                            <option value="{{ $job_title->id }}" @if($job_title->id == $job->job_title_id) selected @endif>{{ $job_title->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('email')
                                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="instructions" class="col-sm-2 col-form-label">{{ __('Instructions') }}</label>
                                <div class="col-sm-10">
                                    <textarea rows="5" class="form-control" id="instructions" name="instructions" placeholder="Enter Instructions">{{ old('instructions', $job->instructions) }}</textarea>
                                    @error('instructions')
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
                                                        type="checkbox" id="remind" name="invoice_remind" value="1" @if($job->invoice_remind == 1) checked @endif>
                                                    <label for="remind" class="custom-control-label">Remind me to
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
                                                @foreach($job_forms as $job_form)
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input custom-control-input-success"
                                                        type="checkbox" id="jobForm{{ $job_form->id }}" name="job_forms[]" value="{{ $job_form->id }}" @isset($job->job_forms) @if(in_array($job_form->id, $job->job_forms)) checked @endif @endisset>
                                                    <label for="jobForm{{ $job_form->id }}" class="custom-control-label">{{ $job_form->title }}</label>
                                                </div>
                                                @endforeach
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
                                                <table class="table table-sm" id="line_items">
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
                                                        @foreach($job->products as $key => $product)
                                                        <tr id="item-row{{ $key }}">
                                                            <td>
                                                                <select name="product[{{ $key }}][product]" id="product{{ $key }}" class="form-control form-control-sm" onchange="showProductOptions(this, {{ $key }})" required>
                                                                    <option value="">Select Product</option>
                                                                        @foreach($products as $row_product)
                                                                            <option value="{{ $row_product->id }}" @if($row_product->id == $product->product_id) selected @endif data-unitprice="{{ $row_product->unit_price }}" data-description="{{ $row_product->description }}">{{ $row_product->name }}</option>
                                                                        @endforeach
                                                                </select>
                                                                <textarea name="product[{{ $key }}][description]" id="description{{ $key }}" rows="2" placeholder="Description"
                                                                    class="form-control form-control-sm mt-1">{{ $product->description }}</textarea>
                                                            </td>
                                                            <td>
                                                                <input type="number"
                                                                    class="form-control form-control-sm text-align-right"
                                                                    id="quantity{{ $key }}" name="product[{{ $key }}][quantity]" placeholder="Quantity" oninput="totalUpdate({{ $key }})" min="1" value="{{ $product->quantity }}">
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-sm">£</span>
                                                                    </div>
                                                                    <input type="number"
                                                                        class="form-control form-control-sm text-align-right"
                                                                        id="unit_price{{ $key }}" name="product[{{ $key }}][unit_price]"
                                                                        placeholder="Unit Price" oninput="totalUpdate({{ $key }})" value="{{ $product->unit_price }}" min="0" step="any" required>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text text-sm">£</span>
                                                                    </div>
                                                                    <input type="number"
                                                                        class="form-control form-control-sm text-align-right totalpriceinput"
                                                                        id="total{{ $key }}" name="product[{{ $key }}][total]"
                                                                        placeholder="Total" value="{{ $product->total }}" min="0" step="any" required>
                                                                </div>
                                                            </td>
                                                            <td class="text-right"><button type="button"
                                                                    class="btn btn-sm btn-danger" onclick="$('#item-row{{ $key }}').remove();"><i
                                                                        class="fa fa-minus"></i></button></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="5">
                                                                <button type="button" class="btn btn-sm btn-success" onclick="addLineItem();"><i
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
                                                <h6>£ <span id="totals">0</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-danger" form="jobForm">
                                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
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
@push('scripts')

    {{-- Load Select 2 Script --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- Define Global variable --}}
    <script>
        var item_row = {{ count($job->products) }};
    </script>

    {{-- Autocomplete Customer Field --}}
    <script>
        $("#name").select2({
            theme: 'bootstrap4',
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('customers.autocomplete') }}",
                method: "POST",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term,
                        page: params.page
                    };
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: data.items,
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: true
            },
            placeholder: 'Search for a Customer',
            minimumInputLength: 3,
            templateResult: formatRepo,
            templateSelection: formatRepoSelection
        });

        function formatRepo(repo) {
            if (repo.loading) {
                return repo.text;
            }

            var $container = $(
                "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__title' style='font-size:14px'><i class='fa fa-user' style='font-size:13px'></i>  </div>" +
                "<div class='select2-result-repository__forks' style='font-size:13px'><i class='fa fa-house' style='font-size:12px'></i>  </div>" +
                "<div class='select2-result-repository__stargazers' style='font-size:13px'><i class='fa fa-phone' style='font-size:12px'></i>  </div>" +
                "<div class='select2-result-repository__watchers' style='font-size:13px'><i class='fa fa-envelope' style='font-size:12px'></i>  </div>" +
                "</div>" +
                "</div>" +
                "</div>"
            );

            $container.find(".select2-result-repository__title").append(repo.name);
            $container.find(".select2-result-repository__forks").append(repo.address);
            $container.find(".select2-result-repository__stargazers").append(repo.phone);
            $container.find(".select2-result-repository__watchers").append(repo.email);

            return $container;
        }

        function formatRepoSelection(repo) {
            $('#customer_id').val(repo.id);
            return repo.name;
        }
    </script>

    {{-- Add Line items --}}
    <script>
        function addLineItem() {
            if (item_row < 50) {
                html = '<tr id="item-row' + item_row + '">';
                html +='<td>';
                html +='<select name="product['+ item_row +'][product]" id="product'+ item_row +'" class="form-control form-control-sm" onchange="showProductOptions(this, '+ item_row +')" required>';
                html +='<option value="">Select Product</option>';
                html +='@foreach($products as $product)';
                html +='<option value="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-description="{{ $product->description }}">{{ $product->name }}</option>';
                html +='@endforeach';
                html +='</select>';
                html +='<textarea name="product['+ item_row +'][description]" id="description'+ item_row +'" rows="2" placeholder="Description" class="form-control form-control-sm mt-1"></textarea>';
                html +='</td>';
                html +='<td>';
                html +='<input type="number" class="form-control form-control-sm text-align-right" id="quantity'+ item_row +'" name="product['+ item_row +'][quantity]" placeholder="Quantity" oninput="totalUpdate('+ item_row +')" min="1" value="1">';
                html +='</td>';
                html +='<td>';
                html +='<div class="input-group">';
                html +='<div class="input-group-prepend">';
                html +='<span class="input-group-text text-sm">£</span>';
                html +='</div>';
                html +='<input type="number" class="form-control form-control-sm text-align-right" id="unit_price'+ item_row +'" name="product['+ item_row +'][unit_price]" placeholder="Unit Price" min="0" step="any" oninput="totalUpdate('+ item_row +')" value="0.00" required>';
                html +='</div>';
                html +='</td>';
                html +='<td>';
                html +='<div class="input-group">';
                html +='<div class="input-group-prepend">';
                html +='<span class="input-group-text text-sm">£</span>';
                html +='</div>';
                html +='<input type="number" class="form-control form-control-sm text-align-right totalpriceinput" id="total'+ item_row +'" name="product['+ item_row +'][total]" placeholder="Total" min="0" value="0.00" step="any" required>';
                html +='</div>';
                html +='</td>';
                html +='<td class="text-right"><button type="button" class="btn btn-sm btn-danger" onclick="$(\'#item-row' + item_row +'\').remove();"><i class="fa fa-minus"></i></button></td>';
                html += '</tr>';

                $('#line_items tbody').append(html);

                item_row++;
            }
        }
    </script>

    {{-- Show Product Options --}}
    <script>

        function showProductOptions(element, row){

            var unitprice    = $(element).find(':selected').data('unitprice');

            var description  = $(element).find(':selected').data('description');

            $("#unit_price"  + row).val(unitprice);

            $("#description" + row).val(description);

            var quantity     = $("#quantity" + row).val();

            var total       = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);

            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));
        }
    </script>

    {{-- Update Product Total By Quantity --}}
     <script>
        function totalUpdate(row){
            var quantity    = $("#quantity"+row).val();
            var unitprice   = $("#unit_price"+row).val();
            var total       = (Math.round(quantity * 100) / 100).toFixed(2) * (Math.round(unitprice * 100) / 100).toFixed(2);
            $('#total'      + row).val((Math.round(total * 100) / 100).toFixed(2));
        }
    </script>

    {{-- Update Total of Products --}}
    <script>
        setInterval(function(){
            var sum = 0;
            $('.totalpriceinput').each(function() {
                sum += Number($(this).val());
            });
            $('#totals').text((Math.round(sum * 100) / 100).toFixed(2));
        }, 500);
    </script>

    {{-- Set Default Customer --}}
    <script>
       $(document).ready(function () {
            $("#select2-name-container").text("{{ $job->customer->name }}");
            $("#customer_id").val("{{ $job->customer_id }}");
       });
    </script>

@endpush
