@extends('layouts.app')
@section('title', 'Estimate')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <style>
        @page { size: auto;  margin: 0mm; }
    </style>
    @endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Estimate #{{ $estimate->id }}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="invoice p-3 mb-3">
                        <div class="row">
                            <div class="col-12">
                                <h4>
                                    <img src="{{ asset('dist/img/logo-dark.png') }}" alt="DaltonTV">
                                    <small class="float-right"><strong>Estimate</strong></small>
                                </h4>
                            </div>
                        </div>
                        <div class="row invoice-info mt-4">

                            <div class="col-sm-5 invoice-col">
                                <p class="mt-2"><strong>{{ $company->company }}</strong></p>
                                <address class="text-muted">
                                    Address: {{ $company->address_1 }}<br />
                                    {{ $company->address_2 }}<br>
                                    {{ $company->city }}, {{ $company->state }}<br>
                                    {{ $company->country }}, {{ $company->zipcode }}<br>
                                    Mobile: {{ $company->mobile }}<br>
                                    Email: {{ $company->email }}
                                </address>
                            </div>

                            <div class="col-sm-4 invoice-col">
                                <p class="mt-2"><strong>Billed To</strong></p>
                                <address class="text-muted">
                                    {{ $estimate->customer->name }}<br />
                                    Address: {{ $estimate->customer->address_1 }} @isset($estimate->customer->address_2)
                                        , {{ $estimate->customer->address_2 }}
                                    @endisset <br />
                                    @isset($estimate->customer->city)
                                        {{ $estimate->customer->city }}
                                        @endisset @isset($estimate->customer->state)
                                        , {{ $estimate->customer->state }}
                                    @endisset
                                    <br>
                                    {{ $estimate->customer->country }}, {{ $estimate->customer->eir_code }}<br>
                                    Phone: @isset($estimate->customer->phone)
                                        {{ $estimate->customer->phone }},
                                        @endisset @isset($estimate->customer->mobile_1)
                                        {{ $estimate->customer->mobile_1 }}
                                        @endisset @isset($estimate->customer->mobile_2)
                                        , {{ $estimate->customer->mobile_2 }}
                                    @endisset
                                    <br>
                                    Email: {{ $estimate->customer->email ?? '-' }}
                                </address>
                            </div>

                            <div class="col-sm-3 invoice-col">
                                <table class="table table-sm">
                                    <tbody>
                                        <tr>
                                            <td style="border-top: none;"><b>Estimate Number</b></td>
                                            <td style="border-top: none;" class="text-right"># {{ $estimate->id }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"><b>Estimate Date</b></td>
                                            <td style="border-top: none;" class="text-right">
                                                {{ \Carbon\Carbon::parse($estimate->estimate_date)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"><b>End Date</b></td>
                                            <td style="border-top: none;" class="text-right">
                                                {{ \Carbon\Carbon::parse($estimate->due_date)->format('M d, Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td style="border-top: none;"></td>
                                            <td style="border-top: none;" class="text-right">
                                                @if ($estimate->status == 'created')
                                                    <button class="mt-3 btn btn-outline-info">{{ ucfirst($estimate->status) }}</button>
                                                @endif
                                                @if ($estimate->status == 'sent')
                                                    <button class="mt-3 btn btn-outline-success">{{ ucfirst($estimate->status) }}</button>
                                                @endif
                                                @if ($estimate->status == 'expired')
                                                    <button class="mt-3 btn btn-outline-danger">{{ ucfirst($estimate->status) }}</button>
                                                @endif
                                                @if ($estimate->status == 'cancelled')
                                                    <button class="mt-3 btn btn-outline-warning">{{ ucfirst($estimate->status) }}</button>
                                                @endif
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-12 table-responsive">
                                <table class="table table-striped">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th width="35%">Product / Service</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit Price</th>
                                            <th class="text-right">Total(€)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($estimate->products as $product)
                                        <tr>
                                            <td>{{ $product->product->name }}</td>
                                            <td class="text-right">{{ $product->quantity }}</td>
                                            <td class="text-right">€ {{ $product->unit_price }}</td>
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
                            <div class="col-6">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <tbody>
                                            <tr>
                                                <td class="text-right" style="width:50%">Subtotal</td>
                                                <td class="text-right">€ {{ $estimate->subtotal  }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">Discount {{ $estimate->discount_type == 'percentage' ? '('.$estimate->discount."%".')' : '' }}</td>
                                                <td class="text-right">€ {{ $estimate->discount }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right">Tax</td>
                                                <td class="text-right">€ {{ $estimate->products->sum('tax_amount')  }}</td>
                                            </tr>
                                            <tr>
                                                <th class="text-right">Total</th>
                                                <td class="text-right">€ {{ $estimate->total  }}</td>
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
                                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                      <a class="dropdown-item" href="{{ route('estimates.edit', $estimate->id) }}"> Edit</a>
                                      <a class="dropdown-item" href="javascript:void(0)" onclick="window.print()"> Download PDF</a>
                                      <a class="dropdown-item" href="javascript:void(0)"> Send as Email</a>
                                      <a class="dropdown-item" href="javascript:void(0)"> Add Payment</a>
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
@endsection
@push('scripts')
@if(Request::get('print'))
<script>
    $(document).ready(function () {
        window.print();
    });
</script>
@endif
@endpush
