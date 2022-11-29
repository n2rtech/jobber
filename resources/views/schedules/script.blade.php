<script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script>jQuery('#starts').datetimepicker({
    allowTimes:[
  '00:00', '00:30', '01:00', '01:30','02:00', '02:30','03:00', '03:30','04:00', '04:30','05:00', '05:30','06:00', '06:30',
  '07:00', '07:30', '08:00', '08:30','09:00', '09:30','10:00', '10:30','11:00', '11:30','12:00', '12:30','13:00', '13:30',
  '14:00', '14:30', '15:00', '15:30','16:00', '16:30','17:00', '17:30','18:00', '18:30','19:00', '19:30','20:00', '20:30',
  '21:00', '21:30', '22:00', '22:30','23:00', '23:30','23:59'
 ],
 format:'Y-m-d h:m:s'
});</script>
<script>jQuery('#ends').datetimepicker({
    allowTimes:[
  '00:00', '00:30', '01:00', '01:30','02:00', '02:30','03:00', '03:30','04:00', '04:30','05:00', '05:30','06:00', '06:30',
  '07:00', '07:30', '08:00', '08:30','09:00', '09:30','10:00', '10:30','11:00', '11:30','12:00', '12:30','13:00', '13:30',
  '14:00', '14:30', '15:00', '15:30','16:00', '16:30','17:00', '17:30','18:00', '18:30','19:00', '19:30','20:00', '20:30',
  '21:00', '21:30', '22:00', '22:30','23:00', '23:30','23:59'
 ],
 format:'Y-m-d h:m:s'
});</script>
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
                    href: $(eventEl).data('href'),
                    show: $(eventEl).data('show'),
                    timePeriod: '',
                    allDay: false,
                };
            }
        });

        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            initialView: '{{ Request::get("view") ?? "timeGridWeek"}}',
            themeSystem: 'bootstrap',
            scrollTime: '00:00:00',

            // Scheduled Job Events
            events: [
                @foreach ($scheduled_jobs as $job)
                    {
                        id: '{{ $job->id }}',
                        title: '{{ $job->jobTitle->title }}',
                        start: '{{ $job->start }}',
                        end: '{{ $job->end }}',
                        allDay: false,
                        backgroundColor: '#000000',
                        borderColor: '@if($job->status == "pending") red @elseif($job->status == "provisional") #fc9003 @elseif($job->status == "confirmed") #01FF70 @elseif($job->status == "completed") #007BFF @endif',
                        customer: '{{ $job->customer->name }}',
                        timePeriod: '{{ \Carbon\Carbon::parse($job->start)->format('h:i') }}' +
                            ' - ' + '{{ \Carbon\Carbon::parse($job->end)->format('h:i') }}',
                        jobid: '{{ $job->id }}',
                        team: '{{ $job->user_id }}',
                        jobstatus: '{{ $job->status }}',
                        location: '{{ getAddress($job->customer_id) }}',
                        href: '{{ route('jobs.edit', $job->id) }}',
                        show: '{{ route('schedules.show', $job->id) }}',
                    },
                @endforeach
            ],
            eventClick: function(info) {

                $("#successModal .modal-body .job_title").text(info.event.title);
                $("#successModal .modal-body .job_id").text(info.event.extendedProps.jobid);
                $("#successModal .modal-body #complete_job").val(info.event.extendedProps.jobid);
                if (info.event.extendedProps.jobstatus !== undefined) {
                    $("#successModal .modal-body #booking_status").val(info.event.extendedProps.jobstatus);
                }
                if (info.event.extendedProps.team !== undefined) {
                    $("#successModal .modal-body #team").val(info.event.extendedProps.team);
                }
                $("#successModal .modal-body .customer_name").text(info.event.extendedProps
                    .customer);
                $("#successModal .modal-body .location").text(info.event.extendedProps.location);
                $("#successModal .modal-body #starts").val(formatDateTime(info.event.start));
                $("#successModal .modal-body #ends").val(formatDateTime(info.event.end));
                $("#successModal .modal-body #edit_job").attr("href", info.event.extendedProps.href);
                $("#successModal .modal-body #show_job").attr("href", info.event.extendedProps.show);

                var formData = {
                    id: info.event.extendedProps.jobid,
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
                        $("#modal-email-template .modal-body #email_subject").val(data.subject);
                        tinyMCE.get('email_message').setContent(data.message);
                        $("#modal-text-template .modal-body #text_message").html(data.message);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
                $("#successModal").modal("show");
            },
            eventContent: function(arg) {

                var event = arg.event;

                var eventHtml = '<div class="row" id="job_event_'+ event.extendedProps.jobid +'">';
                eventHtml += '<div class="col-sm-12">';
                eventHtml += '<span style="font-weight:700;">' + event.extendedProps.customer + '</span>';
                eventHtml += '</div>';
                eventHtml += '<div class="col-sm-12">';
                    if(event.end){
                        eventHtml += '<span id="time-period">' + formatTime(event.start) + ' - ' + formatTime(event.end) + '</span>';
                    }
                eventHtml += '</div>';
                eventHtml += '<div class="col-sm-12">';
                eventHtml += '<span>' + event.title + '</span>';
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
                        // location.reload();
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

    function assignStatus(value) {
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            status: value,
        };

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

       var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
            subject: $("#modal-email-template .modal-body #email_subject").val(),
            message: $("#modal-email-template .modal-body #email_message").html(),
            text_message: $("#modal-email-template .modal-body #text_message").val(),
            medium: value,
        };
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
                    start: $('#starts').val(),
                    end: $('#ends').val(),
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
                        if(data.success){

                            $('#change_timing_message').css('color', 'green');
                            $('#change_timing_message').text(data.success);
                        }else{
                            $('#change_timing_message').css('color', 'red');
                            $('#change_timing_message').text(data.danger);
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
