<div class="modal fade" id="modal-title">
    <div class="modal-dialog modal-lg modal-title">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Job Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="titleForm" action="{{ route('job-titles.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Job Title</label>
                        <textarea class="form-control" id="title" name="title" placeholder="Enter Job title here" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="titleForm"><i class="btn-icon fas fa-save"></i> {{ __('Save') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-edit-title">
    <div class="modal-dialog modal-lg modal-edit-title">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Job Title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="updatetitleForm" action="{{ route('job-titles.store') }}">
                    @csrf
                    <input type="hidden" value="" name="id" id="title_id">
                    <div class="form-group">
                        <label for="edit_title">Job Title</label>
                        <textarea class="form-control" id="edit_title" name="title" placeholder="Enter Job title here" rows="3" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success" form="updatetitleForm"><i class="btn-icon fas fa-save"></i> {{ __('Update') }}</button>
            </div>
        </div>
    </div>
</div>
