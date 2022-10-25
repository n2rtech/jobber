@extends('layouts.app')
@section('title', 'Add Invoice')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>{{ __('Add Invoice') }}</h1>
         </div>
         <div class="col-sm-6 text-right">
            <a href="{{ url()->previous() }}" class="btn btn-dark">
            <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
            </a>
            <button type="submit" class="btn btn-danger" form="invoiceForm">
            <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
            </button>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <form id="invoiceForm" method="POST" action="{{ route('invoices.store') }}">
      @csrf
      <input type="hidden" name="customer_id" id="customer_id">
      <div class="row">
         <div class="col-lg-7">
            <div class="card">
               <div class="card-body">
                  <div class="form-group row">
                     <label for="name" class="col-sm-2 col-form-label">{{ __('Invoice For') }}</label>
                     <div class="col-sm-10">
                        <select class="form-control" id="name" name="name"></select>
                        @error('name')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-sm-6">
                        <label for="billing_address" class="col-form-label" style="padding-bottom:0px">{{ __('Billing Address') }}</label>
                        <p id="billing_address" class="text-muted"><small>Select Customer</small></p>
                     </div>
                     <div class="col-sm-6 text-right">
                        <label for="phone" class="col-form-label" style="padding-bottom:0px">{{ __('Phone') }}</label>
                        <p id="phone" class="text-muted"><small>Select Customer</small></p>
                     </div>
                  </div>
                  <div class="form-group row" style="border-top: 1px solid rgba(0,0,0,.1);">
                     <div class="col-sm-6">
                        <label for="shipping_address" class="col-form-label" style="padding-bottom:0px">{{ __('Shipping Address') }}</label>
                        <p id="shipping_address" class="text-muted"><small>Select Customer</small></p>
                     </div>
                     <div class="col-sm-6 text-right">
                        <label for="invoice_no" class="col-form-label" style="padding-bottom:0px">{{ __('Invoice No.') }}</label>
                        <p id="invoice_no" class="text-muted"><small>#1</small></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="card pb-2">
               <div class="card-body">
                  <div class="form-group text-center">
                     <label class="col-form-label">{{ __('Invoice Details') }}</label>
                  </div>
                  <div class="form-group row">
                     <label for="terms" class="col-sm-3 col-form-label">{{ __('Terms') }}</label>
                     <div class="col-sm-9">
                        <select class="form-control" id="terms" name="terms">
                           <option value="">Select Term</option>
                           <option value="30">Net 30</option>
                           <option value="60">Net 60</option>
                           <option value="now">Due on Receipt</option>
                        </select>
                        @error('terms')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="due_date" class="col-sm-3 col-form-label">{{ __('Due Date') }}</label>
                     <div class="col-sm-9">
                        <input type="date" class="form-control" id="due_date" name="due_date">
                        @error('due_date')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
                  <div class="form-group row">
                     <label for="invoice_date" class="col-sm-3 col-form-label">{{ __('Invoice Date') }}</label>
                     <div class="col-sm-9">
                        <input type="date" class="form-control" id="invoice_date" name="invoice_date">
                        @error('invoice_date')
                        <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
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
                  <div class="col-md-12">
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
                              <tr id="item-row0">
                                 <td>
                                    <select name="product[0][product]" id="product0" class="form-control form-control-sm" onchange="showProductOptions(this, 0)">
                                       <option value="">Select Product</option>
                                       @foreach($products as $product)
                                       <option value="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-description="{{ $product->description }}">{{ $product->name }}</option>
                                       @endforeach
                                    </select>
                                    <textarea name="product[0][description]" id="description0" rows="2" placeholder="Description"
                                       class="form-control form-control-sm mt-1"></textarea>
                                 </td>
                                 <td>
                                    <input type="number"
                                       class="form-control form-control-sm text-align-right"
                                       id="quantity0" name="product[0][quantity]" placeholder="Quantity" oninput="totalUpdate(0)" min="1" value="1">
                                 </td>
                                 <td>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text text-sm">£</span>
                                       </div>
                                       <input type="number"
                                          class="form-control form-control-sm text-align-right"
                                          id="unit_price0" name="product[0][unit_price]"
                                          placeholder="Unit Price" min="0" step="any" oninput="totalUpdate(0)" required value="0">
                                    </div>
                                 </td>
                                 <td>
                                    <div class="input-group">
                                       <div class="input-group-prepend">
                                          <span class="input-group-text text-sm">£</span>
                                       </div>
                                       <input type="number"
                                          class="form-control form-control-sm text-align-right"
                                          id="total0" name="product[0][total]"
                                          placeholder="Total" min="0" step="any" required value="0">
                                    </div>
                                 </td>
                                 <td class="text-right"><button type="button"
                                    class="btn btn-sm btn-danger" onclick="$('#item-row0').remove();"><i
                                    class="fa fa-minus"></i></button></td>
                              </tr>
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
                  <div class="col-md-6 float-right">
                     <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="line_items">
                           <thead>
                              <tr>
                                 <td width="60%" class="text-right">{{ __('Subtotal') }}</td>
                                 <td class="text-right">{{ __('£ 0.00') }} </td>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td width="60%" class="text-right">
                                    <div class="form-group row">
                                       <label for="discount" class="col-sm-3"><small>{{ __('Discount') }}</small></label>
                                       <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="phone" name="phone"
                                             placeholder="£ 0.00" value="{{ old('phone') }}">
                                          @error('phone')
                                          <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                          @enderror
                                       </div>
                                       <div class="col-sm-3">
                                          <select class="form-control form-control-sm" id="discount_type" name="discount_type">
                                             <option value="%">%</option>
                                             <option value="amount">Amount</option>
                                          </select>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-right">{{ __('£ 0.00') }}</td>
                              </tr>
                              <tr>
                                 <td width="60%" class="text-right">
                                    <div class="form-group row">
                                       <label for="tax" class="col-sm-3"><small>{{ __('Tax') }}</small></label>
                                       <div class="col-sm-6">
                                          <input type="text" class="form-control form-control-sm" id="phone" name="phone"
                                             placeholder="£ 0.00" value="{{ old('phone') }}">
                                          @error('phone')
                                          <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                          @enderror
                                       </div>
                                       <div class="col-sm-3">
                                          <select class="form-control form-control-sm" id="discount_type" name="discount_type">
                                             <option value="%">%</option>
                                             <option value="amount">Amount</option>
                                          </select>
                                       </div>
                                    </div>
                                 </td>
                                 <td class="text-right">{{ __('£ 0.00') }}</td>
                              </tr>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <th width="60%" class="text-right">{{ __('Total') }}</th>
                                 <th class="text-right">{{ __('£ 0.00') }} </th>
                              </tr>
                           </tfoot>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="form-group">
                     <label for="notes" class="col-form-label">{{ __('Internal Notes & Attachents') }}</label>
                     <textarea rows="5" class="form-control" id="notes" name="notes" placeholder="Enter Notes">{{ old('notes') }}</textarea>
                     @error('notes')
                     <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="card">
               <div class="card-body">
                  <div class="form-group">
                     <label for="conditions" class=col-form-label">{{ __('Terms & Conditions') }}</label>
                     <textarea rows="5" class="form-control" id="conditions" name="conditions" placeholder="Enter Terms & Conditions">{{ old('conditions') }}</textarea>
                     @error('conditions')
                     <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                     @enderror
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 text-center">
            <div class="form-group">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="documents" name="documents[]"
                            multiple>
                        <label class="custom-file-label" for="documents">{{ __('Drag your File here') }}</label>
                    </div>
                </div>
            </div>
         </div>
         <div class="col-lg-12 text-right mb-5">
            <button type="submit" class="btn btn-danger" form="invoiceForm">
            <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
            </button>
         </div>
      </div>
   </form>
</section>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                   q: params.term, // search term
                   page: params.page
               };
           },
           processResults: function(data, params) {
               // parse the results into the format expected by Select2
               // since we are using custom formatting functions we do not need to
               // alter the remote JSON data, except to indicate that infinite
               // scrolling can be used
               params.page = params.page || 1;
               console.log(data.items);
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
           "<div class='select2-result-repository__meta'>" +
           "<div class='select2-result-repository__title'></div>" +
           "<div class='select2-result-repository__statistics'>" +
           "<div class='select2-result-repository__forks'><i class='fa fa-house'></i> </div> " +
           "<div class='select2-result-repository__stargazers'><i class='fa fa-phone'></i> </div> " +
           "<div class='select2-result-repository__watchers'><i class='fa fa-envelope'></i> </div> " +
           "</div>" +
           "</div>" +
           "</div>"
       );

       $container.find(".select2-result-repository__title").text(repo.name);
       $container.find(".select2-result-repository__description")
       $container.find(".select2-result-repository__forks").append(repo.address_1 + ', ' + repo.address_2 + ', ' + repo
           .city + ', ' + repo.state + ', ' + repo.country + ', ' + repo.eir_code);
       $container.find(".select2-result-repository__stargazers").append(repo.phone);
       $container.find(".select2-result-repository__watchers").append(repo.email);

       return $container;
   }

   function formatRepoSelection(repo) {
       $('#customer_id').val(repo.id);
       return repo.name;
   }
</script>
<script>
   function showProductOptions(element, row){
       var unitprice   = $(element).find(':selected').data('unitprice');
       var description = $(element).find(':selected').data('description');
       $("#quantity"+row).val(1);
       $("#unit_price"+row).val(unitprice);
       $("#description"+row).val(description);
       var quantity    =  $("#quantity"+row).val();
       var total       = quantity * unitprice;
       $('#total'+row).val(total);
       // setTotalAmount(total)
   }
</script>
<script>
   function totalUpdate(row){
       var quantity    =  $("#quantity"+row).val();
       var unitprice   =  $("#unit_price"+row).val();
       var total       = quantity * unitprice;
       $('#total'+row).val(total);
       // setTotalAmount(total)
   }
</script>
{{-- <script>
   function setTotalAmount(total){
       var amount = $('#total_amount').val();
       var total_amount = parseFloat(amount) + parseFloat(total);
       var amount = $('#total_amount').val(total_amount);
       $('#amount').text(total_amount);
   }
</script> --}}
<script>
   var item_row = 1;

   function addLineItem() {
       if (item_row < 50) {
           html = '<tr id="item-row' + item_row + '">';
           html +='<td>';
           html +='<select name="product['+ item_row +'][product]" id="product'+ item_row +'" class="form-control form-control-sm" onchange="showProductOptions(this, '+ item_row +')">';
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
           html +='<input type="number" class="form-control form-control-sm text-align-right" id="unit_price'+ item_row +'" name="product['+ item_row +'][unit_price]" placeholder="Unit Price" min="0" step="any" oninput="totalUpdate('+ item_row +')" value="0" required>';
           html +='</div>';
           html +='</td>';
           html +='<td>';
           html +='<div class="input-group">';
           html +='<div class="input-group-prepend">';
           html +='<span class="input-group-text text-sm">£</span>';
           html +='</div>';
           html +='<input type="number" class="form-control form-control-sm text-align-right" id="total'+ item_row +'" name="product['+ item_row +'][total]" placeholder="Total" min="0" value="0" step="any" required>';
           html +='</div>';
           html +='</td>';
           html +='<td class="text-right"><button type="button" class="btn btn-sm btn-danger" onclick="$(\'#item-row' + item_row +'\').remove();"><i class="fa fa-minus"></i></button></td>';
           html += '</tr>';

           $('#line_items tbody').append(html);

           item_row++;
       }
   }
</script>
@endpush
