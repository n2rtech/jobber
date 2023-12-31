@extends('layouts.app')

@section('title', 'Jobs')

@section('head')
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  @if($filter_scheduled == 'yes')
  <style>
    .dtr-control{
        padding-left: 0.75rem !important;
    }
    .dtr-control:before{
        display: none !important;
    }
  </style>
  @endif
@endsection

@section('content')

    <div class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    @if($filter_scheduled == 'yes')
                        <h1 class="m-0">{{ __('Scheduled Jobs') }}</h1>
                    @elseif($filter_scheduled == 'no')
                        <h1 class="m-0">{{ __('Unscheduled Jobs') }}</h1>
                    @else
                        <h1 class="m-0">{{ __('All Jobs') }}</h1>
                    @endif

                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" id="filter" class="btn btn-success d-none">
                        <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                    </a>

                    <a href="{{ route('jobs.index') }}" class="btn btn-indigo d-none">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Reset') }}
                    </a>

                    <a href="{{ route('jobs.create') }}" class="btn btn-danger">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            @include('jobs.listing')

        </div>

    </section>

@endsection

@push('scripts')

@include('sections.utilities')

<script type="text/javascript">
    function confirmJobDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "Deleting this Job will also delete the associated Invoice also!",
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

<!-- Filter Box Scripts Start -->
<script>
    $(document).ready(function(){
        var filterBox = 'hide';
        if(filterBox === 'show'){
            $("#filterBox").css('display', 'block');
        }

        $("#filter").click(function(){
            $("#filterBox").slideToggle();
        });
        $('input[type="search"]').focus();

    });
</script>
<!-- Filter Box Scripts End -->
@endpush
