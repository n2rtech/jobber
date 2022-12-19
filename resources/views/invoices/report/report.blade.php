@extends('layouts.app')

@section('title', 'Invoice Report')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" rel="stylesheet" />
@endsection
@section('content')

    <div class="content-header col-md-9 mx-auto">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-12">
                    <h1 class="m-0 float-left">{{ __('Invoice Report') }}</h1>

                    <a class="btn btn-sm btn-dark float-right" href="{{ route('invoices.index') }}">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>

                    @isset($customer)
                        @if (count($invoices) > 0)
                        <a href="javascript:void(0)" id="generate" class="float-right btn btn-warning btn-sm mr-1">
                            <i class="btn-icon fas fa-download"></i> {{ __('Generate') }}
                        </a>
                        @endif
                    @endisset
                </div>
            </div>
        </div>
    </div>

    <section class="content col-md-9 mx-auto">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form id="reportForm" action="{{ route('invoices.generate-report') }}" method="POST">
                                @csrf
                                <input type="hidden" name="customer_id" id="customer_id">
                                <div class="form-row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name" class="label-small">{{ __('Report For') }}</label>
                                            <select class="form-control" id="name" name="name"></select>
                                            @error('customer_id')
                                                <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="invoice_from" class="label-small">{{ __('Invoice From') }}</label>
                                            <input type="date" name="invoice_from" id="invoice_from" class="form-control"
                                                value="{{ $filter_invoice_from }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="invoice_to" class="label-small">{{ __('Invoice To') }}</label>
                                            <input type="date" class="form-control" name="invoice_to" id="invoice_to"
                                                value="{{ $filter_invoice_to }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-dark btn-sm"
                                                form="reportForm">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>
    @isset($customer)

        <section class="content col-md-9 mx-auto">

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        @if (count($invoices) > 0)
                            <table id="dataTable" class="table table-bordered table-striped" style="font-size: 14px;">
                                <thead>
                                    <tr>
                                        <th>{{ __('Date') }}</th>
                                        <th>{{ __('Transactions') }}</th>
                                        <th>{{ __('Details') }}</th>
                                        <th>{{ __('Amount') }}</th>
                                        <th>{{ __('Payments') }}</th>
                                        <th>{{ __('Balance') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $balance = 0;
                                    @endphp
                                    @foreach ($invoices as $invoice)
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                                            <td>***Opening Balance***</td>
                                            <td></td>
                                            <th>€ {{ $balance }}</th>
                                            <td></td>
                                            <td>
                                                € {{ $balance }}
                                            </td>
                                        </tr>
                                        @if ($loop->first)
                                        @break
                                    @endif
                                @endforeach
                                @foreach ($invoices as $invoice)
                                    @php
                                        if ($balance == 0) {
                                            $balance = $invoice->total;
                                        } else {
                                            $balance = $balance + $invoice->total;
                                        }

                                    @endphp
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                                        <td>Invoice</td>
                                        <td>INV-{{ $invoice->id }} - due on
                                            {{ \Carbon\Carbon::parse($invoice->due_date)->format('Y-m-d') }}</td>
                                        <th>€ {{ $invoice->total }}</th>
                                        <td></td>
                                        <td>
                                            € {{ $balance }}
                                        </td>
                                    </tr>
                                    @foreach ($invoice->payments as $payment)
                                        @php
                                            $balance = $balance - $payment->amount;
                                        @endphp
                                        <tr>
                                            <td>{{ \Carbon\Carbon::parse($payment->date)->format('Y-m-d') }}</td>
                                            <td>Payment Received</td>
                                            <td>€ {{ $payment->amount }} for Payment of INV-{{ $invoice->id }}</td>
                                            <th></th>
                                            <td>€ {{ $payment->amount }}</td>
                                            <td>
                                                € {{ $balance }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center mt-4"> No Invoice Found</p>
                    @endif
                </div>
            </div>
        </div>

    </section>

@endisset
<section class="content col-md-9 mx-auto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-6">
                <!-- small box -->

                <div class="small-box bg-success">

                    <div class="inner">
                        <a class="text-white" href="javascript:void(0)">
                            <h3>€ {{ number_format($paid_amount, 2, '.', ',') }}</h3>

                            <p>Total Paid Amount</p>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-6">
                <!-- small box -->

                <div class="small-box bg-danger">

                    <div class="inner">
                        <a class="text-white" href="javascript:void(0)">
                            <h3>€ {{ number_format($due_amount, 2, '.', ',') }}</h3>

                            <p>Total Due Amount</p>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- Autocomplete Customer Field --}}
<script>
    $("#name").select2({
        theme: 'bootstrap4',
        ajax: {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('customers.autocomplete') }}",
            method: "POST",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term,
                    page: params.page
                };
            },
            processResults: function(data, params) {
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        placeholder: 'Search for a Customer',
        minimumInputLength: 3,
        templateResult: formatRepo,
        templateSelection: formatRepoSelection
    });

    function formatRepo(repo) {
        if (repo.loading) {
            return repo.text;
        }

        var $container = $(
            "<div class='select2-result-repository clearfix'>" +
            "<div class='select2-result-repository__title' style='font-size:14px'><i class='fa fa-user' style='font-size:13px'></i>  </div>" +
            "<div class='select2-result-repository__forks' style='font-size:13px'><i class='fa fa-house' style='font-size:12px'></i>  </div>" +
            "<div class='select2-result-repository__stargazers' style='font-size:13px'><i class='fa fa-phone' style='font-size:12px'></i>  </div>" +
            "<div class='select2-result-repository__watchers' style='font-size:13px'><i class='fa fa-envelope' style='font-size:12px'></i>  </div>" +
            "</div>" +
            "</div>" +
            "</div>"
        );

        $container.find(".select2-result-repository__title").append(repo.name);
        $container.find(".select2-result-repository__forks").append(repo.address);
        $container.find(".select2-result-repository__stargazers").append(repo.phone);
        $container.find(".select2-result-repository__watchers").append(repo.email);

        return $container;
    }

    function formatRepoSelection(repo) {
        $('#customer_id').val(repo.id);
        $('#billing_address').text(repo.address);
        $('#phone').text(repo.phone);
        return repo.name;
    }
</script>
@isset($customer)
    {{-- Set Default Customer --}}
    <script>
        $(document).ready(function() {
            $("#select2-name-container").text("{{ $customer->name }}");
            $("#customer_id").val("{{ $customer->id }}");
        });
    </script>
@endisset
<script>
    $('#generate').click(function(){
        $('#reportForm').attr('action', '{{ route('invoices.download-report') }}');
        $('#reportForm').submit();
    });

</script>
@endpush
