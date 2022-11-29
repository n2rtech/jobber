<!-- Filter Box Starts Here -->
<div id="filterBox">
        <form id="jobSearchForm" action="{{ route('jobs.index') }}">
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
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Contact No') }}</label>
                        <input type="text" class="form-control form-control-sm" id="phone"
                            placeholder="Contact No" name="phone" value="{{ $filter_phone }}">
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="scheduled">{{ __('Scheduled') }}</label>
                        <select class="form-control form-control-sm" name="scheduled" id="scheduled">
                            <option value="">{{ __('All') }}</option>
                            <option value="yes" @if($filter_scheduled == 'yes') selected @endif>{{ __('Yes') }}</option>
                            <option value="no" @if($filter_scheduled == 'no') selected @endif>{{ __('No') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="date">{{ __('Date Scheduled') }}</label>
                        <input type="date" class="form-control form-control-sm" name="date" id="date" value="{{ $filter_date }}">
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="job_title">{{ __('Job Title') }}</label>
                        <select class="form-control form-control-sm" name="job_title" id="job_title">
                            <option value="">{{ __('All') }}</option>
                            <option value="Job Title 1" @if($filter_job_title == 'Job Title 1') selected @endif>{{ __('Job Title 1') }}</option>
                            <option value="Job Title 2" @if($filter_job_title == 'Job Title 2') selected @endif>{{ __('Job Title 2') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-5 col-md-12">
                    <div class="form-group">
                        <label for="address">{{ __('Address') }}</label>
                        <input type="text" name="address" class="form-control form-control-sm" placeholder="Address"
                            value="{{ $filter_address }}">
                    </div>
                </div>
                <div class="col-xl-1 col-md-12 mt-4">
                    <div class="form-group" style="margin-top: 8px">
                        <button type="submit" class="btn btn-success btn-sm" form="jobSearchForm"><i class="fas fa-search"></i></button>
                        <a href={{ route('jobs.index') }} class="btn btn-sm btn-indigo"><i class="fas fa-refresh"></i></a>
                    </div>
                </div>
            </div>
        </form>
</div>
<hr>
<!-- Filter Box Ends Here -->
