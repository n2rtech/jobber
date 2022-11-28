<div class="col-sm-12">
    <div class="card">
        <div class="card-header bg-dark">
            <h4 class="card-title">
                Standard Templates
            </h4>
        </div>
        <div class="card-body">
            @foreach ($standard_templates as $template)
            <div class="row">
                <div class="col-sm-7">
                    <b>{{ $template->subject }}</b>
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
                        <a href="{{ route('email-templates.edit', $template->id) }}" class="btn btn-tool edit-product">
                            <i class="fas fa-edit text-danger"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
