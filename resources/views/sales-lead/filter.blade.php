<!-- Filter Box Starts Here -->
<div class="card" id="filterBox">
    <div class="card-body">
        <form id="leadSearchForm" action="{{ route('sales-leads.index') }}">
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
                        <label for="date">{{ __('Date') }}</label>
                        <input type="date" class="form-control form-control-sm" id="date"
                            placeholder="Date" name="date" value="{{ $filter_date }}">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter Box Ends Here -->
