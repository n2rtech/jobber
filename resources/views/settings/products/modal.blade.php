<div class="modal fade" id="modal-product">
    <div class="modal-dialog modal-lg modal-product">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add  Product & Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="productForm" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type" required>
                            <option value="product">Product</option>
                            <option value="service">Service</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product name here" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter Product description here" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="unit_price">Unit Price (£)</label>
                        <input type="number" class="form-control" id="unit_price" name="unit_price" placeholder="Enter Unit Price (£)" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label>Choose Tax</label>
                            @foreach($taxes as $tax)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tax{{ $loop->iteration }}" value="{{ $tax->id }}" name="tax_rates[]">
                                <label class="form-check-label" for="tax{{ $loop->iteration }}">{{ $tax->name }}</label>
                            </div>
                            @endforeach
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="productForm"><i class="btn-icon fas fa-save"></i> {{ __('Save') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-product">
    <div class="modal-dialog modal-lg modal-edit-product">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product & Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="updateproductForm" action="{{ route('products.store') }}">
                    @csrf
                    <input type="hidden" value="" name="id" id="product_id">
                    <div class="form-group">
                        <label for="type">Type</label>
                        <select class="form-control" id="edit_type" name="type" required>
                            <option value="product">Product</option>
                            <option value="service">Service</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edit_title">Product Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Product name here" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="edit_description" name="description" placeholder="Enter Product description here" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_unitprice">Unit Price (£)</label>
                        <input type="number" class="form-control" id="edit_unitprice" name="unit_price" placeholder="Enter Unit Price (£)" min="0" step="any" required>
                    </div>
                    <div class="form-group">
                        <label>Choose Tax</label>
                            @foreach($taxes as $tax)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="edit_tax{{ $tax->id }}" value="{{ $tax->id }}" name="tax_rates[]">
                                <label class="form-check-label" for="edit_tax{{ $tax->id }}">{{ $tax->name }}</label>
                            </div>
                            @endforeach
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="updateproductForm"><i class="btn-icon fas fa-save"></i> {{ __('Update') }}</button>
            </div>
        </div>
    </div>
</div>
