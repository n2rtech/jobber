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

                <div class="table-responsive">
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <th style="border-top: none;" width="40%">Address</th>
                                <td class="text-right" style="border-top: none;">{{  getAddress($customer->id) }}</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="20%">Email</th>
                                <td class="text-right" style="border-top: none;">{{  $customer->email ?? 'Not Found' }}</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="20%">Phone</th>
                                <td class="text-right" style="border-top: none;">@isset($customer->phone) {{ $customer->phone }} @isset($customer->phone_name) ({{ $customer->phone_name }}) @endisset @else {{ __('Not Found') }}  @endisset</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="20%">Mobile 1</th>
                                <td class="text-right" style="border-top: none;">@isset($customer->mobile_1) {{ $customer->mobile_1 }} @isset($customer->mobile_1_name) ({{ $customer->mobile_1_name }}) @endisset @else {{ __('Not Found') }}  @endisset</td>
                            </tr>
                            <tr>
                                <th style="border-top: none;" width="20%">Mobile 2</th>
                                <td class="text-right" style="border-top: none;">@isset($customer->mobile_2) {{ $customer->mobile_2 }} @isset($customer->mobile_2_name) ({{ $customer->mobile_2_name }}) @endisset @else {{ __('Not Found') }}  @endisset</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
