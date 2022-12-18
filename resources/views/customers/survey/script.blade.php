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
    @isset($survey)
  var cable_row = '{{ count($survey->cables) + 1 }}';
  @else
  var cable_row = 2;
  @endisset
  function addCable(){
    html  ='<div class="col-sm-6">';
    html +='<div class="card" id="cable_'+ cable_row +'">';
    html +='<div class="card-header bg-indigo">';
    html +='<p class="card-title">Cable '+ cable_row +'</p>';
    html +='<div class="card-tools">';
    html +='<button type="button" class="btn btn-sm btn-warning" onclick="confirmCableDelete('+ cable_row +')"><i class="fas fa-trash"></i></button>';
    html +='</div>';
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmCableDelete(no) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete Cable!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('cable_' + no).remove();
            }
        })
    };
    </script>
