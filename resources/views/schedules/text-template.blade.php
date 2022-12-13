<div class="modal fade" id="modal-text-template" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-warning">
          <h4 class="modal-title">Text Template</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="text_template">Mobile Number</label>
                <select class="form-control" name="mobile_no" id="mobile_no">
                </select>
            </div>
            <div class="form-group">
                <label for="text_template">Template</label>
                <select class="form-control" name="text_template" id="text_template" onchange="changeTemplate(this);">
                    @foreach($text_template->contents as $content)
                        <option value="{{ $content->id }}" @if($loop->first) selected @endif>{{ $content->template_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="text_message" id="text_message" rows="6"></textarea>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="sendConfirmation('text')">Send</button>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
