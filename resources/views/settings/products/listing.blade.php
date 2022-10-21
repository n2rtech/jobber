<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            @foreach ($products as $product)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <h4 class="card-title">
                                {{ $product->name }}
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-10">
                                    {{ $product->description }}
                                </div>
                                <div class="col-sm-2">
                                    <div class="float-right">
                                        <a href="javascript:void(0)" class="btn btn-tool edit-product" data-toggle="modal"
                                            data-target="#modal-edit-product"  data-type="{{ $product->type }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}"
                                            data-id="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-taxes="{{ json_encode($product->tax_rates)}}">
                                            <i class="fas fa-edit text-success"></i>
                                        </a>
                                        <button type="button" class="btn btn-tool"
                                            onclick="confirmDelete({{ $product->id }})">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </button>
                                        <form id='delete-form{{ $product->id }}'
                                            action='{{ route('products.destroy', $product->id) }}' method='POST'>
                                            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                            <input type='hidden' name='_method' value='DELETE'>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-footer text-right">
            <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modal-product">
                <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
            </a>
        </div>
    </div>
</div>
