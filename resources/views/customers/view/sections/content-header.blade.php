<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-6">
                <h1><strong>{{ $customer->name }}</strong></h1>
            </div>

            <div class="col-sm-6 text-right">

                <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark">
                    <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                </a>

                {{-- <a href="javascript:void(0)" onclick="confirmAccept({{ $customer->id }})" class="btn btn-sm btn-success">
                    <i class="btn-icon fas fa-user-plus"></i> {{ __('Add as Sales Lead') }}
                </a> --}}


                <input type="checkbox" id="type" name="type" value="{{ $customer->id }}" @if($customer->type == 'sales-lead') checked @endif data-bootstrap-switch onchange="confirmAccept(this.value)">

                {{-- <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-pink">
                    <i class="btn-icon fas fa-pen"></i> {{ __('Edit Customer') }}
                </a> --}}

            </div>

        </div>
    </div>
</section>
