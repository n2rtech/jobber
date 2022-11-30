@extends('layouts.app') 
@section('title', 'View Job Details')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    <section class="content view-job-page">
        <div class="row">
            <div class="col-sm-12">
                <div class="card mt-4 maxWidthControl" style="margin: 0 auto">
                    <div class="card-header">
                        <h3 class="card-title">Job Details</h3>
                        <div class="card-tools">
                            <a href="{{ route('jobs.index') }}" class="btn btn-dark">
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
                                <small>{{ getAddress($job->customer_id) }}</small>
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
                                <span class="text-dark"> <strong>Instructions</strong></span>
                                <p class="text-dark">{{ $job->instructions }}</p>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="bg-dark">Job</th>
                                                <th class="bg-dark text-center">Team</th>
                                                <th class="bg-dark text-right">Reminder</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <small> Job Title&nbsp;: {{ $job->jobTitle->title }}</small>
                                                    <br />
                                                    <small> Job ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                        #{{ $job->id }}</small>
                                                </td>
                                                <td class="text-center">
                                                    <select style="margin: 0 auto" name="team" id="team" class="form-control form-control-sm text-center"
                                                        onchange="assignTeam(this.value);">
                                                        <option value="">Choose Team Member</option>
                                                        @foreach ($users as $user)
                                                            <option value="{{ $user->id }}"
                                                                @if ($job->user_id == $user->id) selected @endif>
                                                                {{ $user->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <small id="assign_message"></small>
                                                </td>
                                                <td class="text-right">
                                                    <small id="assign_message"><cite>No Reminder Scheduled</cite></small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-success" form="documentUploadForm">{{ __('Save') }}</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>


                                    <div class="card-body card-comments cardforResponsive">
                                        @forelse($job->jobnotes as $note)
                                        <div class="card-comment">
                                            <div class="row">
                                                <div class="col-sm-7 col-6">
                                                    <span class="noteDate" style="font-weight: 600">{{ $note->created_at }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                                                </div>
                                                <div class="col-sm-5 col-6">
                                                    <div class="float-right noteUser">
                                                        <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">
                                                        &nbsp; {{  $note->user->name }}
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    {{ $note->note }}
                                                </div>
                                            </div>
                                        </div>
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
                                    <div class="card">
                                        <div class="card-header bg-dark">
                                            <h3 class="card-title">{{ $form->title }}</h3>
                                            <div class="card-tools">
                                                <a href="javascript:void(0)" class="btn btn-outline-light btn-sm">Email</a>
                                                <a href="javascript:void(0)" class="btn btn-light btn-sm">Download</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            @foreach($form->questions as $question)
                                                <div class="form-group">
                                                    <label>{{ $question->question }}</label>
                                                    @if($question->type == 'text')
                                                        <input type="text" class="form-control form-control-sm" placeholder="Write Answer here">
                                                    @endif
                                                    @if($question->type == 'textarea')
                                                        <textarea class="form-control form-control-sm" rows="3" placeholder="Write Answer here"></textarea>
                                                    @endif
                                                    @if($question->type == 'checkbox')
                                                        @foreach($question->options as $option)
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox">
                                                                <label class="form-check-label" value="{{ $option->option }}">{{ $option->option }}</label>
                                                            </div>
                                                        @endforeach
                                                    @endif

                                                    @if($question->type == 'radio')
                                                        @foreach($question->options as $option)
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="radio1" value="{{ $option->option }}">
                                                            <label class="form-check-label">{{ $option->option }}</label>
                                                          </div>
                                                        @endforeach
                                                    @endif
                                                    @if($question->type == 'dropdown')
                                                    <select class="form-control form-control-sm">
                                                        <option value="">Choose One</option>
                                                        @foreach($question->options as $option)
                                                            <option value="{{ $option->option }}">{{ $option->option }}</option>
                                                        @endforeach
                                                    </select>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
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
@endsection
@push('scripts')
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
            $("#filterBox").slideToggle();
        });

    });
</script>
<!-- Filter Box Scripts End -->
@endpush
