@extends('layouts.app')
@section('title', 'Invoice-'.$invoice->id)
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <style>
        @page { size: auto;  margin: 0mm; }
    </style>
@endsection
@section('content')
    <section class="content-header col-xl-9 mx-auto">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Invoice #{{ $invoice->id }}</h1>
                </div>
                <div class="col-sm-6 text-right">
            <a href="{{ route('customers.show', $invoice->customer_id) }}" class="btn btn-dark">
            <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
            </a>
           </div>
            </div>

        </div>
    </section>
    <section class="content col-xl-9 mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <img src="{{ asset('dist/img/logo-dark.png') }}" alt="DaltonTV">
                                    <small class="float-right"><strong>Invoice</strong></small>
                                </h4>
                            </div>
                        </div>
                        <div class="row invoice-info mt-4 text-small">



                            <div class="col-sm-5 invoice-col">
                                <p class="mt-2"><strong>Billed To</strong></p>
                                <address class="text-muted">
                                    {{ $invoice->customer->name }}<br />
                                    Address: {{ $invoice->customer->address_1 }} @isset($invoice->customer->address_2)
                                        , {{ $invoice->customer->address_2 }}
                                    @endisset <br />
                                    @isset($invoice->customer->city)
                                        {{ $invoice->customer->city }}
                                        @endisset @isset($invoice->customer->state)
                                        , {{ $invoice->customer->state }}
                                    @endisset
                                    @isset($invoice->customer->county)
                                        , {{ $invoice->customer->county }}
                                    @endisset
                                    <br>
                                    {{ $invoice->customer->country }}, {{ $invoice->customer->eir_code }}<br>
                                    Phone: @isset($invoice->customer->phone)
                                        {{ $invoice->customer->phone }},
                                        @endisset @isset($invoice->customer->mobile_1)
                                        {{ $invoice->customer->mobile_1 }}
                                        @endisset @isset($invoice->customer->mobile_2)
                                        , {{ $invoice->customer->mobile_2 }}
                                    @endisset
                                    <br>
                                    Email: {{ $invoice->customer->email ?? '-' }}
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <p class="mt-2"><strong>{{ $company->company }}</strong></p>
                                <address class="text-muted">
                                    Address: {{ $company->address_1 }}
                                    {{ $company->address_2 }}<br>
                                    {{ $company->city }}, {{ $company->state }}<br>
                                    {{ $company->country }}, {{ $company->zipcode }}<br>
                                    Mobile: {{ $company->mobile }}<br>
                                    Email: {{ $company->email }}
                                </address>
                            </div>

                            <div class="col-sm-3 invoice-col">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td style="border-top: none;"><b>Invoice No.</b></td>
                                            <td style="border-top: none;" class="text-right"># {{ $invoice->id }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"><b>Invoice Date</b></td>
                                            <td style="border-top: none;" class="text-right">
                                                {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"><b>Due Date</b></td>
                                            <td style="border-top: none;" class="text-right">
                                                {{ \Carbon\Carbon::parse($invoice->due_date)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"></td>
                                            <td style="border-top: none;" class="text-right">
                                                @if ($invoice->status == 'paid')
                                                    <button
                                                        class="mt-3 btn-sm btn btn-outline-success">{{ ucfirst($invoice->status) }}</button>
                                                @endif
                                                @if ($invoice->status == 'unpaid')
                                                    <button
                                                        class="mt-3 btn-sm btn btn-outline-danger">{{ ucfirst($invoice->status) }}</button>
                                                @endif
                                                @if ($invoice->status == 'cancelled')
                                                    <button
                                                        class="mt-3 btn-sm btn btn-outline-warning">{{ ucfirst($invoice->status) }}</button>
                                                @endif
                                                @if ($invoice->status == 'partial')
                                                    <button
                                                        class="mt-3 btn btn-outline-info">{{ ucfirst($invoice->status) }}</button>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-12 table-responsive estimFonts">
                                <table class="table table-striped text-small">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th>Product / Service</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit Price</th>
                                            {{-- <th class="text-right">Tax Rate(%)</th> --}}
                                            <th class="text-right">Total(€)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($invoice->products as $product)
                                        <tr>
                                            <td>{{ $product->product->name }}</td>
                                            <td class="text-right">{{ $product->quantity }}</td>
                                            <td class="text-right">€ {{ $product->unit_price }}</td>
                                            {{-- <td class="text-right">{{ $product->tax_rate }}%</td> --}}
                                            <td class="text-right">€ {{ $product->total }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-6">

                            </div>
                            <!-- /.col -->
                            <div class="col-6 col-12">
                                <div class="table-responsive estimFonts">
                                    <table class="table table-bordered table-sm text-small">
                                        <tbody>
                                            <tr>
                                                <td class="text-right" style="width:50%">Subtotal</td>
                                                <td class="text-right">€ {{ number_format($invoice->products->sum('total'), 2, '.', ',') }}</td>
                                            </tr>
                                            <tr style="display: none">
                                                <td class="text-right">Discount {{ $invoice->discount_type == 'percentage' ? '('.$invoice->discount."%".')' : '' }}</td>
                                                <td class="text-right">€ {{ $invoice->discount }}</td>
                                            </tr>
                                            @foreach($tax_rates as $tax_rate)
                                            <tr>
                                                <td class="text-right">{{ $tax_rate->name }}</td>
                                                <td class="text-right">€ {{ \App\Models\InvoiceProduct::where('invoice_id', $invoice->id)->where('tax_rate', $tax_rate->rate)->sum('tax_amount')  }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <th class="text-right">Total</th>
                                                <td class="text-right">€ {{ $invoice->total  }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-12 text-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-danger dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="{{ route('invoices.edit', $invoice->id) }}"> Edit</a>
                                      <a class="dropdown-item" href="{{ route('invoices.show', ['invoice' => $invoice->id, 'print' => 'yes']) }}"> Download PDF</a>
                                      <a class="dropdown-item"href="javascript:void(0)" data-toggle="modal" data-target="#modal-email-template" onclick="$('#invoice_id').val({{ $invoice->id }});gettemplate();"> Send as Email</a>
                                      <a class="dropdown-item" href="javascript:void(0)" data-toggle="modal" data-target="#modal-payment"> Add Payment</a>
                                      <a class="dropdown-item" href="javascript:void(0)" onclick="window.print()"> Print</a>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.invoice -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </section>
    @include('invoices.add-payment')
    @include('invoices.email')
@endsection
@push('scripts')
@if(Request::get('print'))
<script>
    $(document).ready(function () {
        window.print();
    });
</script>
@endif
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
