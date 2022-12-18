@extends('layouts.app')
@section('title', 'Edit Home Survey')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/survey.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Edit Home Survey') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <button type="submit" class="btn btn-danger" form="banhForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Update') }}
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <!-- /.row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <!-- <div class="card-header">
                    <h3 class="card-title">New Home Survey</h3>
                  </div> -->
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                                <div class="step" data-target="#customer-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="customer-part"
                                        id="customer-part-trigger">
                                        <span class="bs-stepper-circle">1</span>
                                        <span class="bs-stepper-label"> Customer</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#cable1-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="cable1-part"
                                        id="cable1-part-trigger">
                                        <span class="bs-stepper-circle">2</span>
                                        <span class="bs-stepper-label"> Cable</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#internet-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="internet-part"
                                        id="internet-part-trigger">
                                        <span class="bs-stepper-circle">3</span>
                                        <span class="bs-stepper-label"> Internet Service Provider</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#contacts-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="contacts-part"
                                        id="contacts-part-trigger">
                                        <span class="bs-stepper-circle">4</span>
                                        <span class="bs-stepper-label"> Contacts</span>
                                    </button>
                                </div>
                                <div class="line"></div>
                                <div class="step" data-target="#notes-part">
                                    <button type="button" class="step-trigger" role="tab" aria-controls="notes-part"
                                        id="notes-part-trigger">
                                        <span class="bs-stepper-circle">5</span>
                                        <span class="bs-stepper-label"> Notes General</span>
                                    </button>
                                </div>
                            </div>
                            <div class="bs-stepper-content">
                                <form method="POST" action="{{ route('banh.update', $survey->id) }}" id="banhForm">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="customer_id" value="{{ $survey->customer_id }}">
                                    <input type="hidden" name="banh_id" value="{{ $survey->banh_id }}">
                                    <!-- your steps content here -->
                                    <div id="customer-part" class="content" role="tabpanel"
                                        aria-labelledby="customer-part-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()"><i class="fas fa-greater-than"></i></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="form-label" for="firstname">Name</label><span
                                                    class="text-danger">*</span>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="firstname" id="firstname"
                                                        class="form-control form-control-sm" placeholder="Firstname"
                                                        value="{{ $survey->firstname }}" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="lastname" id="lastname"
                                                        class="form-control form-control-sm" placeholder="Lastname"
                                                        value="{{ $survey->lastname }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="mobile_1">Phone Mobile</label><span
                                                        class="text-danger">*</span>
                                                    <input type="text" name="mobile_1" id="mobile_1"
                                                        class="form-control form-control-sm" placeholder="Phone Mobile"
                                                        value="{{ $survey->mobile_1 }}" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label" for="partner_firstname">Partner</label>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="partner_firstname" id="partner_firstname"
                                                        class="form-control form-control-sm" placeholder="Firstname"
                                                        value="{{ $survey->partner_firstname }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="partner_lastname" id="partner_lastname"
                                                        class="form-control form-control-sm" placeholder="Lastname"
                                                        value="{{ $survey->partner_lastname }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="partner_mobile_1">Phone Mobile</label>
                                                    <input type="text" name="partner_mobile_1" id="partner_mobile_1"
                                                        class="form-control form-control-sm" placeholder="Phone Mobile"
                                                        value="{{ $survey->partner_mobile_1 }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label" for="address_1">Address</label><span
                                                    class="text-danger">*</span>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <input type="text" name="address_1" id="address_1"
                                                        class="form-control form-control-sm" placeholder="Street Address"
                                                        value="{{ $survey->address_1 }}" required>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <input type="text" name="address_2" id="address_2"
                                                        class="form-control form-control-sm"
                                                        placeholder="Street Address 2" value="{{ $survey->address_2 }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <input type="text" name="city" id="city"
                                                        class="form-control form-control-sm" placeholder="City"
                                                        value="{{ $survey->city }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <input type="text" name="county" id="county"
                                                        class="form-control form-control-sm" placeholder="County"
                                                        value="{{ $survey->county }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="text" name="eir_code" id="eir_code"
                                                        class="form-control form-control-sm" placeholder="Eircode"
                                                        value="{{ $survey->eir_code }}">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <select name="country" id="country"
                                                        class="form-control form-control-sm">
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->country_name }}"
                                                                @if ($country->country_name == 'Ireland') selected @endif>
                                                                {{ $country->country_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="email">Email</label><span
                                                        class="text-danger">*</span>
                                                    <input type="email" name="email" id="email"
                                                        class="form-control form-control-sm" placeholder="your@email.com"
                                                        value="{{ $survey->email }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cable1-part" class="content" role="tabpanel"
                                        aria-labelledby="cable1-part-trigger">

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()"><i class="fas fa-greater-than"></i></button>
                                                <button type="button" class="btn btn-dark mr-2  float-right"
                                                    onclick="stepper.previous()"><i class="fas fa-less-than"></i></button>
                                            </div>
                                        </div>
                                        <div class="row" id="cable_div">
                                            @forelse($survey->cables as $cable)
                                                <div class="col-sm-6">
                                                    <div class="card" id="cable_{{ $loop->iteration }}">
                                                        <div class="card-header bg-indigo">
                                                            <p class="card-title">Cable {{ $loop->iteration }}</p>
                                                            <div class="card-tools">
                                                                <button type="button" class="btn btn-sm btn-warning"
                                                                    onclick="confirmCableDelete({{ $loop->iteration }})"><i
                                                                        class="fas fa-trash"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">

                                                            <div class="form-group row">
                                                                <div class="col-md-6">
                                                                    <label for="from{{ $loop->iteration }}" class="form-label">From</label>
                                                                    <select class="form-control selectstyle"
                                                                        name="cable[{{ $loop->iteration }}][from]" id="from{{ $loop->iteration }}">
                                                                        <option value="">Select a value</option>
                                                                        <option value="Lounge" {{ $cable->from == 'Lounge' ? 'selected' : '' }}>Lounge</option>
                                                                        <option value="Comms Room"  {{ $cable->from == 'Comms Room' ? 'selected' : '' }}>Comms Room</option>
                                                                        <option value="Utility"  {{ $cable->from == 'Utility' ? 'selected' : '' }}>Utility</option>
                                                                        <option value="Living Room"  {{ $cable->from == 'Living Room' ? 'selected' : '' }}>Living Room</option>
                                                                        <option value="Sitting Room"  {{ $cable->from == 'Sitting Room' ? 'selected' : '' }}>Sitting Room</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="to{{ $loop->iteration }}" class="form-label">To</label>
                                                                    <select class="form-control selectstyle"
                                                                        name="cable[{{ $loop->iteration }}][to]" id="to{{ $loop->iteration }}">
                                                                        <option value="">Select a value</option>
                                                                        <option value="Lounge" {{ $cable->to == 'Lounge' ? 'selected' : '' }}>Lounge</option>
                                                                        <option value="Comms Room"  {{ $cable->to == 'Comms Room' ? 'selected' : '' }}>Comms Room</option>
                                                                        <option value="Utility"  {{ $cable->to == 'Utility' ? 'selected' : '' }}>Utility</option>
                                                                        <option value="Living Room"  {{ $cable->to == 'Living Room' ? 'selected' : '' }}>Living Room</option>
                                                                        <option value="Sitting Room"  {{ $cable->to == 'Sitting Room' ? 'selected' : '' }}>Sitting Room</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="quantity{{ $loop->iteration }}" class="form-label">Qty</label>
                                                                    <select class="form-control selectstyle"
                                                                        name="cable[{{ $loop->iteration }}][quantity]" id="quantity{{ $loop->iteration }}">
                                                                        <option value="">Select a value</option>
                                                                        <option value="1" {{ $cable->quantity == '1' ? 'selected' : '' }}>1</option>
                                                                        <option value="2" {{ $cable->quantity == '2' ? 'selected' : '' }}>2</option>
                                                                        <option value="3" {{ $cable->quantity == '3' ? 'selected' : '' }}>3</option>
                                                                        <option value="4" {{ $cable->quantity == '4' ? 'selected' : '' }}>4</option>
                                                                        <option value="5" {{ $cable->quantity == '5' ? 'selected' : '' }}>5</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="type{{ $loop->iteration }}" class="form-label">Cable
                                                                        Type</label>
                                                                    <select class="form-control selectstyle"
                                                                        name="cable[{{ $loop->iteration }}][type]" id="type{{ $loop->iteration }}">
                                                                        <option value="">Select a value</option>
                                                                        <option value="TV Coaxial Cable 75 Ohm" {{ $cable->type == 'TV Coaxial Cable 75 Ohm' ? 'selected' : '' }}>TV Coaxial
                                                                            Cable 75 Ohm</option>
                                                                        <option value="Radio Coaxial Cable 50 Ohm LMR 240/400" {{ $cable->type == 'Radio Coaxial Cable 50 Ohm LMR 240/400' ? 'selected' : '' }}>
                                                                            Radio Coaxial Cable 50 Ohm LMR 240/400</option>
                                                                        <option value="CAT6 Cable" {{ $cable->type == 'CAT6 Cable' ? 'selected' : '' }}>CAT6 Cable</option>
                                                                        <option value="Speaker Cable .75mm CSA" {{ $cable->type == 'Speaker Cable .75mm CSA' ? 'selected' : '' }}>Speaker Cable
                                                                            .75mm CSA</option>
                                                                        <option value="HDMI Cable" {{ $cable->type == 'HDMI Cable' ? 'selected' : '' }}>HDMI Cable</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="terminate{{ $loop->iteration }}"
                                                                        class="form-label">Terminate</label>
                                                                    <select class="form-control selectstyle"
                                                                        name="cable[{{ $loop->iteration }}][terminate]" id="terminate{{ $loop->iteration }}">
                                                                        <option value="">Select a value</option>
                                                                        <option value="RJ45 plug both ends" {{ $cable->terminate == 'RJ45 plug both ends' ? 'selected' : '' }}>RJ45 plug both ends
                                                                        </option>
                                                                        <option value="TV outlet socket F Type" {{ $cable->terminate == 'TV outlet socket F Type' ? 'selected' : '' }}>TV outlet
                                                                            socket F Type</option>
                                                                        <option value="RJ45 Socket" {{ $cable->terminate == 'RJ45 Socket' ? 'selected' : '' }}>RJ45 Socket</option>
                                                                        <option value="No termination" {{ $cable->terminate == 'No termination' ? 'selected' : '' }}>No termination</option>
                                                                        <option value="Patch Panel" {{ $cable->terminate == 'Patch Panel' ? 'selected' : '' }}>Patch Panel</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <label for="note{{ $loop->iteration }}" class="form-label">Note</label>
                                                                    <textarea class="form-control textareastyle" name="cable[{{ $loop->iteration }}][note]" id="note{{ $loop->iteration }}" cols="3" rows="3">{{ $cable->note }}</textarea>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @empty
                                                <div class="col-sm-12 text-center">
                                                    <p class="text-center mt-5"> No Cable Added</p>
                                                </div>
                                            @endforelse
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-orange float-left"
                                                    onclick="addCable()">Add Cable</button>
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()">Next</button>
                                                <button type="button" class="btn btn-dark mr-1 float-right"
                                                    onclick="stepper.previous()">Previous</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="internet-part" class="content" role="tabpanel"
                                        aria-labelledby="internet-part-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()"><i class="fas fa-greater-than"></i></button>
                                                <button type="button" class="btn btn-dark mr-2  float-right"
                                                    onclick="stepper.previous()"><i class="fas fa-less-than"></i></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="form-label">Internet Service Provider</label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-check mb-2">
                                                            <input type="checkbox"
                                                                class="form-check-input form-check-input-dark"
                                                                value="Telecom Pole" name="isp[]"
                                                                onchange="$('.telecompoldiv').slideToggle();"
                                                                {{ in_array('Telecom Pole', $survey->isp) ? 'checked' : '' }}>
                                                            <span class="form-check-label">Telecom Pole</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-check mb-2">
                                                            <input type="checkbox"
                                                                class="form-check-input form-check-input-dark"
                                                                value="ESB Pole" name="isp[]"
                                                                onchange="$('.esbpolediv').slideToggle();"
                                                                {{ in_array('ESB Pole', $survey->isp) ? 'checked' : '' }}>
                                                            <span class="form-check-label">ESB Pole</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-check mb-2">
                                                            <input type="checkbox"
                                                                class="form-check-input form-check-input-dark"
                                                                value="Virgin Media" name="isp[]"
                                                                onchange="$('.virginmediadiv').slideToggle();"
                                                                {{ in_array('Virgin Media', $survey->isp) ? 'checked' : '' }}>
                                                            <span class="form-check-label">Virgin Media</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-check mb-2">
                                                            <input type="checkbox"
                                                                class="form-check-input form-check-input-dark"
                                                                value="Wireless Operator" name="isp[]"
                                                                onchange="$('.wirelessopeartordiv').slideToggle();"
                                                                {{ in_array('Wireless Operator', $survey->isp) ? 'checked' : '' }}>
                                                            <span class="form-check-label">Wireless Operator</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label class="form-check mb-2">
                                                            <input type="checkbox"
                                                                class="form-check-input form-check-input-dark"
                                                                value="Other" name="isp[]"
                                                                onchange="$('.otherispdiv').slideToggle();"
                                                                {{ in_array('Other', $survey->isp) ? 'checked' : '' }}>
                                                            <span class="form-check-label">Other</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-12 telecompoldiv"
                                                        @if (!in_array('Telecom Pole', $survey->isp)) style="display: none;" @endif>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="telecompolfield">Telecom
                                                                Pole</label>
                                                            <input type="text" name="telecompolfield"
                                                                id="telecompolfield" class="form-control form-control-sm"
                                                                value="{{  $survey->telecompolfield }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 esbpolediv"
                                                        @if (!in_array('ESB Pole', $survey->isp)) style="display: none;" @endif>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="esbpolefield">ESB Pole</label>
                                                            <input type="text" name="esbpolefield" id="esbpolefield"
                                                                class="form-control form-control-sm"
                                                                value="{{  $survey->esbpolefield }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 virginmediadiv"
                                                        @if (!in_array('Virgin Media', $survey->isp)) style="display: none;" @endif>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="virginmediafield">Virgin
                                                                Media</label>
                                                            <input type="text" name="virginmediafield"
                                                                id="virginmediafield" class="form-control form-control-sm"
                                                                value="{{  $survey->virginmediafield }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 wirelessopeartordiv"
                                                        @if (!in_array('Wireless Operator', $survey->isp)) style="display: none;" @endif>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="wirelessopeartorfield">Wireless
                                                                Operator</label>
                                                            <input type="text" name="wirelessopeartorfield"
                                                                id="wirelessopeartorfield"
                                                                class="form-control form-control-sm"
                                                                value="{{  $survey->wirelessopeartorfield }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 otherispdiv"
                                                        @if (!in_array('Other', $survey->isp)) style="display: none;" @endif>
                                                        <div class="mb-3">
                                                            <label class="form-label" for="otherispfield">Other
                                                                ISP</label>
                                                            <input type="text" name="otherispfield" id="otherispfield"
                                                                class="form-control form-control-sm" value="{{  $survey->otherispfield }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="note" class="form-label">Note</label>
                                                        <textarea class="form-control textareastyle" cols="3" rows="3" name="note"
                                                            placeholder="*A continuous duct means a duct running from the base of the ISP pole all the way to your comms area. It can meet other ducting. The duct must end up INSIDE your home. There must be provision to pull a cable all the way from one end of the duct to the other, with access along the duct run if required. Consult with your builder or ground works contractor. "
                                                            readonly></textarea>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 text-right">
                                                <button type="button" class="btn btn-dark"
                                                    onclick="stepper.previous()">Previous</button>
                                                <button type="button" class="btn btn-success"
                                                    onclick="stepper.next()">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="contacts-part" class="content" role="tabpanel"
                                        aria-labelledby="contacts-part-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-success float-right"
                                                    onclick="stepper.next()"><i class="fas fa-greater-than"></i></button>
                                                <button type="button" class="btn btn-dark mr-2 float-right"
                                                    onclick="stepper.previous()"><i class="fas fa-less-than"></i></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Electrical Contractor
                                                    *</label>
                                                <input type="text" name="electrical_contractor"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->electrical_contractor}}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Phone</label>
                                                <input type="text" name="electrical_contractor_phone"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->electrical_contractor_phone }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Email</label>
                                                <input type="text" name="electrical_contractor_email"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->electrical_contractor_email }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Building Contractor
                                                    *</label>
                                                <input type="text" name="building_contractor"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->building_contractor }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Phone</label>
                                                <input type="text" name="building_contractor_phone"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->building_contractor_phone }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputPassword4" class="form-label">Email</label>
                                                <input type="text" name="building_contractor_email"
                                                    class="form-control inputstyle"
                                                    value="{{ $survey->building_contractor_email }}">
                                            </div>

                                            <div class="col-md-12 text-right">
                                                <button type="button" class="btn btn-dark"
                                                    onclick="stepper.previous()">Previous</button>
                                                <button type="button" class="btn btn-success"
                                                    onclick="stepper.next()">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="notes-part" class="content" role="tabpanel"
                                        aria-labelledby="notes-part-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-dark float-right"
                                                    onclick="stepper.previous()"><i class="fas fa-less-than"></i></button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="dish_location" class="form-label">Satellite Dish Location
                                                    *</label>
                                                <input type="text" name="dish_location" id="dish_location"
                                                    class="form-control inputstyle" value="{{ $survey->dish_location }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="saorview_location" class="form-label">Saorview Aerial Location
                                                    *</label>
                                                <input type="text" name="saorview_location" id="saorview_location"
                                                    class="form-control inputstyle" value="{{ $survey->saorview_location }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="repeater_location" class="form-label">Mobile Phone Repeater
                                                    Aerial Location *</label>
                                                <input type="text" name="repeater_location" id="repeater_location"
                                                    class="form-control inputstyle" value="{{ $survey->repeater_location }}">
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label for="inputlabel" class="form-label">Notes Select *</label>
                                                <div class="internetcheckbox">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck5"
                                                            name="item[]" value="TV Socket"
                                                            onchange="$('.tvsocketdiv').slideToggle();" {{ in_array('TV Socket', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            TV Socket
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck6"
                                                            name="item[]" value="HDMI"
                                                            onchange="$('.hdmidiv').slideToggle();" {{ in_array('HDMI', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            HDMI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck7"
                                                            name="item[]" value="Ceiling Speakers"
                                                            onchange="$('.ceilingspeakersdiv').slideToggle();" {{ in_array('Ceiling Speakers', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            Ceiling Speakers
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck8"
                                                            name="item[]" value="Electrical sockets"
                                                            onchange="$('.electricalsocketsdiv').slideToggle();" {{ in_array('Electrical sockets', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            Electrical sockets
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck9"
                                                            name="item[]" value="CAT5/6"
                                                            onchange="$('.cat56div').slideToggle();" {{ in_array('CAT5/6', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            CAT5/6
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck10"
                                                            name="item[]" value="Wall Mounted TVs"
                                                            onchange="$('.wallmountedtvsdiv').slideToggle();" {{ in_array('Wall Mounted TVs', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            Wall Mounted TVs
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck11"
                                                            name="item[]" value="MPR"
                                                            onchange="$('.mprdiv').slideToggle();" {{ in_array('MPR', $survey->item) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="gridCheck">
                                                            MPR
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 tvsocketdiv"  @if (!in_array('TV Socket', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="tvsocketfield">TV Socket</label>
                                                    <input type="text" name="tvsocketfield" id="tvsocketfield"
                                                        class="form-control form-control-sm"
                                                        value="{{ $survey->tvsocketfield }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 hdmidiv" @if (!in_array('TV Socket', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="hdmifield">HDMI</label>
                                                    <input type="text" name="hdmifield" id="hdmifield"
                                                        class="form-control form-control-sm"
                                                        value="{{ $survey->hdmifield }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 ceilingspeakersdiv" @if (!in_array('Ceiling Speakers', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="ceilingspeakersfield">Ceiling
                                                        speakers</label>
                                                    <input type="text" name="ceilingspeakersfield"
                                                        id="ceilingspeakersfield" class="form-control form-control-sm"
                                                        value="{{ $survey->ceilingspeakersfield }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 electricalsocketsdiv" @if (!in_array('Electrical sockets', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="electricalsocketfield">Electrical
                                                        sockets</label>
                                                    <input type="text" name="electricalsocketfield"
                                                        id="electricalsocketfield" class="form-control form-control-sm"
                                                        value="{{ $survey->electricalsocketfield }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 cat56div" @if (!in_array('CAT5/6', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="cat56field">CAT5/6</label>
                                                    <input type="text" name="cat56field" id="cat56field"
                                                        class="form-control form-control-sm"
                                                        value="{{ $survey->cat56field }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wallmountedtvsdiv" @if (!in_array('Wall Mounted TVs', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="wallmountedtvfield">Wall Mounted
                                                        TV's</label>
                                                    <input type="text" name="wallmountedtvfield"
                                                        id="wallmountedtvfield" class="form-control form-control-sm"
                                                        value="{{ $survey->wallmountedtvfield }}" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mprdiv" @if (!in_array('MPR', $survey->item)) style="display: none;" @endif>
                                                <div class="mb-3">
                                                    <label class="form-label" for="mprfield">Mobile Phone Repeater</label>
                                                    <input type="text" name="mprfield" id="mprfield"
                                                        class="form-control form-control-sm"
                                                        value="{{ $survey->mprfield }}" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <label for="notes_general" class="form-label">Notes General *</label>
                                                <textarea class="form-control textareastyle" cols="3" rows="3" name="notes_general"
                                                    placeholder="Extra notes added from sections should show here. Add note button/section on each tab. ">{{ $survey->notes_general }}</textarea>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 text-right">
                                                <button type="button" class="btn btn-dark"
                                                    onclick="stepper.previous()">Previous</button>
                                                <button type="submit" class="btn btn-success" form="banhForm">Update</button>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->

    </section>
@endsection
@push('scripts')
    @include('customers.survey.script')
@endpush
