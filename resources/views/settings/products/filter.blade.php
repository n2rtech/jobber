<!-- Filter Box Starts Here -->
<div class="card" id="filterBox">
    <div class="card-body">
        <form id="productSearchForm" action="{{ route('products.index') }}">
            <div class="form-row">
                <div class="col-xl-4 col-md-12">
                    <div class="form-group">
                        <label for="filter_name">{{ __('Product Name') }}</label>
                        <input type="text" name="filter_name" class="form-control form-control-sm" placeholder="Product Name"
                            value="{{ $filter_name }}">
                    </div>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="form-group">
                        <label for="filter_type">{{ __('Type') }}</label>
                        <select class="form-control form-control-sm" name="filter_type" id="filter_type">
                        <option value="">{{ __('All') }}</option>
                        <option value="product" @if($filter_type == 'product') selected @endif>{{ __('Product') }}</option>
                        <option value="service" @if($filter_type == 'service') selected @endif>{{ __('Service') }}</option>
                    </select>
                    </div>
                </div>
                <div class="col-xl-3 col-md-12">
                    <div class="form-group">
                        <label for="phone">{{ __('Default Tax') }}</label>
                        <select class="form-control form-control-sm" name="default_tax" id="default_tax">
                            <option value="">{{ __('All') }}</option>
                            @foreach($taxes as $tax)
                                <option value="{{ $tax->id }}" @if($filter_tax == $tax->id) selected @endif>{{ $tax->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-1 col-md-12 mt-4">
                    <div class="form-group" style="margin-top: 8px">
                        <button type="submit" class="btn btn-success btn-sm" form="productSearchForm"><i class="fas fa-search"></i></button>
                        <a href={{ route('products.index') }} class="btn btn-sm btn-indigo"><i class="fas fa-refresh"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Filter Box Ends Here -->
