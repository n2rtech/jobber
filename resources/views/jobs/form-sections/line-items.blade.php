<div class="row">
    <div class="col-md-12">
        <div class="card card-dark collapsed-card">
            <div class="card-header">
                <h3 class="card-title">{{ __('Line Items') }}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body linePaddingItems">
                <div class="table-responsive">
                    <table class="table table-sm" id="line_items">
                        <thead>
                            <tr>
                                <th class="label-small">{{ __('Product / Service') }}</th>
                                <th class="label-small text-right" width="12%">{{ __('Qty') }}</th>
                                <th class="label-small text-right" width="15%">{{ __('Unit Price') }}</th>
                                <th class="label-small text-right" width="18%">{{ __('Tax') }}</th>
                                <th class="label-small text-right" width="15%">{{ __('Total') }}</th>
                                <th class="label-small text-right" width="10%"></th>
                            </tr>
                        </thead>

                        <tbody>
                            @isset($job)
                                @foreach($job->products as $key => $product)
                                <tr id="item-row{{ $key }}">
                                    <td>
                                        <p class="text-small" id="text-product{{ $key }}" onclick="editProduct({{ $key }})">{{ $product->product->name }}</p>
                                        <select name="product[{{ $key }}][product]" id="product{{ $key }}"
                                            class="form-control form-control-sm product" onfocusout="productFocusOut({{ $key }})"
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
                                        <p class="text-small text-right" id="text-tax{{ $key }}" onclick="editTax({{ $key }})">{{ $product->tax_rate }}%</p>
                                        <select name="product[{{ $key }}][tax_rate]" id="tax_rate{{ $key }}"
                                            class="form-control form-control-sm product" onfocusout="taxFocusOut({{ $key }})"
                                            onchange="totalUpdate({{ $key }})" style="display: none">
                                            <option value="">Select Tax</option>
                                            @foreach ($tax_rates as $rate)
                                                <option value="{{ $rate->rate }}" @if($rate->rate == $product->tax_rate) selected @endif>{{ $rate->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <p class="text-small text-right" id="text-total{{ $key }}" onclick="editTotal({{ $key }})">{{ $product->total }}</p>
                                        <input type="number"
                                            class="form-control form-control-sm text-align-right totalpriceinput"
                                            id="total{{ $key }}" name="product[{{ $key }}][total]" placeholder="Total" min="0"
                                            step="any" onfocusout="totalFocusOut({{ $key }})" value="{{ $product->total }}"
                                            style="display: none">
                                            <input type="hidden" class="tax_amount" id="tax_amount{{ $key }}" value="{{ $product->tax_amount }}">
                                    </td>
                                    <td class="text-right"><button type="button" class="btn btn-sm btn-danger"
                                            onclick="$('#item-row{{ $key }}').remove();"><i class="fa fa-minus"></i></button></td>
                                </tr>
                                @endforeach
                            @endisset
                        </tbody>

                        <tfoot>
                            <tr>
                                <td class="text-right" colspan="6">
                                    <button type="button" class="btn btn-sm btn-success" onclick="addLineItem();"><i
                                            class="fa fa-plus"></i></button>
                                </td>
                            </tr>
                        </tfoot>

                    </table>

                </div>
                <div class="row" style="display: none;">
                    <div class="col-sm-5 hidden-xs"></div>
                    <div class="col-sm-7 float-right">
                        <div class="table-responsive">
                            <table class="table table-bordered table-sm">
                            <thead>
                                <tr>
                                    <td width="65%" class="text-right">{{ __('Subtotal') }}</td>
                                    <td class="text-right">{{ __('€ ') }}<span id="subtotal">@isset($job) {{ $job->total }} @else 0.00 @endisset</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="65%" class="text-right">
                                        <div class="form-group row">
                                        <label for="tax" class="col-sm-12"><small>{{ __('Tax Total') }}</small></label>
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

</div>
