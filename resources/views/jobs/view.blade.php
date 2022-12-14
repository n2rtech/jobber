@extends('layouts.app')
@section('title', 'View Job Details')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.css" integrity="sha512-bYPO5jmStZ9WI2602V2zaivdAnbAhtfzmxnEGh9RwtlI00I9s8ulGe4oBa5XxiC6tCITJH/QG70jswBhbLkxPw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    <section class="content view-job-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-4 maxWidthControl" style="margin: 0 auto">
                    <div class="card-header">
                        <h3 class="card-title">Job Details</h3>
                        <div class="card-tools">
                            <a href="{{ route('customers.show', $job->customer->id) }}" class="btn btn-dark">
                                <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h5><strong>{{ $job->customer->name }}</strong></h5>
                                <span class="text-muted"><cite>{{ $job->jobTitle->title }}</cite></span><br />
                                <small>{{ $job->customer->name }}</small><br />
                                <small>{!! getAddress($job->customer_id) !!}</small>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right">
                                    @isset($job->start)
                                    <small class="text-dark mb-2"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;<strong>
                                            {{ \Carbon\Carbon::parse($job->start)->format('M d, Y : h:i') }}
                                            @isset($job->end)
                                                - {{ \Carbon\Carbon::parse($job->end)->format('h:i') }}
                                            @endisset
                                        </strong> </small>
                                    @else
                                    <small class="text-dark mb-2"><i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;<strong>
                                    Unscheduled
                                    </strong> </small>
                                    @endisset
                                    @isset($job->customer->phone)
                                        <br />
                                        <small class="text-dark"><i class="fas fa-square-phone"></i>&nbsp;&nbsp;&nbsp;
                                            {{ $job->customer->phone }}</small>
                                    @endisset
                                    @isset($job->customer->mobile_1)
                                        <br />
                                        <small class="text-dark"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;&nbsp;
                                            {{ $job->customer->mobile_1 }}</small>
                                    @endisset
                                    @isset($job->customer->mobile_2)
                                        <br />
                                        <small class="text-dark"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;&nbsp;
                                            {{ $job->customer->mobile_2 }}</small>
                                    @endisset
                                    @isset($job->customer->directions)
                                        <br />
                                        <small class="text-dark"><i class="fa fa-location-pin"></i>&nbsp;&nbsp;&nbsp;
                                            {{ $job->customer->directions }}</small>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header p-0 pt-1" style="border-radius: 0px;">
                        <ul class="nav nav-tabs nav-fill" style="border-bottom: none;" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item" style="width: 33.33%">
                                <a class="nav-link active" id="view-information-tab" data-toggle="pill"
                                    href="#view-information" role="tab" aria-controls="view-information"
                                    aria-selected="true">Info</a>
                            </li>
                            <li class="nav-item" style="width: 33.33%">
                                <a class="nav-link" id="view-jobform-tab" data-toggle="pill"
                                    href="#view-jobform" role="tab" aria-controls="view-jobform"
                                    aria-selected="false">Job Forms</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="view-information" role="tabpanel"
                                aria-labelledby="view-information-tab">

                                <div class="jobviewPop">
                                    <div class="text-center scButtons">
                                        <button type="button" onclick="markUnscheduled();">
                                            Unschedule Job
                                        </button>
                                        <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                            Send Confirmation
                                        </button>
                                        <div class="dropdown-menu confirmation">
                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal-email-template" onclick="gettemplate();">Send Email</a>
                                            <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal-text-template" onclick="gettemplate();">Send Text</a>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <small id="confirmation_message"></small>
                                    </div>
                                    <div class="bookingStatus">
                                        <div class="row">
                                            <div class="col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label class="control-label">Booking Status</label>
                                                    <select name="booking_status" id="booking_status" class="form-control" onchange="assignStatus(this.value);" style="width: 100%">
                                                        <option value="pending" @if($job->status == 'pending') selected @endif>Pending</option>
                                                        <option value="provisional" @if($job->status == 'provisional') selected @endif>Provisional</option>
                                                        <option value="confirmed" @if($job->status == 'confirmed') selected @endif>Confirmed</option>
                                                        <option value="completed" @if($job->status == 'completed') selected @endif>Completed</option>
                                                    </select>
                                                    <small id="mark_complete"></small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-6">
                                                <div class="form-group">
                                                    <label class="control-label">Team</label>
                                                    <select name="team" id="team" class="form-control" onchange="assignTeam(this.value);" style="width: 100%">
                                                        <option value="">Choose Team Member</option>
                                                        @foreach ($users as $user)
                                                        <option value="{{ $user->id }}" @if($job->user_id == $user->id) selected @endif>{{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small id="assign_message"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bookingTime">
                                        <h5><strong>Edit job booking time and date</strong></h5>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <label class="control-label">Start Date</label>
                                                    <input id="starts" class="form-control" value="{{ \Carbon\Carbon::parse($job->start)->format('m/d/Y') }}">
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="control-label">Start Time</label>
                                                    <select name="start_time" id="start_time" class="form-control">
                                                    <option>Choose start time</option>
                                                    @php $sel = ''; @endphp
                                                    @foreach($slots as $slot)
                                                    <option value="{{ $slot }}"  @php ( $slot == \Carbon\Carbon::parse($job->start)->format('H:i:s') ) ? $sel = "selected" : $sel = ''; echo $sel; @endphp >{{ $slot }}</option>
                                                    @endforeach
                                                </select>
                                                    <!--<input id="start_time" type="time" class="form-control" onchange="updateTimeInput(this)" value="{{ \Carbon\Carbon::parse($job->start)->format('H:i:s') }}">-->
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-6">
                                                <div class="form-group">
                                                    <label class="control-label">End Time</label>
                                                    <select name="end_time" id="end_time" class="form-control" onchange="changeTimings();">
                                                    <option disabled>Choose End time</option>
                                                    @php $sel = ''; @endphp
                                                    @foreach($slots as $slot)
                                                    <option value="{{ $slot }}"  @php ( $slot == \Carbon\Carbon::parse($job->end)->format('H:i:s') ) ? $sel = "selected" : $sel = ''; echo $sel; @endphp >{{ $slot }}</option>
                                                    @endforeach
                                                </select>
                                                    <!--<input id="end_time" type="time" class="form-control" onchange="updateTimeInput(this)" value="{{ \Carbon\Carbon::parse($job->end)->format('H:i:s') }}">--->
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-12 mt-2 mb-2">
                                                <button class="btn btn-block btn-success" onclick="changeTimings();">Update Timings</button>
                                            </div> --}}
                                        </div>
                                        <div class="text-center">
                                            <small id="change_timing_message"></small>
                                        </div>
                                    </div>
                                    <div class="text-center vcButtons">
                                        <a href="{{ route('jobs.edit', $job->id) }}" id="edit_job" class="btn btn-outline-dark">Edit Job</a>
                                        <a href="{{ route('customers.show', $job->customer_id) }}" id="show_customer" class="btn btn-outline-dark">View Customer</a>
                                    </div>
                                </div>

                                <span class="text-dark float-right"> <strong>Invoice Total</strong> : € {{ $job->invoice->total }}</span>
                                <span class="clearfix"></span>
                                <div class="card card-widget widget-user-2">
                                    <div class="card-header">
                                        <h3 class="card-title">Achived Notes</h3>
                                        <div class="card-tools">
                                            <a href="javascript:void(0)" id="filter" class="btn btn-success">
                                                Add Note
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card" id="filterBox">
                                        <div class="card-body">
                                            <form id="documentUploadForm" method="POST" action="{{ route('job.notes-add') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="customer_id" value="{{ $job->customer_id }}">
                                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                                            <div class="form-group">
                                                <label for="note">{{ __('Note') }}</label>
                                                <textarea rows="4" class="form-control" id="note" name="note" placeholder="Enter Note">{{ old('note') }}</textarea>
                                                @error('note')
                                                    <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="file">{{ __('Choose File') }}</label>
                                                <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="file" name="file">
                                                        <label class="custom-file-label" for="file">{{ __('Choose File') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div>


                                    <div class="card-body card-comments cardforResponsive">
                                        @forelse($job->customer->allnotes as $note)
                                        <div class="card-comment">
                                            <div class="row">
                                                <div class="col-sm-7 col-6">
                                                    <span class="noteDate" style="font-weight: 600">{{ $note->created_at }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                                                </div>
                                                <div class="col-sm-5 col-6">
                                                    <div class="float-right noteUser">
                                                        <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">
                                                        &nbsp; {{ isset($note->user_id) ? $note->user->name : 'Customer' }}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    {{ $note->note }}
                                                </div>
                                            </div>
                                        </div>
                                        @if($loop->iteration == 2)
                                            @break
                                        @endif
                                        @empty
                                        <div class="card-comment">
                                            <p class="text-center mt-4">No Notes Added.</p>
                                        </div>
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="view-jobform" role="tabpanel"
                                aria-labelledby="view-jobform-tab">
                                <div class="gallery">
                                    @forelse($job->forms as $form)
                                    @if(!jobFormExists($job->id, $form->id))
                                    <div class="card collapsed-card">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title" data-card-widget="collapse" title="Collapse">{{ $form->title }}</h3>
                                            <div class="card-tools">
                                                <a href="javascript:void(0)"
                                                class="btn btn-outline-light btn-sm mr-1" onclick="confirmDeleteJobForm('{{ route('customers.delete-jobform', ['job_id' => $job->id, 'redirect' => 'job','form_id' => $form->id]) }}');"><i class="fas fa-trash"></i></a>
                                                <button type="button" class="btn btn-outline-light btn-tool" data-card-widget="collapse" title="Collapse">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                                {{-- <a href="{{ route('jobs.view.job-form', ['jobid' => $job->id, 'formid' => $form->id]) }}" class="btn btn-light btn-sm"><i class="fas fa-eye"></i></a> --}}
                                            </div>
                                        </div>
                                        <div class="card-body" style="display: none;">
                                            <form method="POST" id="jobForm{{ $form->id }}" action="{{ route('jobs.save.job-form', $job->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="job_form_id" value="{{ $form->id }}">
                                                <input type="hidden" name="redirect" value="customer">
                                                @foreach($form->questions as $question)

                                                    @php
                                                    $job_form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)->where('job_form_id', $form->id)->where('job_form_question_id', $question->id)->first();
                                                    @endphp
                                                    <div class="form-group">

                                                        <label for="answer-{{ $question->id }}">{{ $question->question }}</label>

                                                        @if($question->type == 'text')
                                                            <input type="text" class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]" value="{{ $job_form_answer->answer ?? '' }}" placeholder="Write Answer here">
                                                        @endif

                                                        @if($question->type == 'textarea')
                                                            <textarea class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]" rows="3" placeholder="Write Answer here">{{ $job_form_answer->answer ?? '' }}</textarea>
                                                        @endif

                                                        @if($question->type == 'checkbox')
                                                            @foreach($question->options as $option)
                                                                <div class="form-check" id="answer-{{ $question->id }}">
                                                                    <input class="form-check-input" type="checkbox" id="option-{{ $option->id }}"  value="{{ $option->id }}" name="question[{{ $question->id }}][answer][]" @isset($job_form_answer->answer_options) {{ in_array($option->id, $job_form_answer->answer_options)  ? 'checked' : '' }} @endisset>
                                                                    <label class="form-check-label" id="option-{{ $option->id }}">{{ $option->option }}</label>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                        @if($question->type == 'radio')
                                                            @foreach($question->options as $option)
                                                            <div class="form-check" id="answer-{{ $question->id }}">
                                                                <input class="form-check-input" type="radio" id="option-{{ $option->id }}"  value="{{ $option->id }}" name="question[{{ $question->id }}][answer]" @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'checked' : '' }} @endisset>
                                                                <label class="form-check-label">{{ $option->option }}</label>
                                                            </div>
                                                            @endforeach
                                                        @endif

                                                        @if($question->type == 'dropdown')
                                                        <select class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]">
                                                            <option value="">Choose One</option>
                                                            @foreach($question->options as $option)
                                                                <option value="{{ $option->id }}" @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'selected' : '' }} @endisset>{{ $option->option }}</option>
                                                            @endforeach
                                                        </select>
                                                        @endif

                                                    </div>

                                                @endforeach
                                            </form>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="button" onclick="confirmJobFormSave({{ $form->id }})" class="btn btn-sm btn-danger"><i class="fas fa-save"></i> Save & Exit</button>
                                        </div>

                                    </div>
                                    @else
                                    <div class="card collapsed-card">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title">{{ $form->title }}</h3>
                                            <div class="card-tools">
                                                <a href="javascript:void(0)" class="btn btn-outline-light btn-sm mr-1" onclick="confirmDeleteJobForm('{{ route('customers.delete-jobform', ['job_id' => $job->id, 'redirect' => 'job','form_id' => $form->id]) }}');">
                                                                        <i class="fas fa-trash"></i></a>
                                                <a href="{{ route('jobs.view.job-form', ['jobid' => $job->id, 'formid' => $form->id]) }}" class="btn btn-light btn-sm"><i class="fas fa-eye"></i></a>
                                                <button type="button" onclick="editSavedJobForm()" class="btn btn-outline-light btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body saved_job_form" style="display: none">
                                            <form method="POST" id="jobForm{{ $form->id }}" action="{{ route('jobs.save.job-form', $job->id) }}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="job_form_id" value="{{ $form->id }}">
                                                <input type="hidden" name="redirect" value="customer">
                                                @foreach($form->questions as $question)

                                                    @php
                                                    $job_form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)->where('job_form_id', $form->id)->where('job_form_question_id', $question->id)->first();
                                                    @endphp
                                                    <div class="form-group">

                                                        <label for="answer-{{ $question->id }}">{{ $question->question }}</label>

                                                        @if($question->type == 'text')
                                                            <input type="text" class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]" value="{{ $job_form_answer->answer ?? '' }}" placeholder="Write Answer here">
                                                        @endif

                                                        @if($question->type == 'textarea')
                                                            <textarea class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]" rows="3" placeholder="Write Answer here">{{ $job_form_answer->answer ?? '' }}</textarea>
                                                        @endif

                                                        @if($question->type == 'checkbox')
                                                            @foreach($question->options as $option)
                                                                <div class="form-check" id="answer-{{ $question->id }}">
                                                                    <input class="form-check-input" type="checkbox" id="option-{{ $option->id }}"  value="{{ $option->id }}" name="question[{{ $question->id }}][answer][]" @isset($job_form_answer->answer_options) {{ in_array($option->id, $job_form_answer->answer_options)  ? 'checked' : '' }} @endisset>
                                                                    <label class="form-check-label" id="option-{{ $option->id }}">{{ $option->option }}</label>
                                                                </div>
                                                            @endforeach
                                                        @endif

                                                        @if($question->type == 'radio')
                                                            @foreach($question->options as $option)
                                                            <div class="form-check" id="answer-{{ $question->id }}">
                                                                <input class="form-check-input" type="radio" id="option-{{ $option->id }}"  value="{{ $option->id }}" name="question[{{ $question->id }}][answer]" @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'checked' : '' }} @endisset>
                                                                <label class="form-check-label">{{ $option->option }}</label>
                                                            </div>
                                                            @endforeach
                                                        @endif

                                                        @if($question->type == 'dropdown')
                                                        <select class="form-control form-control-sm" id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]">
                                                            <option value="">Choose One</option>
                                                            @foreach($question->options as $option)
                                                                <option value="{{ $option->id }}" @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'selected' : '' }} @endisset>{{ $option->option }}</option>
                                                            @endforeach
                                                        </select>
                                                        @endif

                                                    </div>

                                                @endforeach
                                            </form>
                                        </div>
                                        <div class="card-footer text-right saved_job_form" style="display: none">
                                            <button type="button" onclick="confirmJobFormSave({{ $form->id }})" class="btn btn-sm btn-danger"><i class="fas fa-save"></i> Save & Exit</button>
                                        </div>
                                    </div>
                                    @endif
                                    @empty
                                    <p class="text-center mt-4"> No JobForm Found</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-email-template" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-warning">
              <h4 class="modal-title">Email Template</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
                 <div class="form-group">
                    <label for="email_address">Email Address</label>
                    <input class="form-control" name="email_address" id="email_address">
                </div>
                <div class="form-group">
                    <label for="email_template">Template</label>
                    <select class="form-control" name="email_template" id="email_template" onchange="gettemplate();">
                        @foreach($template->contents as $content)
                            <option value="{{ $content->id }}" @if($loop->first) selected @endif>{{ $content->template_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email_subject">Subject</label>
                    <input class="form-control" name="email_subject" id="email_subject">
                </div>
                <div class="form-group">
                    <label for="email_message">Message</label>
                    <textarea class="form-control" name="email_message" id="email_message" rows="6"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="sendConfirmation('email')">Send</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

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
                    <select class="form-control" name="text_template" id="text_template" onchange="gettemplate();">
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

@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
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

    <script>
        jQuery('#starts').datepicker();
    </script>

    <script>
        function assignTeam(value) {
            var formData = {
                job_id: '{{ $job->id }}',
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
                    if (data.success) {
                        $('#assign_message').css('color', 'green');
                        $('#assign_message').text(data.success);
                    } else {
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
    <script>
        @if(Request::get('activeTab'))
            var activeTab = "#{{ Request::get('activeTab') }}";
            if (activeTab) {
                $('.nav-tabs a[href="' + activeTab + '"]').tab('show');
            }
        @endif
    </script>
    <!-- Filter Box Scripts Start -->
<script>
    $(document).ready(function(){
        @error('note')
            $("#filterBox").css('display', 'block');
        @enderror

        $("#filter").click(function(){
            if($('#filterBox').css("display") == "block") {
                $('#documentUploadForm').submit();
            }else{
                $("#filterBox").slideToggle();
            }

        });



    });
</script>
<script>
    function gettemplate(){
        var formData = {
                    id: '{{ $job->id }}',
                    email_template: $("#modal-email-template .modal-body #email_template").val(),
                    text_template: $("#modal-text-template .modal-body #text_template").val(),
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
                        $("#modal-text-template .modal-body #text_message").html(data.text_message);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>
<!-- Filter Box Scripts End -->
<script>
    function markUnscheduled() {
        var formData = {
            job_id: '{{ $job->id }}',
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
</script>
<script>
    function sendConfirmation(value) {

        if(value == 'email'){
        var formData = {
            job_id: '{{ $job->id }}',
            subject: $("#modal-email-template .modal-body #email_subject").val(),
            email: $("#modal-email-template .modal-body #email_address").val(),
            message: tinymce.get("email_message").getContent(),
            medium: value,
        };
    }else{
        var formData = {
            job_id: '{{ $job->id }}',
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
             var bookingStatus = $('#booking_status').val();
             if(bookingStatus == 'pending'){
                assignStatus('provisional');
                $('#booking_status').val('provisional');
             }
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
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function assignStatus(value) {
        var formData = {
            job_id: '{{ $job->id }}',
            status: value,
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
                    if(formData.status == 'completed'){
                        window.location.href = '{{ route("home") }}';
                    }
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
</script>
<script>
    function changeTimings(){
        var formData = {
                    id: '{{ $job->id }}',
                    start: $('#starts').val()+' '+$('#start_time').val(),
                    end: $('#starts').val()+' '+$('#end_time').val(),
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

                            $('#change_timing_message').css('color', 'green');
                            $('#change_timing_message').text('Job Timings has been changed!');
                        }else{
                            $('#change_timing_message').css('color', 'red');
                            $('#change_timing_message').text('Found some error!');
                        }
                        setTimeout(function(){
                            window.location.href = '{{ route('schedules.index') }}';
                        }, 1000);

                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
    }
</script>

<script>
    function updateTimeInput(element){
        var previoustim = $(element).val();
        $(element).val(previoustim+':00');
    }
</script>
<script type="text/javascript">
    function confirmDeleteJobForm(href) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        })
    };
</script>
<script>
    function confirmJobFormSave(no) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Save Job Form!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('jobForm' + no).submit();
        }
    })
};
</script>
<script>
    function editSavedJobForm(){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Overwrite JobForm!'
        }).then((result) => {
            if (result.isConfirmed) {
               $(".saved_job_form").toggle();
            }
        })
    }
</script>
@endpush
