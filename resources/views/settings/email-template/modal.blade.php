<div class="modal fade" id="modal-variable" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h4 class="modal-title">Insert Variable</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="insert_into">Insert Into</label>
                    <select class="custom-select" id="insert_into">
                        <option value="message" selected>Message Field</option>
                        <option value="subject">Subject Field</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="variable">Variable</label>
                    <select class="custom-select" id="variable">
                        <option value="">Select Variable</option>

                        <optgroup label="Customer"></optgroup>
                        <option value="@{{CUSTOMER_NAME}}">@{{CUSTOMER_NAME}}</option>
                        <option value="@{{CUSTOMER_EMAIL}}">@{{CUSTOMER_EMAIL}}</option>
                        <option value="@{{CUSTOMER_PHONE}}">@{{CUSTOMER_PHONE}}</option>
                        <option value="@{{CUSTOMER_MOBILE_1}}">@{{CUSTOMER_MOBILE_1}}</option>
                        <option value="@{{CUSTOMER_MOBILE_2}}">@{{CUSTOMER_MOBILE_2}}</option>
                        <option value="@{{CUSTOMER_ADDRESS}}">@{{CUSTOMER_ADDRESS}}</option>

                        <optgroup label="Job"></optgroup>
                        <option value="@{{JOB_TITLE}}">@{{JOB_TITLE}}</option>
                        <option value="@{{JOB_DATE_AND_TIME}}">@{{JOB_DATE_AND_TIME}}</option>
                        <option value="@{{JOB_LOCATION}}">@{{JOB_LOCATION}}</option>


                        <optgroup label="Invoice"></optgroup>
                        <option value="@{{INVOICE_NO}}">@{{INVOICE_NO}}</option>
                        <option value="@{{INVOICE_DATE}}">@{{INVOICE_DATE}}</option>
                        <option value="@{{DUE_DATE}}">@{{DUE_DATE}}</option>
                        <option value="@{{INVOICE_BILLING_ADDRESS}}">@{{INVOICE_BILLING_ADDRESS}}</option>
                        <option value="@{{INVOICE_SHIPPING_ADDRESS}}">@{{INVOICE_SHIPPING_ADDRESS}}</option>

                        <optgroup label="Estimate"></optgroup>
                        <option value="@{{ESTIMATE_NO}}">@{{ESTIMATE_NO}}</option>
                        <option value="@{{ESTIMATE_DATE}}">@{{ESTIMATE_DATE}}</option>
                        <option value="@{{EXPIRY_DATE}}">@{{EXPIRY_DATE}}</option>
                        <option value="@{{ESTIMATE_BILLING_ADDRESS}}">@{{ESTIMATE_BILLING_ADDRESS}}</option>
                        <option value="@{{ESTIMATE_SHIPPING_ADDRESS}}">@{{ESTIMATE_SHIPPING_ADDRESS}}</option>

                        <optgroup label="Company"></optgroup>
                        <option value="@{{COMPANY_NAME}}">@{{COMPANY_NAME}}</option>
                        <option value="@{{COMPANY_EMAIL}}">@{{COMPANY_EMAIL}}</option>
                        <option value="@{{COMPANY_MOBILE}}">@{{COMPANY_MOBILE}}</option>
                        <option value="@{{COMPANY_LANDLINE}}">@{{COMPANY_LANDLINE}}</option>
                        <option value="@{{COMPANY_ADDRESS}}">@{{COMPANY_ADDRESS}}</option>
                        <option value="@{{COMPANY_VAT}}">@{{COMPANY_VAT}}</option>
                        <option value="@{{COMPANY_WEBSITE}}">@{{COMPANY_WEBSITE}}</option>
                        <option value="@{{COMPANY_LOGO}}">@{{COMPANY_LOGO}}</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="insertVariable();">Insert</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
