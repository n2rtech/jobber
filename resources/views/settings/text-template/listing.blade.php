<div class="col-sm-12">
    <div class="card">
        <div class="card-body">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h4 class="card-title">
                            Jobs
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <b>Booking Confirmation</b>
                                <p>Notifies a customer that a job has been scheduled when sent.</p>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div
                                        class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                        <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                        <label class="custom-control-label" for="customSwitch3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="float-right">
                                    <a href="{{ route('text-templates.edit', 1) }}" class="btn btn-tool edit-product">
                                        <i class="fas fa-edit text-danger"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($standard_templates) > 0)
                <div class="col-sm-12">
                    <div class="card">
                        <div class="col-sm-12">
                            @include('settings.text-template.standard-listing')
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
