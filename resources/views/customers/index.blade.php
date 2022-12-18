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

        if(inp.length >= 3){
            
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

            if (window.matchMedia('(max-width: 767px)').matches) {

               htm =  '<tr class="'+cls+'" dt-hasChild>';
               htm += '<td class="dtr-control"  tabindex="0"><a href="/customers/'+d.id+'">'+d.name+'</a></td>';
               htm += '<td> <br class="hidden-sm">'+((d.address_1 != null) ? d.address_1+"," : "" )+" "+( (d.address_2 != null) ? d.address_2+"," : "")+" "+((d.city != null) ? d.city : "")+"  "+((d.eir_code != null) ? "<a href=\"https://maps.google.com/?q="+d.eir_code+"\">"+d.eir_code+"</a>" : "")+'</td>';
               htm += '<td> '+((d.phone != null) ? d.phone : "") +' </td>';
               htm += '<td style="display:none"><br class="hidden-sm"> '+((d.mobile_1 != null) ? d.mobile_1 : "")+' </td>';
               htm += '<td style="display:none"><br class="hidden-sm"> '+((d.mobile_2 != null) ? d.mobile_2 : "")+' </td>';
               htm += '<td style="display:none"> <br class="hidden-sm">';
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

               $('#customerDataTable').addClass('collapsed');
               $('#customerDataTable thead tr:eq(3)').hide();
               $('#customerDataTable thead tr:eq(4)').hide();
               $('#customerDataTable thead tr:eq(5)').hide();
                
            } else {

               htm =  '<tr class="'+cls+'">';
               htm += '<td class="dtr-control"  tabindex="0"><a href="/customers/'+d.id+'">'+d.name+'</a></td>';
               htm += '<td>'+((d.address_1 != null) ? d.address_1+"," : "" )+" "+( (d.address_2 != null) ? d.address_2+"," : "")+" "+((d.city != null) ? d.city : "")+" "+((d.eir_code != null) ? "<a href=\"https://maps.google.com/?q="+d.eir_code+"\">"+d.eir_code+"</a>" : "")+'</td>';
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

            }

                $('#customerDataTable tbody').prepend(htm);
               
               
               
            }
            $('.mt-2:eq(1)').hide();
        }
         
    }

 });
   
}
}

    $('input[type="search"]').on('input',function () {
        filterGlobal($(this).val());
        if($(this).val() == ''){
            location.reload();
       }
    });

    $('input[type="search"]').focus();

});
</script>
<!-- Filter Box Scripts End -->
@endpush
