@extends('layouts.front')
@section('content')
    <!-- Wizard with validation -->
    <div class="page-content">
        <div class="content-wrapper">
            <div class="content-inner">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Building a New Home (Survey Form)</h6>
                    </div>

                    <form class="wizard-form steps-validation" id="banhForm" action="{{ route('form.banh') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                        <h6>General Information</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label" for="firstname">Name</label><span class="text-danger">*</span>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" placeholder="Firstname" value="{{ $job->customer->name }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" placeholder="Lastname">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="mobile_1">Phone Mobile</label><span class="text-danger">*</span>
                                        <input type="text" name="mobile_1" id="mobile_1" class="form-control form-control-sm" placeholder="Phone Mobile" value="{{ $job->customer->mobile_1 }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label" for="partner_firstname">Partner</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="partner_firstname" id="partner_firstname" class="form-control form-control-sm" placeholder="Firstname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="partner_lastname" id="partner_lastname" class="form-control form-control-sm" placeholder="Lastname">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="partner_mobile_1">Phone Mobile</label>
                                        <input type="text" name="partner_mobile_1" id="partner_mobile_1" class="form-control form-control-sm" placeholder="Phone Mobile">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label" for="address_1">Address</label><span class="text-danger">*</span>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <input type="text" name="address_1" id="address_1" class="form-control form-control-sm" placeholder="Street Address" value="{{ $job->customer->address_1 }}"  required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <input type="text" name="address_2" id="address_2" class="form-control form-control-sm" placeholder="Street Address 2" value="{{ $job->customer->address_2 }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <input type="text" name="city" id="city" class="form-control form-control-sm" placeholder="City" value="{{ $job->customer->city }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <input type="text" name="county" id="county" class="form-control form-control-sm" placeholder="County" value="{{ $job->customer->county }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="eir_code" id="eir_code" class="form-control form-control-sm" placeholder="Eircode" value="{{ $job->customer->eir_code }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <select name="country" id="country" class="form-control form-control-sm">
                                            @foreach($countries as $country)
                                                <option value="{{ $country->country_name }}" @if($country->country_name == "Ireland") selected @endif>{{ $country->country_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="email">Email</label><span class="text-danger">*</span>
                                        <input type="email" name="email" id="email" class="form-control form-control-sm"
                                            placeholder="your@email.com" value="{{ $job->customer->email }}" required>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6>Dwelling Information</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-center mt-5 mb-5">We need to gather some information on your new home. Click <strong>NEXT</strong> to continue.</p>
                                </div>
                            </div>
                        </fieldset>

                        <h6>Dwelling</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="dwelling_type">Dwelling Type</label>
                                        <select name="dwelling_type" id="dwelling_type"  class="form-control form-control-sm" onchange="dwellingOptions(this.value)">
                                            <option value="">Select Dwelling Type</option>
                                            <option value="Single Story">Single Story</option>
                                            <option value="Two Story">Two Story</option>
                                            <option value="Three Story">Three Story</option>
                                            <option value="Split Level">Split Level</option>
                                            <option value="I have a copy of my plans">I have a copy of my plans</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 uploadplan">
                                    <div class="mb-3">
                                        <label class="form-label">Upload File</label>
                                        <input type="file" class="form-control form-control-sm" name="plan">
                                        <span class="form-text text-muted">Accepted formats: pdf, doc.</span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="area">Area</label>
                                        <input type="text" name="area" id="area" class="form-control form-control-sm" placeholder="Enter Your Approximate Floor Area">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="floor_type">First Floor Type</label>
                                        <select name="floor_type" id="floor_type"  class="form-control form-control-sm" onchange="showFloorOptions(this.value);">
                                            <option value="">Select Floor Type</option>
                                            <option value="Concrete">Concrete</option>
                                            <option value="Timber">Timber</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 floor_type_concrete">
                                    <div class="mb-3">
                                        <label class="form-label" for="note_1">Note 1</label>
                                        <input type="text" name="note_1" id="note_1" class="form-control form-control-sm" value="This type of floor construction may inhibit Wi-Fi signal in your home." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 floor_type_concrete">
                                    <div class="mb-3">
                                        <label class="form-label" for="note_2">Note 2</label>
                                        <input type="text" name="note_2" id="note_2" class="form-control form-control-sm" value="This type of floor construction may inhibit mobile phone signal in your home." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="wall_type">Internal Wall Type</label>
                                        <select name="wall_type" id="wall_type"  class="form-control form-control-sm" onchange="showWallOptions(this.value);">
                                            <option value="">Select Wall Type</option>
                                            <option value="Concrete">Concrete</option>
                                            <option value="Plasterboard">Plasterboard</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 wall_type_concrete">
                                    <div class="mb-3">
                                        <label class="form-label" for="note_3">Note 3</label>
                                        <input type="text" name="note_3" id="note_3" class="form-control form-control-sm" value="This type of wall construction may inhibit Wi-Fi signal in your home." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 wall_type_concrete">
                                    <div class="mb-3">
                                        <label class="form-label" for="note_4">Note 4</label>
                                        <input type="text" name="note_4" id="note_4" class="form-control form-control-sm" value="This type of wall construction may inhibit mobile phone signal in your home." readonly>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6>TV & Satellite</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">TV & Satellite</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Free to Air Saorview TV" name="tv[]" onchange="$('.soartvdiv').slideToggle();">
                                        <span class="form-check-label">Free to Air Saorview TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Free to Air Satellite TV" name="tv[]"  onchange="$('.satellitetvdiv').slideToggle();">
                                        <span class="form-check-label">Free to Air Satellite TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Sky+ HD" name="tv[]" onchange="$('.skyplusdiv').slideToggle();">
                                        <span class="form-check-label">Sky+ HD</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Sky Q" name="tv[]" onchange="$('.skyqdiv').slideToggle();">
                                        <span class="form-check-label">Sky Q</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Sky Multi Room" name="tv[]" onchange="$('.skymultiroomdiv').slideToggle();">
                                        <span class="form-check-label">Sky Multi Room</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Web TV" name="tv[]" onchange="$('.webtvdiv').slideToggle();">
                                        <span class="form-check-label">Web TV</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Wall Mounted TV's" name="tv[]" onchange="$('.wallmountedtvdiv').slideToggle();">
                                        <span class="form-check-label">Wall Mounted TV's</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 soartvdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="soartvfield">Saorview TV</label>
                                        <input type="text" name="soartvfield" id="soartvfield" class="form-control form-control-sm" value="I am interested in Free to Air Saorview TV." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 satellitetvdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="satellitetvfield">Satellite TV</label>
                                        <input type="text" name="satellitetvfield" id="satellitetvfield" class="form-control form-control-sm" value="I am interested in Free to Air Satellite TV" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 skyplusdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="skyplusfield">Sky+ HD</label>
                                        <input type="text" name="skyplusfield" id="skyplusfield" class="form-control form-control-sm" value="I am interested in Sky+ HD TV." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 skyqdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="skyqfield">Sky Q</label>
                                        <input type="text" name="skyqfield" id="skyqfield" class="form-control form-control-sm" value="I am interested in Sky Q" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 skymultiroomdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="skymultiroomfield">Sky Multi Room</label>
                                        <input type="text" name="skymultiroomfield" id="skymultiroomfield" class="form-control form-control-sm" value="I am interested in Sky Multi Room" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 webtvdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="webtvfield">Web TV</label>
                                        <input type="text" name="webtvfield" id="webtvfield" class="form-control form-control-sm" value="I am interested in Web TV." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 wallmountedtvdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="wallmountedtvfield">Wall Mounted TV's</label>
                                        <input type="text" name="wallmountedtvfield" id="wallmountedtvfield" class="form-control form-control-sm" value="I am interested in Wall Mounted TV's" readonly>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6>Wi-Fi & Internet</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Wi-Fi & Internet</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Full Home Wi-FI" name="wifi[]" onchange="$('.fullhomewifidiv').slideToggle();">
                                        <span class="form-check-label">Full Home Wi-FI</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Wired data sockets & internal distribution" name="wifi[]"  onchange="$('.wireddatasocketdiv').slideToggle();">
                                        <span class="form-check-label">Wired data sockets & internal distribution</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="I need internet and Wi-Fi in a detached office or garage" name="wifi[]" onchange="$('.wifidetacheddiv').slideToggle();">
                                        <span class="form-check-label">I need internet and Wi-Fi in a detached office or garage</span>
                                    </label>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12 fullhomewifidiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="fullhomewififield">Full Home Wi-Fi</label>
                                        <input type="text" name="fullhomewififield" id="fullhomewififield" class="form-control form-control-sm" value="I am interested in Full Home Wi-Fi." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 wireddatasocketdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="wireddatasocketfield">Wired Data & Internal Distribution</label>
                                        <input type="text" name="wireddatasocketfield" id="wireddatasocketfield" class="form-control form-control-sm" value="I am interested in Wired Data & Internal Distribution" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 wifidetacheddiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="wifidetachedfield">Internet and Wi-Fi in a detached office/garage</label>
                                        <input type="text" name="wifidetachedfield" id="wifidetachedfield" class="form-control form-control-sm" value="I am interested in Internet and Wi-Fi in a detached office or garage" readonly>
                                    </div>
                                </div>
                             </div>
                        </fieldset>

                        <h6>Multi Room Music</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Multi Room Music</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Ceiling mounted speakers" name="multiroom_music[]" onchange="$('.cielingmountedspeakersdiv').slideToggle();">
                                        <span class="form-check-label">Ceiling mounted speakers</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Stand alone cabinet speakers" name="multiroom_music[]"  onchange="$('.standalonespeakersdiv').slideToggle();">
                                        <span class="form-check-label">Stand alone cabinet speakers</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Outdoor speakers for patio area" name="multiroom_music[]" onchange="$('.outdoorspeakersdiv').slideToggle();">
                                        <span class="form-check-label">Outdoor speakers for patio area</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="TV sound through speakers" name="multiroom_music[]" onchange="$('.tvsoundthroughspeakersdiv').slideToggle();">
                                        <span class="form-check-label">TV sound through speakers</span>
                                    </label>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12 cielingmountedspeakersdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="cielingmountedspeakersdivfield">Ceiling mounted speakers</label>
                                        <input type="text" name="cielingmountedspeakersdivfield" id="cielingmountedspeakersdivfield" class="form-control form-control-sm" value="I am interested in Ceiling mounted speakers." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 standalonespeakersdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="standalonespeakersfield">Stand alone cabinet speakers</label>
                                        <input type="text" name="standalonespeakersfield" id="standalonespeakersfield" class="form-control form-control-sm" value="I am interested in Stand alone cabinet speakers" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 outdoorspeakersdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="outdoorspeakersfield">Outdoor speakers for patio area</label>
                                        <input type="text" name="outdoorspeakersfield" id="outdoorspeakersfield" class="form-control form-control-sm" value="I am interested in Outdoor speakers for patio area" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 tvsoundthroughspeakersdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="tvsoundthroughspeakersfield">TV sound through speakers</label>
                                        <input type="text" name="tvsoundthroughspeakersfield" id="tvsoundthroughspeakersfield" class="form-control form-control-sm" value="I am interested in TV sound through speakers" readonly>
                                    </div>
                                </div>
                             </div>
                        </fieldset>

                        <h6>Mobile Phone Repeaters</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Mobile Phone Repeaters</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Full home mobile coverage" name="mobile_phone_repeaters[]" onchange="$('.fullhomemobilecoveragediv').slideToggle();">
                                        <span class="form-check-label">Full home mobile coverage</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="I need mobile phone coverage in a detached office or garage" name="mobile_phone_repeaters[]"  onchange="$('.detachedofficecoveragediv').slideToggle();">
                                        <span class="form-check-label">I need mobile phone coverage in a detached office or garage</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Voice coverage only" name="mobile_phone_repeaters[]" onchange="$('.voicecovergaeonlydiv').slideToggle();">
                                        <span class="form-check-label">Voice coverage only</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Voice and data coverage" name="mobile_phone_repeaters[]" onchange="$('.voiceanddatacoveragediv').slideToggle();">
                                        <span class="form-check-label">Voice and data coverage</span>
                                    </label>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-lg-12 fullhomemobilecoveragediv">
                                    <div class="mb-3">
                                        <label class="form-label" for="fullhomemobilecoveragefield">Full home mobile coverage</label>
                                        <input type="text" name="fullhomemobilecoveragefield" id="fullhomemobilecoveragefield" class="form-control form-control-sm" value="I am interested in Full home mobile coverage." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 detachedofficecoveragediv">
                                    <div class="mb-3">
                                        <label class="form-label" for="detachedofficecoveragefield">I need mobile phone coverage in a detached office or garage</label>
                                        <input type="text" name="detachedofficecoveragefield" id="detachedofficecoveragefield" class="form-control form-control-sm" value="I am interested in mobile phone coverage in a detached office or garage" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 voicecovergaeonlydiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="voicecovergaeonlyfield">Voice coverage only</label>
                                        <input type="text" name="voicecovergaeonlyfield" id="voicecovergaeonlyfield" class="form-control form-control-sm" value="I am interested in Voice coverage only" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 voiceanddatacoveragediv">
                                    <div class="mb-3">
                                        <label class="form-label" for="voiceanddatacoveragefield">Voice and data coverage</label>
                                        <input type="text" name="voiceanddatacoveragefield" id="voiceanddatacoveragefield" class="form-control form-control-sm" value="I am interested in Voice and data coverage" readonly>
                                    </div>
                                </div>
                             </div>
                             <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label">Select your one or more mobile operators</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Vodafone" name="mobile_operator[]">
                                        <span class="form-check-label">Vodafone</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Meteor" name="mobile_operator[]">
                                        <span class="form-check-label">Meteor</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Three Mobile" name="mobile_operator[]">
                                        <span class="form-check-label">Three Mobile</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Virgin" name="mobile_operator[]">
                                        <span class="form-check-label">Virgin</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Eir" name="mobile_operator[]">
                                        <span class="form-check-label">Eir</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Tesco" name="mobile_operator[]">
                                        <span class="form-check-label">Tesco</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Other" name="mobile_operator[]">
                                        <span class="form-check-label">Other</span>
                                    </label>
                                </div>
                             </div>
                        </fieldset>

                        <h6>Contacts</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="form-label" for="building_contractor_firstname">Building Contractor - Foreman (enter your name for self-build)</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="building_contractor_firstname" id="building_contractor_firstname" class="form-control form-control-sm" placeholder="Firstname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="building_contractor_lastname" id="building_contractor_lastname" class="form-control form-control-sm" placeholder="Lastname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="building_contractor_phone">Phone</label>
                                        <input type="text" name="building_contractor_phone" id="building_contractor_phone" class="form-control form-control-sm" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="building_contractor_email">Email</label>
                                        <input type="text" name="building_contractor_email" id="building_contractor_email" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12">
                                    <label class="form-label" for="electrical_contractor_firstname">Electrical Contractor</label>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="electrical_contractor_firstname" id="electrical_contractor_firstname" class="form-control form-control-sm" placeholder="Firstname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <input type="text" name="electrical_contractor_lastname" id="electrical_contractor_lastname" class="form-control form-control-sm" placeholder="Lastname">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="electrical_contractor_phone">Phone</label>
                                        <input type="text" name="electrical_contractor_phone" id="electrical_contractor_phone" class="form-control form-control-sm" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-1">
                                        <label class="form-label" for="electrical_contractor_email">Email</label>
                                        <input type="text" name="electrical_contractor_email" id="electrical_contractor_email" class="form-control form-control-sm" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h6>Further Information</h6>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Further Information</label>
                                        <textarea name="information" class="form-control form-control-sm" id="information" placeholder="Please include any further information you think may be relevant." rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">What date do you expect to be moving into your home on?</label>
                                        <input type="date" name="date" id="date" class="form-control form-control-sm" placeholder="Date">
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        {{-- <h6>ISP</h6>
                        <fieldset>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <label class="form-label">ISP Checklist</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Telecom Pole" name="isp[]" onchange="$('.telecompoldiv').slideToggle();">
                                        <span class="form-check-label">Telecom Pole</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="ESB Pole" name="isp[]"  onchange="$('.esbpolediv').slideToggle();">
                                        <span class="form-check-label">ESB Pole</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Virgin Media" name="isp[]" onchange="$('.virginmediadiv').slideToggle();">
                                        <span class="form-check-label">Virgin Media</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Wireless Operator" name="isp[]" onchange="$('.wirelessopeartordiv').slideToggle();">
                                        <span class="form-check-label">Wireless Operator</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Other" name="isp[]" onchange="$('.otherispdiv').slideToggle();">
                                        <span class="form-check-label">Other</span>
                                    </label>
                                </div>
                            </div>
                             <div class="row mb-3">
                                <div class="col-lg-12 telecompoldiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="telecompolfield">Telecom Pole</label>
                                        <input type="text" name="telecompolfield" id="telecompolfield" class="form-control form-control-sm" value="I am interested in Telecom Pole." readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 esbpolediv">
                                    <div class="mb-3">
                                        <label class="form-label" for="esbpolefield">ESB Pole</label>
                                        <input type="text" name="esbpolefield" id="esbpolefield" class="form-control form-control-sm" value="I am interested in ESB Pole" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 virginmediadiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="virginmediafield">Virgin Media</label>
                                        <input type="text" name="virginmediafield" id="virginmediafield" class="form-control form-control-sm" value="I am interested in Virgin Media" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 wirelessopeartordiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="wirelessopeartorfield">Wireless Operator</label>
                                        <input type="text" name="wirelessopeartorfield" id="wirelessopeartorfield" class="form-control form-control-sm" value="I am interested in Wireless Operator" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12 otherispdiv">
                                    <div class="mb-3">
                                        <label class="form-label" for="otherispfield">Other ISP</label>
                                        <input type="text" name="otherispfield" id="otherispfield" class="form-control form-control-sm" value="I am interested in Other ISP" readonly>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Broadband Speeds</label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-check mb-2">
                                        <input type="checkbox" class="form-check-input form-check-input-dark" value="Discussed" name="discussed">
                                        <span class="form-check-label">Discussed</span>
                                    </label>
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Customer Signature</label>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <input type="text" name="signature" id="signature" class="form-control form-control-sm" placeholder="Customer Signature">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="date" name="signature_date" id="signature_date" class="form-control form-control-sm" placeholder="Date">
                                    </div>
                                </div>
                             </div>
                        </fieldset> --}}

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /wizard with validation -->
@endsection
@push('scripts')
@include('forms.script')
@endpush
