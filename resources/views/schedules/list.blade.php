@extends('layouts.app')
@section('title', 'Schedules')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/fullcalendar/main.css') }}">
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

<section class="content" id="schedule_page">
    <div class="container-fluid">
      <div class="row">

        <div class="col-mdc-10">
          <div class="card card-primary">
            <div class="card-body p-0">
              <div id="calendar"></div>
            </div>
          </div>
        </div>

        <div class="col-mdc-2">
            <div class="sticky-top mb-3">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-calender-title">Unscheduled</h4>
                  <div class="card-tools">
                    <div class="circle">{{ count($unscheduled_jobs) }}</div>
                    </button>
                  </div>
                </div>
                <div class="card-body">

                  <!-- the events -->
                  <div id="external-events">
                    @if(count($unscheduled_jobs) > 0)
                        @foreach($unscheduled_jobs as $unscheduled_job)
                            <div class="external-event bg-light" data-customer="{{ $unscheduled_job->customer->name }}" data-location="{{ getAddress($unscheduled_job->customer_id) }}" data-jobid="{{ $unscheduled_job->id }}">{{ $unscheduled_job->jobTitle->title }}</div>
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
  </section>
  @include('schedules.view')
@endsection
@push('scripts')
@include('schedules.script')
@endpush
