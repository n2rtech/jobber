<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('Product') }}</th>
                    <th>{{ __('Type') }}</th>
                    <th>{{ __('Unit Price') }}</th>
                    <th>{{ __('Default Tax') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</a></td>
                        <td>{{ ucfirst($product->type) }}</td>
                        <td>€ {{ $product->unit_price }}</td>
                        @php
                         $tax_rates = \App\Models\TaxRate::where('id', $product->tax_rate_id)->first();
                        @endphp
                        <td> {{ $tax_rates->name}} </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a href="javascript:void(0)" class="dropdown-item btn edit-product" data-toggle="modal"
                                    data-target="#modal-edit-product"  data-type="{{ $product->type }}" data-name="{{ $product->name }}" data-description="{{ $product->description }}"
                                    data-id="{{ $product->id }}" data-unitprice="{{ $product->unit_price }}" data-tax="{{ $product->tax_rate_id }}">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                  <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $product->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                  <form id='delete-form{{ $product->id }}'
                                    action='{{ route('products.destroy', $product->id) }}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
                                </div>
                              </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Listing Box Starts Here -->

