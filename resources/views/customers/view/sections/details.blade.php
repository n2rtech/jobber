<div class="card">
    <div class="card-header bg-dark" style="padding: 0px 14px;">
        <h4 class="card-title mt-3 hidden-xs"><strong>{{ \Carbon\Carbon::today()->format('d, M Y') }} </strong>| <span id="clock"></span></h4>
        <div class="card-tools text-right">
            <small>{{ __('Added On') }}</small><br/>
            <strong>{{ \Carbon\Carbon::parse($customer->created_at)->format('g:i A') }} | {{ \Carbon\Carbon::parse($customer->created_at)->format('d, M Y') }}</strong>
        </div>
    </div>
    <div class="card-body min252">
        <div class="row">
            <div class="col-sm-12">

                <div class="table-responsive sm-customers">
                    <table class="table table-sm" style="font-size: 14px;">
                        <tbody>
                            <tr>
                                <th style="border-top: none;" width="50%">Address 1</th>
                                <th class="text-left" style="border-top: none;">Phone</th>
                            </tr>
                            <tr>
                                <td style="border-top: none;" width="50%">{{ $customer->address_1 }}</td>
                                <td class="text-left" style="border-top: none;">
                                    @isset($customer->phone) {{ $customer->phone }} @isset($customer->phone_name) ({{ $customer->phone_name }}) @endisset @else {{ __('Not Found') }}  @endisset
                                </td>
                            </tr>
                            <tr>
                                <th  style="border-top: none;" width="50%">Address 2</th>
                                <th class="text-left" style="border-top: none;">Mobile_1</th>
                            </tr>
                            <tr>
                                <td style="border-top: none;" width="50%">{{ $customer->address_2 }}</td>
                                <td class="text-left" style="border-top: none;">@isset($customer->mobile_1) {{ $customer->mobile_1 }} @isset($customer->mobile_1_name) ({{ $customer->mobile_1_name }}) @endisset @else {{ __('Not Found') }}  @endisset</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="50%">City</th>
                                <th class="text-left" style="border-top: none;">Mobile 2</th>
                            </tr>
                            <tr>
                                <td style="border-top: none;" width="50%">{{ $customer->city ?? 'Not Found' }}</td>
                                <td class="text-left" style="border-top: none;">@isset($customer->mobile_2) {{ $customer->mobile_2 }} @isset($customer->mobile_2_name) ({{ $customer->mobile_2_name }}) @endisset @else {{ __('Not Found') }}  @endisset</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="50%">Eircode</th>
                                <th class="text-left" style="border-top: none;">Email</th>
                            </tr>
                            <tr>
                                <td style="border-top: none;" width="50%">
                                    @isset($customer->eir_code) <a target="_blank" href="http://maps.google.com/?q={{ $customer->eir_code }}">{{ $customer->eir_code }}</a> @endisset
                                </td>
                                <td class="text-left" style="border-top: none;">{{ $customer->email ?? 'Not Found' }}</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="50%">County</th>
                            </tr>
                            <tr>
                                <td style="border-top: none;" width="50%">{{ $customer->county ?? 'Not Found' }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
