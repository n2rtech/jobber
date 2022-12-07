<script>
    var question_row = @isset($external_form->questions) {{ count($external_form->questions) }}  @else 1 @endisset;

    function addQuestion() {
        html = '<div class="card" id="question-row' + question_row + '">';
        html+= '<div class="job-form-footer">';
        html+= '<div class="form-group">';
        html+= '<label for="question">Field Name</label>';
        html+= '<div class="input-group">';
        html+= '<input type="text" class="form-control" id="question' + question_row + '" name="question[' + question_row + '][question]" placeholder="Field Name">';
        html+= '<div class="input-group-append">';
        html+= '<button type="button" class="btn btn-danger" onclick="$(\'#question-row' + question_row + '\').remove();"><i class="fas fa-trash-alt"></i></button>';
        html+= '</div>';
        html+= '</div>';
        html+= '</div>';
        html+= '<div class="form-group mt-3">';
        html+= '<label for="question">Field Type</label><br />';
        html+= '<label class="radio-inline mr-3">';
        html+= '<div class="custom-control custom-radio">';
        html+= '<input class="custom-control-input" type="radio" id="checkbox' + question_row + '" name="question[' + question_row + '][type]" value="checkbox"  onclick="askOption(this.value, ' + question_row + ');">';
        html+= '<label for="checkbox' + question_row + '" class="custom-control-label">Checkbox</label>';
        html+= '</div>';
        html+= '</label>';
        html+= '<label class="radio-inline mr-3">';
        html+= '<div class="custom-control custom-radio">';
        html+= '<input class="custom-control-input" type="radio" id="dropdown' + question_row + '" name="question[' + question_row + '][type]" value="dropdown"  onclick="askOption(this.value, ' + question_row + ');">';
        html+= '<label for="dropdown' + question_row + '" class="custom-control-label">Dropdown</label>';
        html+= '</div>';
        html+= '</label>';
        html+= '<label class="radio-inline mr-3">';
        html+= '<div class="custom-control custom-radio">';
        html+= '<input class="custom-control-input" type="radio" id="radio' + question_row + '" name="question[' + question_row + '][type]" value="radio"  onclick="askOption(this.value, ' + question_row + ');">';
        html+= '<label for="radio' + question_row + '" class="custom-control-label">Radio</label>';
        html+= '</div>';
        html+= '</label>';
        html+= '<label class="radio-inline mr-3">';
        html+= '<div class="custom-control custom-radio">';
        html+= '<input class="custom-control-input" type="radio" id="text' + question_row + '" name="question[' + question_row + '][type]" value="text" onclick="askOption(this.value, ' + question_row + ');">';
        html+= '<label for="text' + question_row + '" class="custom-control-label">Text</label>';
        html+= '</div>';
        html+= '</label>';
        html+= '<label class="radio-inline mr-3">';
        html+= '<div class="custom-control custom-radio">';
        html+= '<input class="custom-control-input" type="radio" id="textarea' + question_row + '" name="question[' + question_row + '][type]" value="textarea" onclick="askOption(this.value, ' + question_row + ');">';
        html+= '<label for="textarea' + question_row + '" class="custom-control-label">Textarea</label>';
        html+= '</div>';
        html+= '</label>';
        html+= '</div>';
        html+= '<div id="job-form-option' + question_row + '">';
        html+= '</div>';
        html+= '<div class="form-group text-right" id="job-form-option-add' + question_row + '" style="display: none;">';
        html+= '<button type="button" class="btn btn-info" onclick="addOption(' + question_row + ');">';
        html+= '<i class="fas fa-plus"></i>';
        html+= '</button>';
        html+= '</div>';
        html+= '</div>';
        html+= '</div>';

        $('#questionBox').append(html);
        question_row++;
    }
</script>

<script>
    var option_row = 1;
    function askOption(value, row){
        $('.option-row'+row).remove();
        if(value == 'checkbox' || value == 'dropdown' || value == 'radio'){
            $('#job-form-option-add'+row).css('display', 'block');
            html = '<div class="form-group mt-3 option-row'+row+'" id="option' + row + '-row'+ option_row+'">';
            html += '<div class="input-group">';
            html += '<input type="text" class="form-control" id="question'+row+'-option'+ option_row+'" name="question['+row+'][option]['+ option_row+']" placeholder = "'+value[0].toUpperCase() + value.slice(1)+' option" > ';
            html += '<div class="input-group-append">';
            html += '<button type="button" class="btn btn-pink" onclick="$(\'#option' + row + '-row' + option_row + '\').remove();"><i class="fas fa-minus" ></i ></button > ';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#job-form-option'+row).append(html);
            option_row++;
        }else{
            $('#job-form-option-add'+row).css('display', 'none');
            return false;
        }
    }

    function addOption(row){
        var value = $('input[name="question[' + row + '][type]"]:checked').val();
        console.log(value);
            html = '<div class="form-group mt-3 option-row'+row+'" id="option'+row+'-row'+ option_row+'">';
            html += '<div class="input-group">';
            html += '<input type="text" class="form-control" id="question'+row+'-option'+ option_row+'" name="question['+row+'][option]['+ option_row+']" placeholder = "'+value[0].toUpperCase() + value.slice(1)+' option" > ';
            html += '<div class="input-group-append">';
            html += '<button type="button" class="btn btn-pink" onclick="$(\'#option' + row + '-row' + option_row + '\').remove();"><i class="fas fa-minus" ></i ></button > ';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('#job-form-option'+row).append(html);
            option_row++;
    }
</script>
