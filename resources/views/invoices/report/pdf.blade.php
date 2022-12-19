<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">


    <style type="text/css">
        body {
            font-family: 'Roboto', sans-serif;
        }
        table.item tr:nth-child(even) {
            background-color: #f2f2f2;;
        }
    </style>
</head>

<body>

    <div class="invoice" style="max-width: 1000px;margin: 0 auto;">
        <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:100%;">

            <tbody>
                <tr>
                    <td colspan="3" style="text-align: right;"><img
                            src="https://www.daltontv.ie/wp-content/uploads/2020/05/daltontv.ie_-1-e1589636012649.png"
                            alt="logo"></td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:15px;font-weight: 500;text-align: right;line-height: 22px;padding-top: 5px;">
                        <b>Address:-</b>{{ $company->address_1 }}<br>
                        {{ $company->address_2 }} {{ $company->city }} {{ $company->state }} {{ $company->country }}
                        {{ $company->eir_code }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:15px;font-weight: 500;text-align: right;line-height: 22px;">
                        <b>Phone Number:-</b> @isset($company->landline)
                            {{ $company->landline }} |
                            @endisset @isset($company->mobile)
                            {{ $company->mobile }}
                        @endisset
                    </td>
                </tr>

            </tbody>

        </table>
        <table class="table" style="width:41%;padding-top: 30px;padding-bottom: 10px;float: right;">
            <tbody>
                <tr>
                    <td colspan="3"
                        style="font-size:26px;font-weight: 500;text-align: right;line-height: 22px;padding-top: 5px;padding-bottom: 10px;border-bottom: 1px solid #6a6969;">
                        <b>Statement of Accounts</b></td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:15px;font-weight: 500;text-align: right;line-height: 22px;border-bottom: 1px solid #6a6969;">
                        @isset($filter_invoice_from)
                            {{ $filter_invoice_from }} to {{ $filter_invoice_to }}
                        @else
                            All time
                        @endisset
                    </td>
                </tr>

            </tbody>

        </table>
        <table border="0" cellspacing="0" cellpadding="0" class="table" style="width:60%;float: left;">

            <tbody>
                <tr>
                    <td colspan="3" style="text-align: left;"><b>To</b></td>
                </tr>
                <tr>
                    <td colspan="3"
                        style="font-size:15px;font-weight: 500;text-align: left;line-height: 22px;padding-top: 5px;">
                        <b>Customer Name:-</b> {{ $customer->name }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:15px;font-weight: 500;text-align: left;line-height: 22px;">
                        <b>Address:-</b>{{ $customer->address_1 }}<br>
                        {{ $customer->address_2 }} {{ $customer->city }} {{ $customer->county }}
                        {{ $customer->country }} {{ $customer->eir_code }}</td>
                </tr>
                <tr>
                    <td colspan="3" style="font-size:15px;font-weight: 500;text-align: left;line-height: 22px;">
                        <b>Phone Number:-</b> @isset($customer->phone)
                            {{ $customer->phone }} |
                            @endisset @isset($customer->mobile_1)
                            {{ $customer->mobile_1 }}
                            @endisset @isset($customer->mobile_2)
                            | {{ $customer->mobile_2 }}
                        @endisset
                    </td>
                </tr>

            </tbody>

        </table>
        <table class="table" style="width:40%;">

            <tbody>
                <tr>
                    <td colspan="2" style="text-align: left;background-color: #f6f6f6;padding: 5px 10px;"><b>Account
                            Summary</b></td>
                </tr>
                <tr>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: left;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        Opening Balance</td>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: right;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        $ 0.00</td>
                </tr>
                <tr>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: left;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        Invoiced Amount</td>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: right;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        $ {{ $paid_amount }}</td>
                </tr>
                <tr>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: left;line-height: 22px;padding-top: 5px;padding: 5px 10px;border-bottom: 2px solid #6a6969;padding-right: 0px;">
                        Amount Paid</td>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: right;line-height: 22px;padding-top: 5px;padding: 5px 10px;border-bottom: 2px solid #6a6969;padding-left: 0px;">
                        $ 7,052.00</td>
                </tr>
                <tr>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: left;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        Balance Due</td>
                    <td
                        style="font-size:15px;font-weight: 400;text-align: right;line-height: 22px;padding-top: 5px;padding: 5px 10px;">
                        $ {{ $due_amount }}</td>
                </tr>

            </tbody>

        </table>


        <table class="table item table-dark table-striped" border="0" cellspacing="0" cellpadding="0"
            style="width: 100%;padding-top: 30px;">
            <thead style="background-color: #000;color: #fff;line-height: 36px;text-align: left;font-size: 15px;">
                <tr>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Date</th>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Transactions</th>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Details</th>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Amount</th>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Payments</th>
                    <th scope="col" style="font-weight: 400;padding: 5px 10px;">Balance</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $balance = 0;
                @endphp
                @foreach ($invoices as $invoice)
                    <tr>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">
                            {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">***Opening Balance***</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;"></td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $balance }}</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;"></td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $balance }}</td>
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
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">
                        {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d') }}</td>
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">
                        Invoice</td>
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">
                        INV-{{ $invoice->id }} - due on
                        {{ \Carbon\Carbon::parse($invoice->due_date)->format('Y-m-d') }}</td>
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€
                        {{ $invoice->total }}</td>
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;"></td>
                    <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€
                        {{ $balance }}</td>
                </tr>
                @foreach ($invoice->payments as $payment)
                    @php
                        $balance = $balance - $payment->amount;
                    @endphp
                    <tr>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">
                            {{ \Carbon\Carbon::parse($payment->date)->format('Y-m-d') }}</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">Payment Received</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $payment->amount }}
                            for Payment of INV-{{ $invoice->id }}</td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;"></td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $payment->amount }}
                        </td>
                        <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $balance }}</td>
                    </tr>
                @endforeach
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;"><b>Balance Due</b></td>
                <td style="font-weight: 400;padding: 10px 10px;font-size: 14px;">€ {{ $due_amount }}</td>
            </tr>
        </tbody>

    </table>






</div>

</body>

</html>
