<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">

            <div class="col-sm-6">
                <h1>{{ __('Customer Name :') }} <strong>{{ $customer->name }}</strong></h1>
            </div>

            <div class="col-sm-6 text-right">

                <form id='delete-form{{ $customer->id }}' action='{{ route('customers.destroy', $customer) }}'
                    method='POST'>
                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                    <input type='hidden' name='_method' value='DELETE'>
                </form>

                <a href="javascript:void(0)" onclick="confirmDelete({{ $customer->id }})" class="btn btn-sm btn-danger"><i
                        class="fas fa-trash"></i> Delete</a>

                <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark">
                    <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                </a>

                <a href="javascript:void(0)" onclick="confirmAccept({{ $customer->id }})" class="btn btn-sm btn-success">
                    <i class="btn-icon fas fa-user-plus"></i> {{ __('Add as Sales Lead') }}
                </a>

                {{-- <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-sm btn-pink">
                    <i class="btn-icon fas fa-pen"></i> {{ __('Edit Customer') }}
                </a> --}}

            </div>

        </div>
    </div>
</section>
