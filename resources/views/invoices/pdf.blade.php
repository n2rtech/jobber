<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Invoice-{{ $invoice->id }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">
</head>

<body style="font-family: 'Source Sans Pro', sans-serif;color: #212529">
    <table cellpadding="0" cellspacing="0" width="100%"
        style="max-width: 800px;margin: 0 auto;margin-top: 30px;margin-bottom: 20px">
        <tr>
            <td width="80%">
                <img src="http://daltontvcrm.n2rtech.com/dist/img/logo-dark.png">
            </td>
            <td width="20%" style="text-align: right;font-size: 24px;font-weight: bold;">Invoice</td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px;margin: 0 auto">
        <tr>
            <td width="33%">
                <p style="margin-bottom: 5px;font-size: 15px"><b>Billed To</b></p>
                <p style="margin-top: 0px;font-size: 14px;color:#6c757d;line-height: 20px">
                    @if ($invoice->same_as_billing_address)
                        Address:{{ $invoice->customer->address_1 }} @isset($invoice->customer->address_2)
                            , {{ $invoice->customer->address_2 }}
                        @endisset
                        <br>
                        @isset($invoice->customer->city)
                            {{ $invoice->customer->city }}
                            @endisset @isset($invoice->customer->state)
                            , {{ $invoice->customer->state }}
                        @endisset
                        <br>
                        {{ $invoice->customer->country }}, {{ $invoice->customer->eir_code }}<br>
                    @else
                        Address:{{ $invoice->shipping_address_1 }} @isset($invoice->shipping_address_2)
                            , {{ $invoice->shipping_address_2 }}
                        @endisset
                        <br>
                        @isset($invoice->shipping_city)
                            {{ $invoice->shipping_city }}
                            @endisset @isset($invoice->shipping_state)
                            , {{ $invoice->shipping_state }}
                        @endisset
                        <br>
                        {{ $invoice->shipping_country }}, {{ $invoice->shipping_eir_code }}<br>
                    @endif
                    Phone:@isset($invoice->customer->phone)
                        {{ $invoice->customer->phone }},
                        @endisset @isset($invoice->customer->mobile_1)
                        {{ $invoice->customer->mobile_1 }}
                        @endisset @isset($invoice->customer->mobile_2)
                        , {{ $invoice->customer->mobile_2 }}
                    @endisset
                    <br>
                    Email: {{ $invoice->customer->email ?? '-' }}
                </p>
            </td>
            <td width="2%">&nbsp;</td>
            <td width="33%">
                <p style="margin-bottom: 0px;font-size: 15px;margin-top: 0"><b>{{ $company->company }}</b></p>
                <p style="margin-top: 0px;font-size: 14px;color:#6c757d;line-height: 20px;">
                    &nbsp; <br>
                    Address: {{ $company->address_1 }}
                    {{ $company->address_2 }}<br>
                    {{ $company->city }}, {{ $company->state }}<br>
                    {{ $company->country }}, {{ $company->zipcode }}<br>
                    Mobile: {{ $company->mobile }}<br>
                    Email: {{ $company->email }}
                </p>
            </td>
            <td width="2%">&nbsp;</td>
            <td width="30%">
                <table width="100%" style="margin-top: -30px">
                    <tr>
                        <td style="font-size: 14px"><b>invoice No.</b></td>
                        <td style="font-size: 14px;text-align: right"># {{ $invoice->id }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px"><b>invoice Date</b></td>
                        <td style="font-size: 14px;text-align: right">
                            {{ \Carbon\Carbon::parse($invoice->invoice_date)->format('M d, Y') }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px"><b>End Date</b></td>
                        <td style="font-size: 14px;text-align: right">
                            {{ \Carbon\Carbon::parse($invoice->due_date)->format('M d, Y') }}</td>
                    </tr>
                    <tr>
                        <td style="font-size: 14px">&nbsp;</td>
                        <td style="font-size: 14px;text-align: right">
                            @if ($invoice->status == 'partial')
                                <button type="button"
                                    style="background: #138496;border: 1px solid #138496;color: #fff;box-shadow: none;outline: none;padding: 6px 12px;border-radius: 4px;margin-top: 20px;">{{ ucfirst($invoice->status) }}</button>
                            @endif
                            @if ($invoice->status == 'paid')
                                <button type="button"
                                    style="background: #218838;border: 1px solid #218838;color: #fff;box-shadow: none;outline: none;padding: 6px 12px;border-radius: 4px;margin-top: 20px;">{{ ucfirst($invoice->status) }}</button>
                            @endif
                            @if ($invoice->status == 'unpaid')
                                <button type="button"
                                    style="background: #dc3545;border: 1px solid #dc3545;color: #fff;box-shadow: none;outline: none;padding: 6px 12px;border-radius: 4px;margin-top: 20px;">{{ ucfirst($invoice->status) }}</button>
                            @endif
                            @if ($invoice->status == 'cancelled')
                                <button type="button"
                                    style="background: #FFC107;border: 1px solid #FFC107;color: black;box-shadow: none;outline: none;padding: 6px 12px;border-radius: 4px;margin-top: 20px;">{{ ucfirst($invoice->status) }}</button>
                            @endif

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table cellpadding="0" cellspacing="0" width="100%" style="max-width: 800px;margin: 0 auto;margin-top: 15px">
        <thead>
            <tr>
                <th
                    style="background-color: #343a40 !important;font-size: 15px;color: #fff;padding: 10px;text-align: left">
                    Product / Service</th>
                <th style="background: #343a40;font-size: 15px;color: #fff;padding: 10px;text-align: left">Quantity</th>
                <th style="background: #343a40;font-size: 15px;color: #fff;padding: 10px;text-align: center">Unit Price
                </th>
                <th style="background: #343a40;font-size: 15px;color: #fff;padding: 10px;text-align: right">Total(€)
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice->products as $product)
                <tr style="background: rgba(0,0,0,.05);">
                    <td style="font-size: 14px;padding: 10px;text-align: left">{{ $product->product->name }}</td>
                    <td style="font-size: 14px;padding: 10px;text-align: left">{{ $product->quantity }}</td>
                    <td style="font-size: 14px;padding: 10px;text-align: center">€ {{ $product->unit_price }} </td>
                    <td style="font-size: 14px;padding: 10px;text-align: right">€ {{ $product->total }} </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <table cellpadding="0" cellspacing="0" width="100%"
        style="max-width: 800px;margin: 0 auto;margin-top: 15px;margin-bottom: 30px">
        <tr>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                Subtotal</td>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-right: 1px solid #ddd;border-top: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                € {{ $invoice->subtotal }}</td>
        </tr>
        <tr>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                Discount {{ $invoice->discount_type == 'percentage' ? '(' . $invoice->discount . '%' . ')' : '' }}</td>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                € {{ $invoice->discount }}</td>
        </tr>
        <tr>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                Tax</td>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                € {{ $invoice->products->sum('tax_amount') }}</td>
        </tr>
        <tr>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                <b>Total</b>
            </td>
            <td
                style="font-size: 14px;border-left: 1px solid #ddd;border-right: 1px solid #ddd;border-bottom: 1px solid #ddd;padding: 10px;text-align: right">
                <b>€ {{ $invoice->total }}</b>
            </td>
        </tr>
    </table>
</body>

</html>
