<!-- Listing Box Starts Here -->
<div class="card">
    <div class="card-body">
        @include('sales-lead.filter')
        <table id="leadDataTable" class="table table-bordered table-striped" style="font-size: 14px;">
            <thead>
                <tr>
                    <th>{{ __('Customer') }}</th>
                    <th>{{ __('Address') }}</th>
                    <th>{{ __('Phone') }}</th>
                    <th>{{ __('Mobile 1') }}</th>
                    <th>{{ __('Mobile 2') }}</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $lead)
                    <tr>
                        <td><a href="{{ route('customers.show', $lead->id) }}">{{ $lead->name }}</a></td>
                        <td>{{ getAddress($lead->id) }}</td>
                        <td>
                            {{ $lead->phone }}
                        <td>
                           {{ $lead->mobile_1 }}
                        </td>
                        <td>
                           {{ $lead->mobile_2 }}
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-vertical"></i>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                  <a class="dropdown-item" href="{{ route('sales-leads.edit', $lead->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                  <a class="dropdown-item" href="{{ route('customers.show', $lead->id) }}"><i class="fas fa-eye"></i> View</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-2">
            {{$leads->appends(request()->query())->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>

<!-- Listing Box Starts Here -->
