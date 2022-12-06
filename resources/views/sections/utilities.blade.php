<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
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
<script>
    $(function () {
      $("#completedDatatable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": false, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": false, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#completedDatatable_wrapper .col-md-6:eq(0)');
    });
    $(function () {
      $("#scheduledDataTable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": false, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": false, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#scheduledDataTable_wrapper .col-md-6:eq(0)');
    });
    $(function () {
      $("#unscheduledDataTable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": false, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": false, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#unscheduledDataTable_wrapper .col-md-6:eq(0)');
    });


    $(function () {
      $("#estimateDataTable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": false, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": false, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#estimateDataTable_wrapper .col-md-6:eq(0)');
    });

    $(function () {
      $("#dataTable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": true, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#dataTable_wrapper .col-md-6:eq(0)');
    });

    $(function () {
      $("#dataTable1").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": true, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#dataTable1_wrapper .col-md-6:eq(0)');
    });

    $(function () {
      $("#dataTable2").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": true, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#dataTable2_wrapper .col-md-6:eq(0)');
    });
    $(function () {
      $("#invoiceTable").DataTable({
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": true, "info": true, "autoWidth": false, "responsive": true,
        columnDefs: [
            { responsivePriority: 1, targets: 0 },
            { responsivePriority: -1, targets: 2 },
            { responsivePriority: 2, targets: -4 }
        ],
      }).buttons().container().appendTo('#invoiceTable_wrapper .col-md-6:eq(0)');
    });
    $(function () {
      $("#jobseTable").DataTable({
        "columnDefs": [
          { responsivePriority: 1, targets: 0 },
          { responsivePriority: 2, targets: 4 }
        ],
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
        "paging": true, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": true, "info": true, "autoWidth": false, "responsive": true,
      }).buttons().container().appendTo('#jobseTable_wrapper .col-md-6:eq(0)');
    });


</script>
