@extends('layouts.app')

@section('title', 'Customers')

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
                    <h1 class="m-0">{{ __('Customers') }}</h1>
                </div>

                <div class="col-sm-6 text-right">

                    <a href="javascript:void(0)" id="filter" class="btn btn-success d-none">
                        <i class="btn-icon fas fa-filter"></i> {{ __('Filter') }}
                    </a>

                    <a href="{{ route('customers.create') }}" class="btn btn-danger">
                        <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section class="content">

        <div class="container-fluid">

            

            @include('customers.listing')

        </div>

    </section>

@endsection

@push('scripts')

@include('sections.utilities')
<!-- Filter Box Scripts Start -->
<script>
    $(document).ready(function(){
        var filterBox = '{{ $filter_box_customer }}';
        if(filterBox === 'show'){
            $("#filterBox").css('display', 'block');
        }

        $("#filter").click(function(){
            $("#filterBox").slideToggle();
        });
        
      $("#customerDataTable").DataTable({
        "paging": false, "pageLength": 20, "lengthChange": false, "searching": true, "ordering": false, "info": false, "autoWidth": false, "responsive": true,
      });

      function filterGlobal(inp){
        $.ajax({
        url : "{{ route('customer-search') }}",
        dataType: 'json',
        data: {
            inp: inp,
            "_token": "{{ csrf_token() }}",
        },
        type: "POST",
        success: function(res) {
        
        var htm = '';
       
        if(res.data != 404 && res.data != ''){
           $('#customerDataTable tbody tr').remove();
            for(var i = 0; i< res.data.length; i++){
                
                var d = res.data[i];
                (i%2 == 0) ? cls = 'even' : cls = 'odd'; 
            
               htm =  '<tr class="'+cls+' search">';
               htm += '<td class="dtr-control" tabindex="0"><a href="/customers/'+d.id+'">'+d.name+'</a></td>';
               htm += '<td> '+( (d.address_1 != null) ? d.address_1 : "" )+" "+( (d.address_2 != null) ? d.address_2 : "")+" "+((d.city != null) ? d.city : "")+" "+((d.country != null) ? d.country : "")+" "+((d.eir_code != null) ? d.eir_code : "")+'</td>';
               htm += '<td> '+((d.phone != null) ? d.phone : "") +' </td>';
               htm += '<td> '+((d.mobile_1 != null) ? d.mobile_1 : "")+' </td>';
               htm += '<td> '+((d.mobile_2 != null) ? d.mobile_2 : "")+' </td>';
               htm += '<td>';
               htm +=   '<div class="btn-group">';
               htm +=     '<button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">';
               htm +=      '<i class="fa fa-ellipsis-vertical"></i>';
               htm += '         </button>';
               htm += '         <div class="dropdown-menu" role="menu" style="">';
               htm += '             <a class="dropdown-item" href="/customers/'+d.id+'/edit"><i class="fas fa-edit"></i> Edit</a>';
               htm += '             <a class="dropdown-item" href="/customers/'+d.id+'"><i class="fas fa-eye"></i> View</a>';
               htm += '         </div>';
               htm += '     </div>';
               htm += ' </td>';
               htm += ' </tr>';
          
                $('#customerDataTable tbody').prepend(htm);
               
            }
       
        }
         
    }

 });
   
}

    $('input[type="search"]').on('input',function () {
        filterGlobal($(this).val());
        if($(this).val() == ''){
            location.reload();
       }
    });

});
</script>
<!-- Filter Box Scripts End -->
@endpush
