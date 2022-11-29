<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <p class="text-dark"> <strong><span class="customer_name"></span> - <span
                            class="job_title"></span></strong>
                </p>

                <div class="text-center">
                    <button type="button" class="btn btn-danger btn-sm" onclick="markUnscheduled();">
                        Unschedule Job
                    </button>
                    <button type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown">
                        Send Confirmation
                    </button>
                    <div class="dropdown-menu confirmation">
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal-email-template">Send Email</a>
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal-text-template">Send Text</a>
                    </div>
                </div>
                <div class="text-center">
                    <small id="confirmation_message"></small>
                </div>

                <hr>
                <span class="text-dark"> <strong>Booking Status</strong></span>
                    <div class="mt-2">
                        <select name="booking_status" id="booking_status" class="form-control" onchange="assignStatus(this.value);">
                            <option value="pending">Pending</option>
                            <option value="provisional">Provisional</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="completed">Completed</option>
                        </select>
                        <small id="mark_complete"></small>
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
                        @foreach ($users as $user)
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
                    <div class="col-sm-12">
                        <span class="text-dark"> <strong>Starts</strong></span>
                        <input id="starts" type="text" class="form-control">
                    </div>
                    <div class="col-sm-12">
                        <span class="text-dark"> <strong>Ends</strong></span>
                        <input id="ends" type="text" class="form-control">
                        <small id="change_timing_message"></small>
                    </div>
                    <div class="col-sm-12 mt-2 text-right">
                        <button class="btn btn-sm btn-success" onclick="changeTimings();">Update Timings</button>
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
