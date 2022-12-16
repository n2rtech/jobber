@extends('layouts.app')
<link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
<link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
<link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
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
                        <span class="bs-stepper-label"> Cable1</span>
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
                    <!-- your steps content here -->
                    <div id="cable1-part" class="content" role="tabpanel" aria-labelledby="cable1-part-trigger">
                      <form>
                        <div class="col-md-6 form-group">
                            <label for="inputlabel" class="form-label">Cable1</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Next
                              </label>
                            </div>
                        </div>
                          <div class="col-md-6 form-group">
                            <label for="inputEmail4" class="form-label">From</label>
                            <select class="form-control selectstyle">
                              <option selected>Select a value</option>
                              <option>Lounge</option>
                              <option>Comms Room</option>
                              <option>Utility</option>
                              <option>Living Room</option>
                              <option>Sitting Room</option>
                            </select>
                          </div>
                          <div class="col-md-6 form-group">
                            <label for="inputPassword4" class="form-label">To</label>
                            <select class="form-control selectstyle">
                              <option selected>Select a value</option>
                              <option>Lounge</option>
                              <option>Comms Room</option>
                              <option>Utility</option>
                              <option>Living Room</option>
                              <option>Sitting Room</option>
                            </select>
                          </div>
                          <div class="col-md-6 form-group">
                            <label for="inputPassword4" class="form-label">Qty</label>
                            <select class="form-control selectstyle">
                              <option selected>Select a value</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                          <div class="col-md-6 form-group">
                            <label for="inputPassword4" class="form-label">Cable Type</label>
                            <select class="form-control selectstyle">
                              <option selected>Select a value</option>
                              <option>TV Coaxial Cable 75 Ohm</option>
                              <option>Radio Coaxial Cable 50 Ohm LMR 240/400</option>
                              <option>CAT6 Cable</option>
                              <option>Speaker Cable .75mm CSA</option>
                              <option>HDMI Cable</option>
                            </select>
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Terminate</label>
                            <select class="form-control selectstyle">
                              <option selected>Select a value</option>
                              <option>RJ45 plug both ends</option>
                              <option>TV outlet socket F Type</option>
                              <option>RJ45 Socket</option>
                              <option>No termination</option>
                              <option>Patch Panel</option>
                            </select>
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Note1</label>
                            <textarea class="form-control textareastyle" cols="3" rows="3"></textarea>
                          </div>
                      </form>
                      <div class="col-md-12 text-right">
                          <button class="btn btn-success" onclick="stepper.next()">Next</button>
                      </div>
                    </div>
                    <div id="internet-part" class="content" role="tabpanel" aria-labelledby="internet-part-trigger">
                      <form>
                        <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Internet Service Provider</label>
                            <div class="internetcheckbox">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck1">
                                  <label class="form-check-label" for="gridCheck">
                                    Telecom
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck2">
                                  <label class="form-check-label" for="gridCheck">
                                    ESB
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck3">
                                  <label class="form-check-label" for="gridCheck">
                                    Wireless
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck4">
                                  <label class="form-check-label" for="gridCheck">
                                    Other
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Telecom</label>
                            <input type="text" class="form-control inputstyle" placeholder="A continous duct needs to run from your modem location to telecom pole located at ">
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Note</label>
                            <textarea class="form-control textareastyle" cols="3" rows="3" placeholder="*A continuous duct means a duct running from the base of the ISP pole all the way to your comms area. It can meet other ducting. The duct must end up INSIDE your home. There must be provision to pull a cable all the way from one end of the duct to the other, with access along the duct run if required. Consult with your builder or ground works contractor. "></textarea>
                          </div>
                    </form>
                      <div class="col-md-12 text-right">
                      <button class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-success" onclick="stepper.next()">Next</button>
                      </div>
                    </div>
                    <div id="contacts-part" class="content" role="tabpanel" aria-labelledby="contacts-part-trigger">
                      <form>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Electrical Contractor *</label>
                            <input type="text" name="electrical" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Electrical Contractor *</label>
                            <input type="text" name="electrical" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control inputstyle">
                          </div>
                      </form>
                      <div class="col-md-12 text-right">
                        <button class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                        <button class="btn btn-success" onclick="stepper.next()">Next</button>
                     </div>
                    </div>
                    <div id="notes-part" class="content" role="tabpanel" aria-labelledby="notes-part-trigger">
                      <form>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Satellite Dish Location *</label>
                            <input type="text" name="satellite" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Saorview Aerial Location *</label>
                            <input type="text" name="saorview" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Mobile Phone Repeater Aerial Location *</label>
                            <input type="text" name="repeater" class="form-control inputstyle">
                          </div>
                          <div class="col-md-12 form-group">
                            <label for="inputlabel" class="form-label">Notes Select *</label>
                            <div class="internetcheckbox">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck5">
                                  <label class="form-check-label" for="gridCheck">
                                    TV Socket
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck6">
                                  <label class="form-check-label" for="gridCheck">
                                    HDMI
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck7">
                                  <label class="form-check-label" for="gridCheck">
                                    Ceiling Speakers
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck8">
                                  <label class="form-check-label" for="gridCheck">
                                    Electrical sockets
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck9">
                                  <label class="form-check-label" for="gridCheck">
                                    CAT5/6
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck10">
                                  <label class="form-check-label" for="gridCheck">
                                    Wall Mounted TVs
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck11">
                                  <label class="form-check-label" for="gridCheck">
                                    MPR
                                  </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label for="inputPassword4" class="form-label">Notes General *</label>
                            <textarea class="form-control textareastyle" cols="3" rows="3" placeholder="Extra notes added from sections should show here. Add note button/section on each tab. "></textarea>
                          </div>
                      </form>
                      <div class="col-md-12 text-right">
                          <button class="btn btn-dark" onclick="stepper.previous()">Previous</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>   

<script type="text/javascript">
    // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })
</script>
