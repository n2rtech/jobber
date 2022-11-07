@extends('layouts.app')
@section('title', 'Show Lead')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Customer Name :') }} <strong>{{ $lead->name }}</strong></h1>
                </div>
                <div class="col-sm-6 text-right">
                    <form id='delete-form{{ $lead->id }}'
                        action='{{ route('sales-leads.destroy', $lead) }}' method='POST'>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='_method' value='DELETE'>
                    </form>
                    <a href="javascript:void(0)" onclick="confirmDelete({{ $lead->id }})"
                        class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        <a href="{{ route('sales-leads.index') }}" class="btn btn-dark">
                            <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                        </a>
                        <a href="javascript:void(0)" onclick="confirmAccept({{ $lead->id }})" class="btn btn-success">
                            <i class="btn-icon fas fa-user-plus"></i> {{ __('Add as Customer') }}
                        </a>
                    <a href="{{ route('sales-leads.edit', $lead->id) }}" class="btn btn-pink">
                        <i class="btn-icon fas fa-pen"></i> {{ __('Edit Lead') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-dark" style="padding: 7px 17px;">
                <h4 class="card-title mt-3"><strong>{{ \Carbon\Carbon::today()->format('d, M Y') }} </strong>| <span id="clock"></span></h4>
                <div class="card-tools text-right">
                    <small>{{ __('Added On') }}</small><br/>
                    <strong>{{ \Carbon\Carbon::parse($lead->created_at)->format('g:i A') }} | {{ \Carbon\Carbon::parse($lead->created_at)->format('d, M Y') }}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="address_1" class="col-sm-3 col-form-label">{{ __('Address 1') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_1" name="address_1"
                                            placeholder="Enter Street Address 1" value="{{ old('address_1', $lead->address_1) }}" readonly>
                                        @error('address_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address_2" class="col-sm-3 col-form-label">{{ __('Address 2') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_2" name="address_2"
                                            placeholder="Enter Street Address 2" value="{{ old('address_2', $lead->address_2) }}" readonly>
                                        @error('address_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter City" value="{{ old('city', $lead->city) }}" readonly>
                                        @error('city')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label">{{ __('State') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter State" value="{{ old('state', $lead->state) }}" readonly>
                                        @error('state')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-3 col-form-label">{{ __('Country') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="country" name="country"
                                            placeholder="Enter Country" value="{{ old('country', $lead->country) }}" readonly>
                                        @error('country')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="directions" class="col-sm-3 col-form-label">{{ __('Direction') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Directions" readonly>{{ old('directions', $lead->directions) }}</textarea>
                                        @error('directions')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="eir_code" class="col-sm-3 col-form-label">{{ __('Eircode') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="eir_code" name="eir_code"
                                            placeholder="Enter Eircode" value="{{ old('eir_code', $lead->eir_code) }}" readonly>
                                        @error('eir_code')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email" value="{{ old('email', $lead->email) }}" readonly>
                                        @error('email')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Enter Phone" value="{{ old('phone', $lead->phone) }}" readonly>
                                        @error('phone')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="phone_name" name="phone_name"
                                            placeholder="Enter Name" value="{{ old('phone_name', $lead->phone_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_1" class="col-sm-3 col-form-label">{{ __('Mobile 1') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_1" name="mobile_1"
                                            placeholder="Enter Mobile 1" value="{{ old('mobile_1', $lead->mobile_1) }}" readonly>
                                        @error('mobile_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_1_name" name="mobile_1_name"
                                            placeholder="Enter Name" value="{{ old('mobile_1_name', $lead->mobile_1_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_2" class="col-sm-3 col-form-label">{{ __('Mobile 2') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_2" name="mobile_2"
                                            placeholder="Enter Mobile 2" value="{{ old('mobile_2', $lead->mobile_2) }}" readonly>
                                        @error('mobile_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_2_name" name="mobile_2_name"
                                            placeholder="Enter Name" value="{{ old('mobile_2_name', $lead->mobile_2_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-3 col-form-label">{{ __('Notes') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="note" name="note" placeholder="Enter Note" readonly>{{ old('note') }}</textarea>
                                        @error('note')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
<script src="{{ asset('plugins/simple-lightbox/simple-lightbox.js') }}"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form'+no).submit();
            }
        })
    };
</script>
<script type="text/javascript">
    function confirmAccept(id){
        url_string = '{{ route("sales-leads.customer", ":id") }}';
        url = url_string.replace(':id', id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Add as Customer!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
</script>
<script>
    function currentTime() {
let date = new Date();
let hh = date.getHours();
let mm = date.getMinutes();
let ss = date.getSeconds();
let session = "AM";

if(hh === 0){
  hh = 12;
}
if(hh > 12){
  hh = hh - 12;
  session = "PM";
}

hh = (hh < 10) ? "0" + hh : hh;
mm = (mm < 10) ? "0" + mm : mm;
ss = (ss < 10) ? "0" + ss : ss;

let time = hh + ":" + mm + ":" + ss + " " + session;

document.getElementById("clock").innerText = time;
let t = setTimeout(function(){ currentTime() }, 1000);
}

currentTime();
</script>
@endpush
