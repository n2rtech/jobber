<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="text-dark"> <strong><span class="customer_name"></span> - <span class="job_title"></span></strong>
                </p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="complete_job" value="" onchange="markJobComplete(this.value)">
                    <label class="form-check-label" for="complete_job">Completed</label>
                </div>
                <small id="mark_complete"></small>
                <hr>
                <span class="text-dark"> <strong>Details</strong></span>
                <p class="text-dark"> <span class="customer_name"></span> - Job # <span class="job_id"></span></p>
                <hr>
                <span class="text-dark"> <strong>Team</strong></span>
                <div class="mt-2">
                    <select name="team" id="team" class="form-control" onchange="assignTeam(this.value);">
                        <option value="">Choose Team Member</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <small id="assign_message"></small>
                </div>
                <hr>
                <span class="text-dark"> <strong>Location</strong></span>
                <p class="text-dark"> <span class="location"></span></p>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <span class="text-dark"> <strong>Starts</strong></span>
                        <p class="text-dark"> <span class="starts"></span></p>
                    </div>
                    <div class="col-sm-6 text-right">
                        <span class="text-dark"> <strong>Ends</strong></span>
                        <p class="text-dark"> <span class="ends"></span></p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" id="edit_job" class="btn btn-block btn-sm btn-outline-dark">Edit</a>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="#" id="show_job" class="btn btn-block btn-sm btn-dark">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
