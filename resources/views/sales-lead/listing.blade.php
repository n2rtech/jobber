<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>{{ __('Lead No.') }}</th>
                    <th>{{ __('Date') }}</th>
                    <th>{{ __('Customer') }}</th>
                    <th width="38%">{{ __('Address') }}</th>
                    <th>{{ __('Phone') }}</th>
                    {{-- <th>{{ __('Status') }}</th> --}}
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td>#{{ $lead->id }}</td>
                        <td><small>{{ \Carbon\Carbon::parse($lead->created_at)->format('Y-m-d') }}</small></td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ getAddress($lead->id) }}</td>
                        <td>
                            @isset($lead->phone) <i class="fa fa-square-phone"></i> {{ $lead->phone }} <br/> @endisset
                            @isset($lead->mobile_1) <i class="fa fa-mobile-alt"></i> {{ $lead->mobile_1 }} <br/> @endisset
                            @isset($lead->mobile_2) <i class="fa fa-mobile-alt"></i> {{ $lead->mobile_2 }}</td> @endisset
                        </td>
                        {{-- <td>
                            @if ($lead->status == 'pending')
                                <span class="badge bg-danger">{{ __('Pending') }}</span>
                            @else
                                <span class="badge bg-success">{{ __('Converted') }}</span>
                            @endif
                        </td> --}}
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{ route('sales-leads.edit', $lead) }}"><i
                                            class="fas fa-edit"></i> {{ __('Edit') }}</a>
                                    <a class="dropdown-item" href="{{ route('sales-leads.show', $lead) }}"><i
                                            class="fas fa-eye"></i> {{ __('View') }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Listing Box Starts Here -->
