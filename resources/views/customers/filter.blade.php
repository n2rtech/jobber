<!-- Filter Box Starts Here -->
<div id="filterBox">
        <form id="customerSearchForm" action="{{ route('customers.index') }}">
            <div class="form-row">
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="name" name="name" class="form-control form-control-sm" placeholder="Name"
                            value="{{ $filter_name }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Email"
                            value="{{ $filter_email }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Contact No') }}</label>
                        <input type="text" class="form-control form-control-sm" id="phone"
                            placeholder="Contact No" name="phone" value="{{ $filter_phone }}">
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="form-group">
                        <label for="address">{{ __('Address') }}</label>
                        <input type="text" name="address" class="form-control form-control-sm" placeholder="Address"
                            value="{{ $filter_address }}">
                    </div>
                </div>
                <div class="col-xl-1 col-md-12 mt-4">
                    <div class="form-group" style="margin-top: 8px">
                        <button type="submit" class="btn btn-success btn-sm" form="customerSearchForm"><i class="fas fa-search"></i></button>
                        <a href={{ route('customers.index') }} class="btn btn-sm btn-indigo"><i class="fas fa-refresh"></i></a>
                    </div>
                </div>
            </div>
        </form>
</div>
<!-- Filter Box Ends Here -->
