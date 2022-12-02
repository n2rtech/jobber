@extends('layouts.app')
@section('title', 'Schedules')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Schedules</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Schedules</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<style>
  .fc-event-main{
    font-size:9px!important;
  }
</style>
<section class="content" id="schedule_page">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-body p-0">
              <div id="calendar"></div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-calender-title">Unscheduled</h4>
                  <div class="card-tools">
                    <div class="circle">{{ count($unscheduled_jobs) }}</div>
                    </button>
                  </div>
                </div>
                <div class="card-body unscheduled-card">

                  <!-- the events -->
                  <div id="external-events">
                    @if(count($unscheduled_jobs) > 0)
                        @foreach($unscheduled_jobs as $unscheduled_job)
                            <div class="external-event bg-light hidden-xs"
                            data-customer="{{ $unscheduled_job->customer->name }}"
                            data-location="{{ getAddress($unscheduled_job->customer_id) }}"
                            data-jobid="{{ $unscheduled_job->id }}"
                            data-city="{{ $unscheduled_job->customer->city }}"
                            data-href="{{ route('jobs.edit', $unscheduled_job->id) }}"
                            data-jobstatus="{{ $unscheduled_job->status }}"
                            data-team="{{ $unscheduled_job->user_id }}"
                            data-show="{{ route('schedules.show', $unscheduled_job->id) }}"
                            data-viewcustomer="{{ route('customers.show', $unscheduled_job->customer_id) }}"
                            data-title="{{ $unscheduled_job->jobTitle->title }}">
                                <div class="direct-chat-infos">
                                    <span class="direct-chat-name float-left"> <small><b>Name</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->customer->name }}</small></span>
                                    <span class="clearfix"></span>
                                    <span class="direct-chat-name float-left"> <small><b>City</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->customer->city }}</small></span>
                                    <span class="clearfix"></span>
                                    <span class="direct-chat-name float-left"> <small><b>Job</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->jobTitle->title }}</small></span>
                                    <span class="clearfix"></span>
                                </div>
                           </div>
                           <div data-customer="{{ $unscheduled_job->customer->name }}"
                            data-location="{{ getAddress($unscheduled_job->customer_id) }}"
                            data-jobid="{{ $unscheduled_job->id }}"
                            data-href="{{ route('jobs.edit', $unscheduled_job->id) }}"
                            data-jobstatus="{{ $unscheduled_job->status }}"
                            data-city="{{ $unscheduled_job->customer->city }}"
                            data-team="{{ $unscheduled_job->user_id }}"
                            data-show="{{ route('schedules.show', $unscheduled_job->id) }}"
                            data-viewcustomer="{{ route('customers.show', $unscheduled_job->customer_id) }}"
                            data-title="{{ $unscheduled_job->jobTitle->title }}" class="hidden-sm schedule-xs">
                               <button class="direct-chat-infos btn-block" data-toggle="modal" data-target="#schedule-modal" onclick="$('#job_id').val($(this).parent().attr('data-jobid'))">
                                    <span class="direct-chat-name float-left"> <small><b>Name</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->customer->name }}</small></span>
                                    <span class="clearfix"></span>
                                    <span class="direct-chat-name float-left"> <small><b>City</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->customer->city }}</small></span>
                                    <span class="clearfix"></span>
                                    <span class="direct-chat-name float-left"> <small><b>Job</b></small></span>
                                    <span class="direct-chat-timestamp float-right"> <small>{{ $unscheduled_job->jobTitle->title }}</small></span>
                                    <span class="clearfix"></span>
                                </button>
                           </div>
                        @endforeach
                        <div class="checkbox" style="display: none">
                        <label for="drop-remove">
                            <input type="checkbox" id="drop-remove" checked>
                            remove after drop
                        </label>
                        </div>
                    @else
                        <p class="text-center mt-4"> 0 Unscheduled Jobs</p>
                    @endif
                  </div>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
          </div>
          <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
    <div class="modal fade" id="schedule-modal" tabindex="-1" role="dialog" aria-labelledby="schedule-modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="schedule-modalLabel">Schedule date</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-3 col-6">
                  <div class="form-group">
                      <label class="control-label">Start Date</label>
                      <input id="mobileStarts" readonly class="form-control" placeholder="Pick start date">
                  </div>
              </div>
              <div class="col-sm-3 col-6">
                  <div class="form-group">
                      <label class="control-label">End Date</label>
                      <input id="mobileEnds" readonly class="form-control" placeholder="Pick end date">
                      <small id="change_timing_message"></small>
                  </div>
              </div>
              <div class="col-sm-3 col-6">
                  <div class="form-group">
                      <label class="control-label">Start Time</label>
                      <input id="mobileStartTime" type="time" class="form-control">
                  </div>
              </div>
              <div class="col-sm-3 col-6">
                  <div class="form-group">
                      <label class="control-label">End Time</label>
                      <input id="mobileEndTime" type="time" class="form-control">
                  </div>
              </div>
            </div>
            <!-- <div class="col-sm-12">
                <span class="text-dark"> <strong>Scheduled Date & Time</strong></span>
                <input id="mobile_start" type="text" class="form-control">
                <input type="hidden" id="job_id" value="">
                <input type="hidden" id="mobile_end" value="addHour">
                <span id="mobile_schedule_message"></span>
            </div> -->

          </div>
          <div class="modal-footer">
            <button type="button" class="cutclose btn btn-secondary close" data-dismiss="modal">Close</button>
            <button class="btn btn-success" onclick="scheduleMobile();">Update Timings</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('schedules.view')
  @include('schedules.email-template')
  @include('schedules.text-template')
@endsection
@push('scripts')
@include('schedules.script')
@endpush
