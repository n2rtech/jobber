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
                <div class="table-responsive">

                    <table class="table table-sm" id="line_items">

                        <thead>
                            <tr>
                                <th width="45%">{{ __('Product / Service') }}</th>
                                <th class="text-right" width="15%">{{ __('Quantity') }}</th>
                                <th class="text-right" width="15%">{{ __('Unit Price') }}</th>
                                <th class="text-right" width="15%">{{ __('Total') }}</th>
                                <th class="text-right" width="10%"></th>
                            </tr>
                        </thead>

                        <tbody>
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
                                </td>
                                <td class="text-right"><button type="button" class="btn btn-sm btn-danger"
                                        onclick="$('#item-row0').remove();"><i class="fa fa-minus"></i></button></td>
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
        </div>
    </div>
</div>
