@extends('layouts.app')

@section('title', 'Invoices')

@section('head')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Invoices') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" id="filter" class="btn btn-success">
                        <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                    </a>

                    <a href="{{ route('invoices.report') }}" class="btn btn-warning">
                        <i class="btn-icon fas fa-sterling-sign"></i> {{ __('Generate Report') }}
                    </a>

                    <a href="{{ route('invoices.create') }}" class="btn btn-danger">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('invoices.listing')

        </div>

    </section>
    @include('invoices.email')
@endsection

@push('scripts')

@include('sections.utilities')
<!-- Filter Box Scripts Start -->
<script type="text/javascript">
    function confirmInvoiceDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "Deleting this Invoice will also delete the associated Job also!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete both!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form'+no).submit();
            }
        })
    };
</script>
<script>
    $(document).ready(function(){
        var filterBox = '{{ $filter_box }}';
        if(filterBox === 'show'){
            $("#filterBox").css('display', 'block');
        }

        $("#filter").click(function(){
            $("#filterBox").slideToggle();
        });

    });
</script>
<!-- Filter Box Scripts End -->
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script>
tinymce.init({
  selector: 'textarea#email_message',
  height: 300,
  menubar: false,
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});
</script>

<script>
    function gettemplate(){
        var formData = {
                    id: $("#modal-email-template .modal-body #invoice_id").val(),
                    email_template: $("#modal-email-template .modal-body #email_template").val(),
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('invoices.email-template') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        $("#modal-email-template .modal-body #email_template").val(formData.email_template);
                        $("#modal-email-template .modal-body #email_address").val(data.email);
                        $("#modal-email-template .modal-body #email_subject").val(data.subject);
                        var emailhtml = data.message.replace(/\n/ig,"<br>")
                        tinyMCE.get('email_message').setContent(emailhtml);
                        // $("#modal-email-template .modal-body #email_message").val(data.message);
                        $("#modal-text-template .modal-body #text_message").html(data.message);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>
@endpush
