<div class="modal fade" id="modal-advanced-search" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-sliders"></i> Advanced Search</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="customerSearchForm" action="{{ route('customers.index') }}">
                    <div class="form-row">
                        <div class="col-xl-12 col-md-12">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="name" name="name" class="form-control form-control-sm" placeholder="Name"
                                @isset($filter_box_customer) @if($filter_box_customer == 'show') value="{{ $filter_name }}" @endif  @endisset>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" class="form-control form-control-sm" placeholder="Email"
                                @isset($filter_box_customer) @if($filter_box_customer == 'show') value="{{ $filter_email }}" @endif  @endisset>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="form-group">
                                <label for="phone">{{ __('Contact No') }}</label>
                                <input type="text" class="form-control form-control-sm" id="phone"
                                    placeholder="Contact No" name="phone"  @isset($filter_box_customer) @if($filter_box_customer == 'show') value="{{ $filter_phone }}" @endif  @endisset>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-12">
                            <div class="form-group">
                                <label for="address">{{ __('Address') }}</label>
                                <input type="text" name="address" class="form-control form-control-sm" placeholder="Address"
                                @isset($filter_box_customer) @if($filter_box_customer == 'show') value="{{ $filter_address }}" @endif  @endisset>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success btn-sm" form="customerSearchForm"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
