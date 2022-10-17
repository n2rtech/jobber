<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            @foreach ($job_titles as $job_title)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                {{ $job_title->title }}
                            </h4>
                            <div class="card-tools">
                                <a href="javascript:void(0)" class="btn btn-tool edit-title" data-toggle="modal"
                                    data-target="#modal-edit-title" data-title="{{ $job_title->title }}"
                                    data-id="{{ $job_title->id }}">
                                    <i class="fas fa-edit text-success"></i>
                                </a>
                                <button type="button" class="btn btn-tool"
                                    onclick="confirmDelete({{ $job_title->id }})">
                                    <i class="fas fa-trash-alt text-danger"></i>
                                </button>
                                <form id='delete-form{{ $job_title->id }}'
                                    action='{{ route('job-titles.destroy', $job_title->id) }}' method='POST'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="card-footer text-right">
            <a href="javascript:void(0)" class="btn btn-danger" data-toggle="modal" data-target="#modal-title">
                <i class="btn-icon fas fa-plus-circle"></i> {{ __('Add New') }}
            </a>
        </div>
    </div>
</div>
