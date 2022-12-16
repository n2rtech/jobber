@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/bs-stepper/css/bs-stepper.min.css')}}">
<style type="text/css">
.bs-stepper-circle{
    width: 1.5em;
    height: 1.5em;
    padding: 0.2em 0;
}
.active .bs-stepper-circle {
    background-color: #3a87ad;
    font-weight: 500;
}
.bs-stepper-circle {
    font-weight: 500;
}
.active .bs-stepper-label {
    color: #3a87ad !important;
    cursor: default;
    font-size: 16px !important;
}
.bs-stepper-label {
    font-weight: 500;
    font-size: 16px !important;
}
.form-label{
    font-size: 18px;
    color: #ec8409;
    font-weight: 500 !important;
}
.inputstyle{
    border-color: #e1e1e1 !important;
    background-color: #ffffff !important;
    color: #8d8d8d !important;
    border-radius: 0px !important;
    border: 2px solid #e1e1e1 !important;
}
.selectstyle{
    border-color: #e1e1e1 !important;
    background-color: #ffffff !important;
    color: #8d8d8d !important;
    border-radius: 0px !important;
    border: 2px solid #e1e1e1 !important;
}
.textareastyle{
    border-color: #e1e1e1 !important;
    background-color: #ffffff !important;
    color: #8d8d8d !important;
    border-radius: 0px !important;
    border: 2px solid #e1e1e1 !important;
}
.bs-stepper.linear{
    /*background-color: #f9f9f9;*/
    border: 1px solid #d4d4d4;
}
.internetcheckbox {
    display: flex;
}
.internetcheckbox .form-check {
    margin-right: 15px;
}
.internetcheckbox .form-check input{
    cursor: pointer;
}
</style>
@section('title', 'New Home Survey')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('New Home Survey') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                    <button type="submit" class="btn btn-success" form="customerForm">
                        <i class="btn-icon fas fa-save"></i> {{ __('Save') }}
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
                    <div class="step" data-target="#cable1-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="cable1-part" id="cable1-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label"> Cable</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#internet-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="internet-part" id="internet-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label"> Internet Service Provider</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#contacts-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="contacts-part" id="contacts-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label"> Contacts</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#notes-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="notes-part" id="notes-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label"> Contacts</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <form method="POST" action="{{ route('banh.store') }}" id="banhForm">
                      @csrf
                      <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    <!-- your steps content here -->
                    <div id="cable1-part" class="content" role="tabpanel" aria-labelledby="cable1-part-trigger">
                      <div class="row" id="cable_div">
                        <div class="col-sm-6">
                          <div class="card" id="cable_1">
                            <div class="card-header bg-orange">
                              <p class="card-title">Cable 1</p>
                            </div>
                            <div class="card-body">

                                <div class="form-group row">
                                  <div class="col-md-6">
                                    <label for="from0" class="form-label">From</label>
                                    <select class="form-control selectstyle" name="cable[0][from]" id="from0">
                                      <option  value="">Select a value</option>
                                      <option value="Lounge">Lounge</option>
                                      <option value="Comms Room">Comms Room</option>
                                      <option value="Utility">Utility</option>
                                      <option value="Living Room">Living Room</option>
                                      <option value="Sitting Room">Sitting Room</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="to0" class="form-label">To</label>
                                    <select class="form-control selectstyle" name="cable[0][to]" id="to0">
                                      <option  value="">Select a value</option>
                                      <option value="Lounge">Lounge</option>
                                      <option value="Comms Room">Comms Room</option>
                                      <option value="Utility">Utility</option>
                                      <option value="Living Room">Living Room</option>
                                      <option value="Sitting Room">Sitting Room</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="quantity0" class="form-label">Qty</label>
                                    <select class="form-control selectstyle" name="cable[0][quantity]" id="quantity0">
                                      <option value="">Select a value</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="type0" class="form-label">Cable Type</label>
                                    <select class="form-control selectstyle"  name="cable[0][type]" id="type0">
                                      <option  value="">Select a value</option>
                                      <option value="TV Coaxial Cable 75 Ohm">TV Coaxial Cable 75 Ohm</option>
                                      <option value="Radio Coaxial Cable 50 Ohm LMR 240/400">Radio Coaxial Cable 50 Ohm LMR 240/400</option>
                                      <option value="CAT6 Cable">CAT6 Cable</option>
                                      <option value="Speaker Cable .75mm CSA">Speaker Cable .75mm CSA</option>
                                      <option value="HDMI Cable">HDMI Cable</option>
                                    </select>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="terminate0" class="form-label">Terminate</label>
                                    <select class="form-control selectstyle" name="cable[0][terminate]" id="terminate0">
                                      <option value="">Select a value</option>
                                      <option value="RJ45 plug both ends">RJ45 plug both ends</option>
                                      <option value="TV outlet socket F Type">TV outlet socket F Type</option>
                                      <option value="RJ45 Socket">RJ45 Socket</option>
                                      <option value="No termination">No termination</option>
                                      <option value="Patch Panel">Patch Panel</option>
                                    </select>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="note0" class="form-label">Note</label>
                                    <textarea class="form-control textareastyle" name="cable[0][note]" id="note0" cols="3" rows="3"></textarea>
                                  </div>
                                </div>

                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                          <button type="button" class="btn btn-orange float-left" onclick="addCable()">Add Cable</button>
                          <button type="button" class="btn btn-success float-right" onclick="stepper.next()">Next</button>
                        </div>
                    </div>
                    </div>
                    <div id="internet-part" class="content" role="tabpanel" aria-labelledby="internet-part-trigger">

                        <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Internet Service Provider</label>
                            <div class="internetcheckbox">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck1" name="isp[]" value="Telecom">
                                  <label class="form-check-label" for="gridCheck">
                                    Telecom
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck2" name="isp[]" value="ESB">
                                  <label class="form-check-label" for="gridCheck">
                                    ESB
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck3" name="isp[]" value="Wireless">
                                  <label class="form-check-label" for="gridCheck">
                                    Wireless
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck4" name="isp[]" value="Other">
                                  <label class="form-check-label" for="gridCheck">
                                    Other
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Telecom</label>
                            <input type="text" class="form-control inputstyle" name="telecom" placeholder="A continous duct needs to run from your modem location to telecom pole located at ">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Note</label>
                            <textarea class="form-control textareastyle" cols="3" rows="3" name="note" placeholder="*A continuous duct means a duct running from the base of the ISP pole all the way to your comms area. It can meet other ducting. The duct must end up INSIDE your home. There must be provision to pull a cable all the way from one end of the duct to the other, with access along the duct run if required. Consult with your builder or ground works contractor. "></textarea>
                          </div>

                      <div class="col-md-12 text-right">
                      <button type="button" class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                      <button type="button" class="btn btn-success" onclick="stepper.next()">Next</button>
                      </div>
                    </div>
                    <div id="contacts-part" class="content" role="tabpanel" aria-labelledby="contacts-part-trigger">

                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Electrical Contractor *</label>
                            <input type="text" name="electrical_contractor" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="text" name="phone_electrical_contractor" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="text" name="email_electrical_contractor" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Building Contractor *</label>
                            <input type="text" name="building_contractor" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="text" name="phone_building_contractor" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="text" name="email_building_contractor" class="form-control inputstyle">
                          </div>

                      <div class="col-md-12 text-right">
                        <button type="button" class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                        <button type="button" class="btn btn-success" onclick="stepper.next()">Next</button>
                     </div>
                    </div>
                    <div id="notes-part" class="content" role="tabpanel" aria-labelledby="notes-part-trigger">

                          <div class="col-md-12 form-group">
                            <label for="dish_location" class="form-label">Satellite Dish Location *</label>
                            <input type="text" name="dish_location" id="dish_location" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="saorview_location" class="form-label">Saorview Aerial Location *</label>
                            <input type="text" name="saorview_location" id="saorview_location" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="repeater_location" class="form-label">Mobile Phone Repeater Aerial Location *</label>
                            <input type="text" name="repeater_location" id="repeater_location" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Notes Select *</label>
                            <div class="internetcheckbox">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck5" name="item[]" value="TV Socket">
                                  <label class="form-check-label" for="gridCheck">
                                    TV Socket
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck6" name="item[]" value="HDMI">
                                  <label class="form-check-label" for="gridCheck">
                                    HDMI
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck7" name="item[]" value="Ceiling Speakers">
                                  <label class="form-check-label" for="gridCheck">
                                    Ceiling Speakers
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck8" name="item[]" value="Electrical sockets">
                                  <label class="form-check-label" for="gridCheck">
                                    Electrical sockets
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck9" name="item[]" value="CAT5/6">
                                  <label class="form-check-label" for="gridCheck">
                                    CAT5/6
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck10" name="item[]" value="Wall Mounted TVs">
                                  <label class="form-check-label" for="gridCheck">
                                    Wall Mounted TVs
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck11" name="item[]" value="MPR">
                                  <label class="form-check-label" for="gridCheck">
                                    MPR
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="notes_general" class="form-label">Notes General *</label>
                            <textarea class="form-control textareastyle" cols="3" rows="3" name="notes_general" placeholder="Extra notes added from sections should show here. Add note button/section on each tab. "></textarea>
                          </div>

                      <div class="col-md-12 text-right">
                          <button type="button" class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                          <button type="submit" class="btn btn-success" form="banhForm">Generate Survey</button>
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
<!-- Bootstrap Switch -->
  <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<!-- BS-Stepper -->
  <script src="{{ asset('plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>

<script type="text/javascript">
    // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
<script>
  var cable_row = 2;
  function addCable(){
    html  ='<div class="col-sm-6">';
    html +='<div class="card" id="cable_'+ cable_row +'">';
    html +='<div class="card-header bg-orange">';
    html +='<p class="card-title">Cable '+ cable_row +'</p>';
    html +='</div>';
    html +='<div class="card-body">';
    html +='<div class="form-group row">';
    html +='<div class="col-md-6">';
    html +='<label for="from'+ cable_row +'" class="form-label">From</label>';
    html +='<select class="form-control selectstyle" name="cable['+ cable_row +'][from]" id="from'+ cable_row +'">';
    html +='<option  value="">Select a value</option>';
    html +='<option value="Lounge">Lounge</option>';
    html +='<option value="Comms Room">Comms Room</option>';
    html +='<option value="Utility">Utility</option>';
    html +='<option value="Living Room">Living Room</option>';
    html +='<option value="Sitting Room">Sitting Room</option>';
    html +='</select>';
    html +='</div>';
    html +='<div class="col-md-6">';
    html +='<label for="to'+ cable_row +'" class="form-label">To</label>';
    html +='<select class="form-control selectstyle" name="cable['+ cable_row +'][to]" id="to'+ cable_row +'">';
    html +='<option  value="">Select a value</option>';
    html +='<option value="Lounge">Lounge</option>';
    html +='<option value="Comms Room">Comms Room</option>';
    html +='<option value="Utility">Utility</option>';
    html +='<option value="Living Room">Living Room</option>';
    html +='<option value="Sitting Room">Sitting Room</option>';
    html +='</select>';
    html +='</div>';
    html +='<div class="col-md-6">';
    html +='<label for="quantity'+ cable_row +'" class="form-label">Qty</label>';
    html +='<select class="form-control selectstyle" name="cable['+ cable_row +'][quantity]" id="quantity'+ cable_row +'">';
    html +='<option value="">Select a value</option>';
    html +='<option value="1">1</option>';
    html +='<option value="2">2</option>';
    html +='<option value="3">3</option>';
    html +='<option value="4">4</option>';
    html +='<option value="5">5</option>';
    html +='</select>';
    html +='</div>';
    html +='<div class="col-md-6">';
    html +='<label for="type'+ cable_row +'" class="form-label">Cable Type</label>';
    html +='<select class="form-control selectstyle"  name="cable['+ cable_row +'][type]" id="type'+ cable_row +'">';
    html +='<option  value="">Select a value</option>';
    html +='<option value="TV Coaxial Cable 75 Ohm">TV Coaxial Cable 75 Ohm</option>';
    html +='<option value="Radio Coaxial Cable 50 Ohm LMR 240/400">Radio Coaxial Cable 50 Ohm LMR 240/400</option>';
    html +='<option value="CAT6 Cable">CAT6 Cable</option>';
    html +='<option value="Speaker Cable .75mm CSA">Speaker Cable .75mm CSA</option>';
    html +='<option value="HDMI Cable">HDMI Cable</option>';
    html +='</select>';
    html +='</div>';
    html +='<div class="col-md-12">';
    html +='<label for="terminate'+ cable_row +'" class="form-label">Terminate</label>';
    html +='<select class="form-control selectstyle" name="cable['+ cable_row +'][terminate]" id="terminate'+ cable_row +'">';
    html +='<option value="">Select a value</option>';
    html +='<option value="RJ45 plug both ends">RJ45 plug both ends</option>';
    html +='<option value="TV outlet socket F Type">TV outlet socket F Type</option>';
    html +='<option value="RJ45 Socket">RJ45 Socket</option>';
    html +='<option value="No termination">No termination</option>';
    html +='<option value="Patch Panel">Patch Panel</option>';
    html +='</select>';
    html +='</div>';
    html +='<div class="col-md-12">';
    html +='<label for="note'+ cable_row +'" class="form-label">Note</label>';
    html +='<textarea class="form-control textareastyle" name="cable['+ cable_row +'][note]" id="note'+ cable_row +'" cols="3" rows="3"></textarea>';
    html +='</div>';
    html +='</div>';
    html +='</div>';
    html +='</div>';
    html +='</div>';

    $('#cable_div').append(html);
    cable_row++;
  }
</script>
