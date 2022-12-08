<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    function insertVariable() {
        var row     = $('#fieldrow').val();
        var field = $('#insert_into').val();
        var variable = $('#variable').val();

        if (field == 'message') {
            var message = $('#message'+row).val();
            $('#message'+row).val(message + ' ' + variable);
        }

        if (field == 'subject') {
            var subject = $('#subject'+row).val();
            $('#subject'+row).val(subject + ' ' + variable);
        }

        $("#modal-variable .close").click();
    }

    function deleteTemplate(row){
        $.confirm({
                    title: 'Confirm!',
                    content: 'Are you sure! You want to remove this Template.',
                    buttons: {
                        confirm: function() {
                            $('#template-card'+row).remove();
                        },
                        cancel: function() {

                        },
                    }
                });
    }
    var template_row = {{ count($template->contents) }};
    function addTemplate(){
        html = '<div class="card" id="template-card'+template_row+'">';
        html += '<div class="card-body">';
        html += '<div class="form-group">';
        html += '<label for="template_name'+template_row+'">Template Name</label>';
        html += '<input type="text" class="form-control" id="template_name'+template_row+'" name="template['+template_row+'][template_name]" placeholder="Enter Template Name here" required>';
        html += '</div>';
        html += '<div class="form-group">';
        html += '<label for="message'+template_row+'">Message</label>';
        html += '<textarea class="form-control" id="message'+template_row+'" name="template['+template_row+'][message]" placeholder="Enter Message here" rows="6" required></textarea>';
        html += '</div>';
        html += '<div class="form-group">';
        html += '<button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#modal-variable"  onclick="setfieldrowvalue('+template_row+');">INSERT VARIABLE</button>';
        html += '<button type="button" class="btn btn-sm btn-outline-danger" onclick="deleteTemplate('+template_row+')"><i class="fas fa-trash"></i></button>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        $('#template-row').append(html);

        template_row++;
    }

    function setfieldrowvalue(val){
        $('#fieldrow').val(val);
    }

    // function setDefaultTemplate(id) {

    //     var formData = {
    //         id: id,
    //     };

    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     $.ajax({
    //         type: 'POST',
    //         url: '{{ route('email-templates.default') }}',
    //         data: formData,
    //         dataType: 'json',
    //         success: function(data) {
    //             $.confirm({
    //                 title: 'Confirm!',
    //                 content: 'Are you sure! You want to set Default Template.',
    //                 buttons: {
    //                     confirm: function() {
    //                         $('#message').val(data.message);
    //                         $('#subject').val(data.subject);
    //                     },
    //                     cancel: function() {

    //                     },
    //                 }
    //             });
    //         },
    //         error: function(data) {
    //             console.log(data);
    //         }
    //     });
    // }
</script>
{{-- <script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script>
tinymce.init({
  selector: 'textarea#message',
  height: 600,
  menubar: false,
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});
</script> --}}
