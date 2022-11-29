@extends('layouts.app')

@section('title', 'Estimates')

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
                    <h1 class="m-0">{{ __('Estimates') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" id="filter" class="btn btn-success">
                        <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                    </a>

                    <a href="{{ route('estimates.create') }}" class="btn btn-danger">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">
            @include('estimates.listing')

        </div>

    </section>

@endsection

@push('scripts')

@include('sections.utilities')
<script type="text/javascript">
    function confirmAccept(id){
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
    <!-- Filter Box Scripts Start -->
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
@endpush
