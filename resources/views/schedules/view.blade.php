<div class="modal fade jobviewPop" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="main-title"> <strong><span class="customer_name"></span> - <span
                            class="job_title"></span></strong>
                </h4>

                <div class="text-center scButtons">
                    <button type="button" onclick="markUnscheduled();">
                        Unschedule Job
                    </button>
                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">
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
                <div class="job-details">
                    <h5><strong>Job Details</strong></h5>
                    <p class="text-dark"> <span class="customer_name"></span> - Job # <span class="job_id"></span></p>
                </div>
                <div class="bookLocation">
                    <h5><strong>Location</strong></h5>
                    <p class="text-dark"> <span class="location"></span></p>
                </div>
                <div class="bookingStatus">
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <div class="form-group">
                                <label class="control-label">Booking Status</label>
                                <select name="booking_status" id="booking_status" class="form-control" onchange="assignStatus(this.value);">
                                    <option value="pending">Pending</option>
                                    <option value="provisional">Provisional</option>
                                    <option value="confirmed">Confirmed</option>
                                    <option value="completed">Completed</option>
                                </select>
                                <small id="mark_complete"></small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6">
                            <div class="form-group">
                                <label class="control-label">Team</label>
                                <select name="team" id="team" class="form-control" onchange="assignTeam(this.value);">
                                    <option value="">Choose Team Member</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <small id="assign_message"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bookingTime">
                    <h5><strong>Edit job booking time and date</strong></h5>
                    <div class="row">
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label class="control-label">Start Date</label>
                                <input id="starts" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label class="control-label">End Date</label>
                                <input id="ends" class="form-control" readonly>
                                <small id="change_timing_message"></small>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label class="control-label">Start Time</label>
                                <input id="startTime" type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="form-group">
                                <label class="control-label">End Time</label>
                                <input id="EndTime" type="time" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2 mb-2">
                            <button class="btn btn-block btn-success" onclick="changeTimings();">Update Timings</button>
                        </div>
                    </div>
                </div>
                <div class="text-center vcButtons">
                    <a href="#" id="show_job" class="btn btn-dark">View Job</a>
                    <a href="#" id="edit_job" class="btn btn-outline-dark">Edit Job</a>
                    <a href="#" id="show_customer" class="btn btn-outline-dark">View Customer</a>
                </div>
            </div>
        </div>
    </div>
</div>
