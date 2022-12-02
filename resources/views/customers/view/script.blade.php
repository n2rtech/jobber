<script src="{{ asset('plugins/simple-lightbox/simple-lightbox.js') }}"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmDelete(no) {
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
                document.getElementById('delete-form' + no).submit();
            }
        })
    };

    function confirmEstimateDelete(no) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete Estimate!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-estimateform' + no).submit();
            }
        })
    };

    function confirmInvoiceDelete(no) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete Invoice!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-invoiceform' + no).submit();
            }
        })
    };

    function confirmJobDelete(no) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete Job!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-jobform' + no).submit();
            }
        })
    };
</script>
<script type="text/javascript">
    function confirmAccept(id) {
        var type = $('#type').is(':checked');
        url_string = '{{ route('customers.lead', ':id') }}';
        url = url_string.replace(':id', id);
        if(type){

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Add to Sales Lead!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })

        }else{

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Remove from Sales Lead!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })

        }
    }
</script>
<script>
    @if(Request::get('activeTab'))
        var activeTab = "#{{ Request::get('activeTab') }}";
        if (activeTab) {
            $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
        }
    @endif
</script>
<script type="text/javascript">
    function confirmConvert(id){
        url_string = '{{ route("estimates.convert", ":id") }}';
        url = url_string.replace(':id', id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Convert to Invoice!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
    </script>
    <script type="text/javascript">
        function confirmPhotoDelete(id){
            url_string = '{{ route("customer.delete-photo", ":id") }}';
            url = url_string.replace(':id', id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete Photo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            })
        }
         function confirmDocumentDelete(id){
            url_string = '{{ route("customer.delete-document", ":id") }}';
            url = url_string.replace(':id', id);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Delete Document!'
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
    <script src="{{ asset('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script>
    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch();
    })
</script>
