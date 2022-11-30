<div class="row">
    <div class="col-md-12">
        {{-- <div class="card card-dark collapsed-card"> --}}
        <div class="card card-dark">
            <div class="card-header">
                <h3 class="card-title">{{ __('Line Items') }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                    <div class="col-sm-12">
                        <div class="table-responsive">

                            <table class="table table-sm" id="line_items">

                                <thead>
                                    <tr>
                                        <th class="label-small" width="30%">{{ __('Product / Service') }}</th>
                                        <th class="label-small text-right" width="20%">{{ __('Qty') }}</th>
                                        <th class="label-small text-right" width="20%">{{ __('Unit Price') }}</th>
                                        <th class="label-small text-right" width="20%">{{ __('Total') }}</th>
                                        <th class="label-small text-right" width="10%"></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @isset($estimate)
                                        @foreach($estimate->products as $key => $product)
                                        <tr id="item-row{{ $key }}">
                                            <td>
                                                <p class="text-small" id="text-product{{ $key }}" onclick="editProduct({{ $key }})">{{ $product->product->name }}</p>
                                                <select name="product[{{ $key }}][product]" id="product{{ $key }}"
                                                    class="form-control form-control-sm" onfocusout="productFocusOut({{ $key }})"
                                                    onchange="showProductOptions(this, {{ $key }})" style="display: none">
                                                    <option value="">Select Product</option>
                                                    @foreach ($products as $row)
                                                        <option value="{{ $row->id }}"
                                                            data-unitprice="{{ $row->unit_price }}"
                                                            data-description="{{ $row->description }}"
                                                            data-tax="{{ $row->tax->rate }}" @if($row->id == $product->product_id) selected @endif>{{ $row->name }}</option>
                                                    @endforeach
                                                </select>
                                                <p class="text-small" id="text-description{{ $key }}" onclick="editDescription({{ $key }})">{{ $product->description }}</p>
                                                <textarea name="product[{{ $key }}][description]" id="description{{ $key }}" rows="2" placeholder="Description"
                                                    class="form-control form-control-sm mt-1" style="display: none" onfocusout="descriptionFocusOut({{ $key }})">{{ $product->description }}</textarea>
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-quantity{{ $key }}" onclick="editQuantity({{ $key }})">{{  $product->quantity }}</p>
                                                <input type="number" class="form-control form-control-sm text-align-right"
                                                    id="quantity{{ $key }}" name="product[{{ $key }}][quantity]" placeholder="Quantity"
                                                    onfocusout="quantityFocusOut({{ $key }})" oninput="totalUpdate({{ $key }})" min="1"
                                                    value="{{  $product->quantity }}" style="display: none;">
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-unit{{ $key }}" onclick="editUnitPrice({{ $key }})">{{  $product->unit_price }}</p>
                                                <input type="number" class="form-control form-control-sm text-align-right"
                                                    id="unit_price{{ $key }}" name="product[{{ $key }}][unit_price]" placeholder="Unit Price"
                                                    min="0" step="any" onfocusout="unitFocusOut({{ $key }})"
                                                    oninput="totalUpdate({{ $key }})"  value="{{  $product->unit_price }}" style="display: none">
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-total{{ $key }}" onclick="editTotal({{ $key }})">{{ $product->total }}</p>
                                                <input type="number"
                                                    class="form-control form-control-sm text-align-right totalpriceinput"
                                                    id="total{{ $key }}" name="product[{{ $key }}][total]" placeholder="Total" min="0"
                                                    step="any" onfocusout="totalFocusOut({{ $key }})" value="{{ $product->total }}"
                                                    style="display: none">
                                                    <input type="hidden" id="tax_rate{{ $key }}" name="product[{{ $key }}][tax_rate]" value="{{ $product->tax_rate }}">
                                                    <input type="hidden" class="tax_amount" id="tax_amount{{ $key }}" value="{{ $product->tax_amount }}">
                                            </td>
                                            <td class="text-right"><button type="button" class="btn btn-sm btn-danger"
                                                    onclick="$('#item-row{{ $key }}').remove();"><i class="fa fa-minus"></i></button></td>
                                        </tr>
                                        @endforeach
                                    @else
                                        <tr id="item-row0">
                                            <td>
                                                <p class="text-small" id="text-product0" onclick="editProduct(0)">Select Product</p>
                                                <select name="product[0][product]" id="product0"
                                                    class="form-control form-control-sm" onfocusout="productFocusOut(0)"
                                                    onchange="showProductOptions(this, 0)" style="display: none">
                                                    <option value="">Select Product</option>
                                                    @foreach ($products as $product)
                                                        <option value="{{ $product->id }}"
                                                            data-unitprice="{{ $product->unit_price }}"
                                                            data-description="{{ $product->description }}"
                                                            data-tax="{{ $product->tax->rate }}">{{ $product->name }}</option>
                                                    @endforeach
                                                </select>
                                                <p class="text-small" id="text-description0" onclick="editDescription(0)">Product
                                                    Description</p>
                                                <textarea name="product[0][description]" id="description0" rows="2" placeholder="Description"
                                                    class="form-control form-control-sm mt-1" style="display: none" onfocusout="descriptionFocusOut(0)"></textarea>
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-quantity0" onclick="editQuantity(0)">1</p>
                                                <input type="number" class="form-control form-control-sm text-align-right"
                                                    id="quantity0" name="product[0][quantity]" placeholder="Quantity"
                                                    onfocusout="quantityFocusOut(0)" oninput="totalUpdate(0)" min="1"
                                                    value="1" style="display: none;">
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-unit0" onclick="editUnitPrice(0)">0.00</p>
                                                <input type="number" class="form-control form-control-sm text-align-right"
                                                    id="unit_price0" name="product[0][unit_price]" placeholder="Unit Price"
                                                    min="0" step="any" onfocusout="unitFocusOut(0)"
                                                    oninput="totalUpdate(0)" value="0.00" style="display: none">
                                            </td>
                                            <td>
                                                <p class="text-small text-right" id="text-total0" onclick="editTotal(0)">0.00</p>
                                                <input type="number"
                                                    class="form-control form-control-sm text-align-right totalpriceinput"
                                                    id="total0" name="product[0][total]" placeholder="Total" min="0"
                                                    step="any" onfocusout="totalFocusOut(0)" value="0.00"
                                                    style="display: none">
                                                    <input type="hidden" id="tax_rate0" name="product[0][tax_rate]" value="0">
                                                    <input type="hidden" class="tax_amount" id="tax_amount0"  value="0">
                                            </td>
                                            <td class="text-right"><button type="button" class="btn btn-sm btn-danger"
                                                    onclick="$('#item-row0').remove();"><i class="fa fa-minus"></i></button></td>
                                        </tr>
                                    @endisset
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
                    <div class="col-sm-7 float-right">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <td width="65%" class="text-right">{{ __('Subtotal') }}</td>
                                    <td class="text-right">{{ __('€ ') }}<span id="subtotal">@isset($estimate) {{ $estimate->subtotal }} @else 0.00 @endisset</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="65%" class="text-right">
                                        <div class="form-group row">
                                        <label for="discount" class="col-sm-3"><small>{{ __('Discount') }}</small></label>
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control form-control-sm text-align-right" id="discount" name="discount"
                                                placeholder="€ 0.00" min="0" step="any" @isset($estimate) value="{{ $estimate->discount }}" @else value="0.00" @endisset>
                                            @error('discount')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm" id="discount_type" name="discount_type">
                                                <option value="percentage" @isset($estimate) @if($estimate->discount_type == 'percentage') selected @endif @endisset>%</option>
                                                <option value="amount" @isset($estimate) @if($estimate->discount_type == 'amount') selected @endif @endisset>Amount</option>
                                            </select>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="text-right">{{ __('€ ') }}<span id="discount_amount">0.00</span></td>
                                </tr>
                                <tr>
                                    <td width="65%" class="text-right">
                                        <div class="form-group row">
                                        <label for="tax" class="col-sm-3"><small>{{ __('Tax') }}</small></label>
                                        <div class="col-sm-5">
                                            <input type="number" class="form-control form-control-sm text-align-right" id="tax" name="tax"
                                                placeholder="€ 0.00" min="0" step="any" value="0.00">
                                            @error('tax')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-4">
                                            <select class="form-control form-control-sm" id="tax_type" name="tax_type">
                                                <option value="percentage"@isset($estimate) @if($estimate->tax_type == 'percentage') selected @endif @endisset>%</option>
                                            </select>
                                        </div>
                                        </div>
                                    </td>
                                    <td class="text-right">{{ __('€ ') }}<span id="tax_amount">0.00</span></td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="60%" class="text-right">{{ __('Total') }}</th>
                                    <th class="text-right">{{ __('€ ') }}<span id="total">0.00</span></th>
                                    <input type="hidden" id="estimate_total" name="estimate_total">
                                </tr>
                            </tfoot>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div>
