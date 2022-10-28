<!-- Filter Box Starts Here -->
<div class="card" id="filterBox">
    <div class="card-body">
        <form id="estimateSearchForm" action="{{ route('estimates.index') }}">
            <div class="form-row">
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="name">{{ __('Customer Name') }}</label>
                        <input type="name" name="name" class="form-control form-control-sm" placeholder="Customer Name"
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
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Contact No') }}</label>
                        <input type="text" class="form-control form-control-sm" id="phone"
                            placeholder="Contact No" name="phone" value="{{ $filter_phone }}">
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="statuses">{{ __('Status') }}</label>
                        <select class="form-control form-control-sm" name="status" id="statuses">
                            <option value="">{{ __('All') }}</option>
                            <option value="paid" @if($filter_status == 'paid') selected @endif>{{ __('Paid') }}</option>
                            <option value="unpaid" @if($filter_status == 'unpaid') selected @endif>{{ __('Unpaid') }}</option>
                            <option value="cancelled" @if($filter_status == 'cancelled') selected @endif>{{ __('Cancelled') }}</option>
                            <option value="partial" @if($filter_status == 'partial') selected @endif>{{ __('Partial') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="form-group">
                        <label for="date">{{ __('Estimate Date') }}</label>
                        <input type="date" class="form-control form-control-sm" name="date" id="date" value="{{ $filter_date }}">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter Box Ends Here -->
