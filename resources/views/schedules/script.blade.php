<script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
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
                    title: $.trim($(this).text()), // use the element's text as the event title
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
                // console.log();
                return {
                    title: eventEl.innerText,
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
            initialView: 'timeGridWeek',
            themeSystem: 'bootstrap',
            scrollTime: '00:00:00',
            // Scheduled Job Events
            events: [
                @foreach ($scheduled_jobs as $job)
                    {
                        title: '{{ $job->jobTitle->title }}',
                        start: '{{ $job->start }}',
                        end: '{{ $job->end }}',
                        allDay: false,
                        backgroundColor: '#000000',
                        borderColor: '{{ $job->status == 'pending' ? '#ff0000' : '#00ff00' }}',
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
                $("#successModal").modal("show");
                $("#successModal .modal-body .job_title").text(info.event.title);
                $("#successModal .modal-body .job_id").text(info.event.extendedProps.jobid);
                $("#successModal .modal-body #complete_job").val(info.event.extendedProps.jobid);
                if (info.event.extendedProps.jobstatus == 'completed') {
                    $("#successModal .modal-body #complete_job").prop("checked", true);
                }
                if (info.event.extendedProps.team !== undefined) {
                    $("#successModal .modal-body #team").val(info.event.extendedProps.team);
                }
                $("#successModal .modal-body .customer_name").text(info.event.extendedProps
                    .customer);
                $("#successModal .modal-body .location").text(info.event.extendedProps.location);
                $("#successModal .modal-body .starts").text(info.event.start);
                $("#successModal .modal-body .ends").text(info.event.end);
                $("#successModal .modal-body #edit_job").attr("href", info.event.extendedProps.href);
                $("#successModal .modal-body #show_job").attr("href", info.event.extendedProps.show);
            },
            eventContent: function(arg) {

                var event = arg.event;

                var eventHtml = '<div class="row">';
                eventHtml += '<div class="col-sm-7">';
                eventHtml += '<span class="ml-1" style="font-weight:700;">' + event.extendedProps
                    .customer + '</span>';
                eventHtml += '</div>';
                eventHtml += '<div class="col-sm-5 text-right">';
                eventHtml += '<span class="mr-1">' + event.extendedProps.timePeriod + '</span>';
                eventHtml += '</div>';
                eventHtml += '<div class="col-sm-12">';
                eventHtml += '<span class="ml-1">' + event.title + '</span>';
                eventHtml += '</div>';
                eventHtml += '</div>';

                return {
                    html: eventHtml
                }
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(info) {
                var dateformatted = formatDate(info.date);
                var formData = {
                    id: $(info.draggedEl).data('jobid'),
                    date: dateformatted,
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

    function markJobComplete(value) {
        var formData = {
            job_id: $("#successModal .modal-body .job_id").text(),
        };
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '{{ route('jobs.complete') }}',
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
            },
            error: function(data) {
                console.log(data);
            }
        });
    }
</script>
