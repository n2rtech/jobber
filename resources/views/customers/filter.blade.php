<!-- Filter Box Starts Here -->
<div class="card" id="filterBox">
    <div class="card-body">
        <form id="customerSearchForm" action="{{ route('customers.index') }}">
            <div class="form-row">
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input type="name" name="name" class="form-control form-control-sm" placeholder="Name"
                            value="{{ $filter_name }}">
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="email">{{ __('Email') }}</label>
                        <input type="email" name="email" class="form-control form-control-sm" placeholder="Email"
                            value="{{ $filter_email }}">
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Contact No') }}</label>
                        <input type="text" class="form-control form-control-sm" id="phone"
                            placeholder="Contact No" name="phone" value="{{ $filter_phone }}">
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="statuses">{{ __('Customer Status') }}</label>
                        <select class="form-control form-control-sm" name="status" id="statuses">
                            <option value="">{{ __('Select Status') }}</option>
                            <option value="pending" @if($filter_status == 'pending') selected @endif>{{ __('Pending') }}</option>
                            <option value="completed" @if($filter_status == 'completed') selected @endif>{{ __('Completed') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter Box Ends Here -->
