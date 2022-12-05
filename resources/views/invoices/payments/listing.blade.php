<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-striped" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>{{ __('Date') }}</th>
                    <th>{{ __('Amount') }}</th>
                    <th>{{ __('Transaction Id') }}</th>
                    <th style="width: 5%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->payments as $payment)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($payment->date)->format('Y-m-d') }}</td>
                        <th>€ {{ $payment->amount }}</th>
                        <td>
                            {{ $payment->transaction_id }}
                        </td>
                        <td>
                            <a class="btn btn-danger" href="javascript:void(0)" onclick="confirmDelete({{ $payment->id }})"><i class="fas fa-trash"></i></a>
                                  <form id='delete-form{{ $payment->id }}'
                                    action='{{ route('payments.destroy', $payment->id) }}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Listing Box Starts Here -->
