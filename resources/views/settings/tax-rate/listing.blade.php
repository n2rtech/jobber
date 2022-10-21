<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tax Name</th>
                        <th>Rate (%)</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxes as $tax)
                        <tr>
                            <td>{{ $tax->id }}</td>
                            <td>{{ $tax->name }}</td>
                            <td>{{ $tax->rate }} %</td>
                            <td class="text-right">
                                <div class="card-tools">
                                    <a href="javascript:void(0)" class="btn btn-tool edit-tax" data-toggle="modal"
                                        data-target="#modal-edit-tax-rate" data-name="{{ $tax->name }}"
                                        data-id="{{ $tax->id }}" data-rate="{{ $tax->rate }}">
                                        <i class="fas fa-edit text-success"></i>
                                    </a>
                                    <button type="button" class="btn btn-tool"
                                        onclick="confirmDelete({{ $tax->id }})">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </button>
                                    <form id='delete-form{{ $tax->id }}'
                                        action='{{ route('tax-rates.destroy', $tax->id) }}' method='POST'>
                                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                        <input type='hidden' name='_method' value='DELETE'>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
