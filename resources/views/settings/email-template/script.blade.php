<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script>
    function insertVariable() {
        var field        = $('#insert_into').val();
        var variable     = $('#variable').val();

        if(field == 'message'){
            var message  =  $('#message').val();
            $('#message').val(message + ' ' + variable);
        }

        if(field == 'subject'){
            var subject  =  $('#subject').val();
            $('#subject').val(subject + ' ' + variable);
        }
    }

    function setDefaultTemplate(){
        var subject = '{{ $template->default_subject }}';
        var message = '{{ $template->default_message }}';
        $.confirm({
            title: 'Confirm!',
            content: 'Are you sure! You want to set Default Template.',
            buttons: {
                confirm: function () {
                    $('#message').val(message);
                    $('#subject').val(subject);
                },
                cancel: function () {

                },
            }
        });


    }
</script>
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
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
</script>
