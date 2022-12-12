<script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script> --}}
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script>
    jQuery('#starts').datepicker();
    jQuery('#mobile_starts').datepicker();
</script>
<script>
tinymce.init({
  selector: 'textarea#email_message',
  height: 500,
  menubar: false,
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:roboto; font-size:16px }'
});
</script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../dist/js/demo.js"></script> --}}
<!-- Page specific script -->
<script>
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    $(function() {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).data('title')), // use the element's text as the event title
                    customer: $.trim($(this).attr(
                    "data-customer")), // use the element's text as the event customer
                    jobid: $.trim($(this).attr(
                    "data-jobid")), // use the element's text as the event jobid
                    location: $.trim($(this).attr(
                    "data-jobid")), // use the element's text as the event location
                }


                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function(eventEl) {

                return {
                    title: $(eventEl).data('title'),
                    backgroundColor: '#000000',
                    borderColor: 'rgb(255 0 0)',
                    textColor: 'rgb(255 255 255)',
                    customer: $(eventEl).data('customer'),
                    jobid: $(eventEl).data('jobid'),
                    jobstatus: $(eventEl).data('jobstatus'),
                    location: $(eventEl).data('location'),
                    team: $(eventEl).data('team'),
                    teamcolor: $(eventEl).data('teamcolor'),
                    teamname: $(eventEl).data('teamname'),
                    city: $(eventEl).data('city'),
                    href: $(eventEl).data('href'),
                    show: $(eventEl).data('show'),
                    viewcustomer: $(eventEl).data('viewcustomer'),
                    timePeriod: '',
                    allDay: false,
                };
            }
        });

        var iv = localStorage.getItem("fcDefaultView") || 'timeGridWeek'
        var id = localStorage.getItem("fcDefaultDate") || new Date

        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: iv,
            initialDate: id,
            datesSet: function (dateInfo) {
                localStorage.setItem("fcDefaultView", dateInfo.view.type);
                localStorage.setItem("fcDefaultDate", dateInfo.view.currentStart.toISOString());
            },
            themeSystem: 'bootstrap',
            slotMinTime: '{{ $setting["timing_starts"] }}',
            dayCount: 7,
            slotMaxTime: '{{ $setting["timing_ends"] }}',
            expandRows: true,
            hiddenDays:  '{{ json_encode($hidden_days) }}',
            firstDay: 1,
            // Scheduled Job Events
            events: [
                @foreach ($scheduled_jobs as $job)
                    {
                        id: '{{ $job->id }}',
                        title: '{{ $job->jobTitle->title }}',
                        start: '{{ $job->start }}',
                        end: '{{ $job->end }}',
                        city:'{{ $job->customer->city}}',
                        allDay: false,
                        backgroundColor: '#000000',
                        borderColor: '@if($job->status == "pending") red @elseif($job->status == "provisional") #fc9003 @elseif($job->status == "confirmed") #01FF70 @elseif($job->status == "completed") #007BFF @endif',
                        customer: '{{ $job->customer->name }}',
                        timePeriod: '{{ \Carbon\Carbon::parse($job->start)->format('h:i') }}' +
                            ' - ' + '{{ \Carbon\Carbon::parse($job->end)->format('h:i') }}',
                        jobid: '{{ $job->id }}',
                        team: '{{ $job->user_id }}',
                        teamcolor: '{{$job->user->color ?? "red" }}',
                        teamname: '{{$job->user->name ?? "Not Assigned" }}',
                        jobstatus: '{{ $job->status }}',
                        location: '{{ getCustomerAddress($job->customer_id) }}',
                        href: '{{ route('jobs.edit', $job->id) }}',
                        show: '{{ route('schedules.show', $job->id) }}',
                        viewcustomer: '{{ route('customers.show', $job->customer_id) }}',
                    },
                @endforeach
            ],
            eventClick: function(info) {

            //     $("#successModal .modal-body .job_title").text(info.event.title);
            //     $("#successModal .modal-body .job_id").text(info.event.extendedProps.jobid);
            //     $("#successModal .modal-body #complete_job").val(info.event.extendedProps.jobid);
            //     if (info.event.extendedProps.jobstatus !== undefined) {
            //         $("#successModal .modal-body #booking_status").val(info.event.extendedProps.jobstatus);
            //     }
            //     if (info.event.extendedProps.team !== undefined) {
            //         $("#successModal .modal-body #team").val(info.event.extendedProps.team);
            //     }
            //     $("#successModal .modal-body .customer_name").text(info.event.extendedProps
            //         .customer);
            //     $("#successModal .modal-body .location").text(info.event.extendedProps.location);
            //     $("#successModal .modal-body #starts").val(formatSetDate(info.event.start));
            //     $("#successModal .modal-body #start_time option[value='"+formatSetTime(info.event.start)+"']").prop('selected',true);
            //     $("#successModal .modal-body #end_time option[value='"+formatSetTime(info.event.end)+"']").prop('selected',true);
            //     $("#successModal .modal-body #ends").val(formatDateTime(info.event.end));
            //     $("#successModal .modal-body #edit_job").attr("href", info.event.extendedProps.href);
            //     $("#successModal .modal-body #show_job").attr("href", info.event.extendedProps.show);
            //     $("#successModal .modal-body #show_customer").attr("href", info.event.extendedProps.viewcustomer);

            //     var formData = {
            //         id: info.event.extendedProps.jobid,
            //         email_template: $("#modal-email-template .modal-body #email_template").val(),
            //         text_template: $("#modal-text-template .modal-body #text_template").val(),
            //     };
            //     $.ajaxSetup({
            //         headers: {
            //             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            //         }
            //     });
            //     $.ajax({
            //         type: 'POST',
            //         url: '{{ route('schedules.email-template') }}',
            //         data: formData,
            //         dataType: 'json',
            //         success: function(data) {
            //             $("#modal-email-template .modal-body #email_address").val(data.email);
            //             $("#modal-email-template .modal-body #email_subject").val(data.subject);
            //             var  emailhtml = data.message.replace(/\n/ig,"<br>")
            //             tinyMCE.get('email_message').setContent(emailhtml);
            //             // $("#modal-email-template .modal-body #email_message").val(data.message);
            //             $("#modal-text-template .modal-body #mobile_no").html(data.mobile_options);
            //             $("#modal-text-template .modal-body #text_message").val(data.text_message);
            //         },
            //         error: function(data) {
            //             console.log(data);
            //         }
            //     });
            //     $("#successModal").modal("show");
            location.href = info.event.extendedProps.show;
            },



            eventContent: function(arg) {

                var event = arg.event;

                var eventHtml = '<div class="wallThumbs row colSetting" id="job_event_'+ event.extendedProps.jobid +'">';
                eventHtml += '<div class="col-sm-12">';
                eventHtml += '<div class="myFlex">'
                eventHtml += '<span class="wallTitle" style="font-weight:700;">' + event.extendedProps.customer + '</span>';
                eventHtml += '<span class="onTip" tabindex="0" data-toggle="tooltip" data-placement="top" title="' + event.extendedProps.teamname + '">';
                eventHtml += '<button style="color: ' + event.extendedProps.teamcolor + '" class="btn btn-link" type="button" disabled>'
                eventHtml += '<i class="fas fa-dot-circle"></i>'
                eventHtml += '</button>'
                eventHtml += '</span>'
                eventHtml += '</div>'
                eventHtml += '<div>'
                eventHtml += '<span class="wallName">'+event.extendedProps.city+'</span><br>';
                eventHtml += '<span class="wallEvent">' + event.title + '</span><br>';
                eventHtml += '</div>'
                if(event.end){
                        eventHtml += '<span class="wallTime" id="time-period">' + formatTime(event.start) + ' - ' + formatTime(event.end) + '</span>';
                    }
                
                eventHtml += '</div>';
                eventHtml += '</div>';

                return {
                    html: eventHtml
                }
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!

            eventResize:function(eventResizeInfo  ) {
                var start = formatDate(eventResizeInfo .event.start);
                if(eventResizeInfo.event.end){
                    var end = formatDate(eventResizeInfo.event.end);
                }else{
                    var end = 'allDay';
                }

                var formData = {
                    id: eventResizeInfo.oldEvent.extendedProps.jobid,
                    start: start,
                    end: end,
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.store') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        location.reload();
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            },

            eventDrop:function(eventDropInfo ) {
                var eve = calendar.getEvents()
                var start = formatDate(eventDropInfo.event.start);

                if(eventDropInfo.event.end){
                    var end = formatDate(eventDropInfo.event.end);
                }else{
                    var end = 'allDay';
                }

                var formData = {
                    id: eventDropInfo.oldEvent.extendedProps.jobid,
                    start: start,
                    end: end,
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.store') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        location.reload();
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            },

            eventReceive: function(info) {
                console.log(info.draggedEl);
                $(info.draggedEl).css('color', 'blue');
                var start = formatDate(info.event.start);
                var endtime   = new Date(info.event.start.getTime() + 1 * 60 * 60 * 1000);
                // console.log(endtime.toLocaleTimeString());
                if(info.event.end){
                    var end = formatDate(endtime);
                }else{
                    var end = 'addHour';
                }
                var formData = {
                    id: $(info.draggedEl).data('jobid'),
                    start: start,
                    end: end,
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.store') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        var currentUrl = '{{ Request::url() }}';
                        var url = new URL(currentUrl);
                        url.searchParams.set("view", calendar.view.type); // setting your param
                        var newUrl = url.href;
                        window.location.href = newUrl;

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });

                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });


        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        // Color chooser button
        $('#color-chooser > li > a').click(function(e) {
            e.preventDefault()
            // Save color
            currColor = $(this).css('color')
            // Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function(e) {
            e.preventDefault()
            // Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            // Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.text(val)
            $('#external-events').prepend(event)

            // Add draggable funtionality
            ini_events(event)

            // Remove event from text input
            $('#new-event').val('')
        })
    })
</script>
<script>
    function formatDate(d) {
        var datestring = (d.getFullYear()) + "-" + ("0" + (d.getMonth() + 1)).slice(-2) + "-" +
            ("0" + d.getDate()).slice(-2) + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-
                2) + ":" + ("0" + d.getSeconds()).slice(-2);
        return datestring;
    }

    function formatTime(d) {
        var datestring =  ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-
                2);
        return datestring;
    }

    function formatDateTime(d) {
        var datestring = (d.getFullYear()) + "-" + ("0" + (d.getMonth() + 1)).slice(-2) + "-" +
            ("0" + d.getDate()).slice(-2) + " " + ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-
                2) + ":" + ("0" + d.getSeconds()).slice(-2);
        return datestring;
    }
    function formatSetDate(d) {
        var datestring = ("0" + (d.getMonth() + 1)).slice(-2) + "/" + ("0" + d.getDate()).slice(-2)  + "/" +(d.getFullYear());
        return datestring;
    }

    function formatSetTime(d){
        var timestring = ("0" + d.getHours()).slice(-2) + ":" + ("0" + d.getMinutes()).slice(-2) + ":" + "00";
        return timestring;
    }

    function assignStatus(value) {
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            status: value,
        };
        if(value == 'completed'){
                $.confirm({
                title: 'Confirm!',
                content: 'Are you sure! Once mark completed! Job will be removed from Calendar.',
                buttons: {
                    confirm: function() {
                        var event = document.getElementById("job_event_"+formData.job_id).parentElement.parentElement;
                        switch (formData.status) {
                            case 'pending':
                                $(event).css('border-color', 'red');
                                break;
                            case 'provisional':
                                $(event).css('border-color', '#fc9003');
                                    break;
                            case 'confirmed':
                                $(event).css('border-color', '#01FF70');
                                break;
                            case 'completed':
                                $(event).css('border-color', '#007BFF');
                                break;
                            default:
                                $(event).css('border-color', 'red');
                                break;
                        };
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('jobs.change-status') }}',
                            data: formData,
                            dataType: 'json',
                            success: function(data) {
                                if(data.success){
                                    $('#mark_complete').css('color', 'green');
                                    $('#mark_complete').text(data.success);
                                }else{
                                    $('#mark_complete').css('color', 'red');
                                    $('#mark_complete').text(data.danger);
                                }
                                setTimeout(function(){
                                    window.location.reload(1);
                                }, 1000);
                            },
                            error: function(data) {
                                console.log(data);
                            }
                        });
                    },
                    cancel: function() {

                    },
                }
            });
        }else{
            var event = document.getElementById("job_event_"+formData.job_id).parentElement.parentElement;
            switch (formData.status) {
                case 'pending':
                    $(event).css('border-color', 'red');
                    break;
                case 'provisional':
                    $(event).css('border-color', '#fc9003');
                        break;
                case 'confirmed':
                    $(event).css('border-color', '#01FF70');
                    break;
                case 'completed':
                    $(event).css('border-color', '#007BFF');
                    break;
                default:
                    $(event).css('border-color', 'red');
                    break;
            };
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('jobs.change-status') }}',
                data: formData,
                dataType: 'json',
                success: function(data) {
                    if(data.success){
                        $('#mark_complete').css('color', 'green');
                        $('#mark_complete').text(data.success);
                    }else{
                        $('#mark_complete').css('color', 'red');
                        $('#mark_complete').text(data.danger);
                    }
                    setTimeout(function(){
                        window.location.reload(1);
                    }, 1000);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    }

    function assignTeam(value) {
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            user_id: value,
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('jobs.assign') }}',
            data: formData,
            dataType: 'json',
            success: function(data) {
                if(data.success){

                    $('#assign_message').css('color', 'green');
                    $('#assign_message').text(data.success);
                }else{
                    $('#assign_message').css('color', 'red');
                    $('#assign_message').text(data.danger);
                }
                setTimeout(function(){
                    window.location.reload(1);
                }, 1000);
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function sendConfirmation(value) {
    if(value == 'email'){
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            subject: $("#modal-email-template .modal-body #email_subject").val(),
            email: $("#modal-email-template .modal-body #email_address").val(),
            message: tinymce.get("email_message").getContent(),
            medium: value,
        };
    }else{
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            mobile_no: $("#modal-text-template .modal-body #mobile_no").val(),
            text_message: $("#modal-text-template .modal-body #text_message").val(),
            medium: value,
        };
    }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('jobs.confirmation') }}',
            data: formData,
            dataType: 'json',
            success: function(data) {
                if(data.success){
                    $("#modal-email-template .close").click();
                    $("#modal-text-template .close").click();
                    var event = document.getElementById("job_event_"+formData.job_id).parentElement.parentElement;
                    $(event).css('border-color', '#fc9003');
                    $("#successModal .modal-body #booking_status").val('provisional');
                    $('#confirmation_message').css('color', 'green');
                    $('#confirmation_message').text(data.success);
                }else{
                    $('#confirmation_message').css('color', 'red');
                    $('#confirmation_message').text(data.danger);
                }
            },
            error: function(data) {
                console.log(data);
            }
        });
    }

    function markUnscheduled() {
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
        };
        $.confirm({
                    title: 'Confirm!',
                    content: 'Are you sure! You want to Unschedule the Job!.',
                    buttons: {
                        confirm: function() {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('jobs.mark-unscheduled') }}',
                                data: formData,
                                dataType: 'json',
                                success: function(data) {
                                    if(data.success){

                                        $('#confirmation_message').css('color', 'green');
                                        $('#confirmation_message').text(data.success);
                                    }else{
                                        $('#confirmation_message').css('color', 'red');
                                        $('#confirmation_message').text(data.danger);
                                    }
                                    setTimeout(function(){
                                        window.location.reload(1);
                                    }, 1000);
                                },
                                error: function(data) {
                                    console.log(data);
                                }
                            });
                        },
                        cancel: function() {

                        },
                    }
                });
    }
    function changeTimings(){
        var formData = {
                    id: $("#successModal .modal-body .job_id").text(),
                    start: $('#starts').val()+' '+$('#start_time').find(":selected").val(),
                    end: $('#starts').val()+' '+$('#end_time').find(":selected").val(),
                };
       // console.log(formData);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.update-timing') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        if(data.success){

                            $('#change_timing_message').css('color', 'green');
                            $('#change_timing_message').text('Job Timings has been changed!');
                        }else{
                            $('#change_timing_message').css('color', 'red');
                            $('#change_timing_message').text('Found some error!');
                        }
                        setTimeout(function(){
                        window.location.reload(1);
                        }, 1000);

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>
<script>
    function scheduleMobile(){
        var formData = {
                    id: $("#schedule-modal .modal-body #job_id").val(),
                    start: $('#mobile_starts').val()+' '+$('#mobile_start_time').find(":selected").val(),
                    end: $('#mobile_starts').val()+' '+$('#mobile_end_time').find(":selected").val(),
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.update-timing') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        if(data.success){

                            $('#mobile_schedule_message').css('color', 'green');
                            $('#mobile_schedule_message').text('Job has been Scheduled!');
                        }else{
                            $('#mobile_schedule_message').css('color', 'red');
                            $('#mobile_schedule_message').text('Found some error!');
                        }
                        setTimeout(function(){
                        window.location.reload(1);
                        }, 1000);

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>
<script>
    function addHours(numOfHours, date) {
  date.setTime(date.getTime() + numOfHours * 60 * 60 * 1000);

  return date;
}
</script>
<script>
    function updateTimeInput(element){
       // var previoustim = $(element).val();
        //$(element).val(previoustim+':00');
    }
</script>
<script>
    function changeTemplate(element){
        var formData = {
                    id: $("#successModal .modal-body .job_id").text(),
                    email_template: $(element).val(),
                    text_template: $(element).val(),
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '{{ route('schedules.email-template') }}',
                    data: formData,
                    dataType: 'json',
                    success: function(data) {
                        $("#modal-email-template .modal-body #email_template").val(formData.email_template);
                        $("#modal-email-template .modal-body #email_address").val(data.email);
                        $("#modal-email-template .modal-body #email_subject").val(data.subject);
                        var emailhtml = data.message.replace(/\n/ig,"<br>")
                        tinyMCE.get('email_message').setContent(emailhtml);
                        // $("#modal-email-template .modal-body #email_message").val(data.message);
                        $("#modal-text-template .modal-body #mobile_no").html(data.mobile_options);
                        $("#modal-text-template .modal-body #text_message").val(data.text_message);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>
