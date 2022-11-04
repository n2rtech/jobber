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
        url_string = '{{ route('customers.lead', ':id') }}';
        url = url_string.replace(':id', id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Add as Sales Lead!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
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

