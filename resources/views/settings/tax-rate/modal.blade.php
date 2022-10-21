<div class="modal fade" id="modal-tax-rate">
    <div class="modal-dialog modal-lg modal-tax-rate">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Tax Rates</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="taxForm" action="{{ route('tax-rates.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tax Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Tax Name" required>
                    </div>
                    <div class="form-group">
                        <label for="rate">Rate (%)</label>
                        <input type="number" class="form-control" id="rate" name="rate" placeholder="Enter Tax Rate(%)" min="0" step="any" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="taxForm"><i class="btn-icon fas fa-save"></i> {{ __('Save') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-tax-rate">
    <div class="modal-dialog modal-lg modal-edit-tax-rate">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Product & Service</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="updateTaxForm" action="{{ route('tax-rates.store') }}">
                    @csrf
                    <input type="hidden" value="" name="id" id="tax_id">
                    <div class="form-group">
                        <label for="edit_name">Tax Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter Product name here" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_rate">Rate (%)</label>
                        <input type="number" class="form-control" id="edit_rate" name="rate" min="0" step="any" placeholder="Enter Tax Rate(%)" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="updateTaxForm"><i class="btn-icon fas fa-save"></i> {{ __('Update') }}</button>
            </div>
        </div>
    </div>
</div>
