@extends('layouts.app')
@section('title', 'Job Form')
@section('content')
    <section class="content-header col-xl-9 mx-auto">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Job Form</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ url()->previous() }}" class="btn btn-dark">
                        <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content col-xl-9 mx-auto">
        <div class="card">
            @foreach ($job->forms as $form)
                <div class="card-header bg-dark" style="padding: 0px 14px;">
                    <h4 class="card-title mt-3">{{ $form->title }}</h4>
                    <div class="card-tools text-right">
                        @php
                            $form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)
                                ->where('job_form_id', $form->id)
                                ->first();
                        @endphp
                        @isset($form_answer)
                            <small>{{ \App\Models\User::where('id', $form_answer->user_id)->value('name') }}</small><br />
                        @endisset
                        <strong>{{ \Carbon\Carbon::parse($form->created_at)->format('g:i A') }} |
                            {{ \Carbon\Carbon::parse($form->created_at)->format('d, M Y') }}</strong>
                    </div>
                </div>
                <div class="card-body">
                    <dl>
                        @foreach ($form->questions as $question)
                            @php
                                $job_form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)
                                    ->where('job_form_id', $form->id)
                                    ->where('job_form_question_id', $question->id)
                                    ->first();
                            @endphp
                            <dt>Question: {{ $question->question }}</dt>
                            @if ($question->type == 'text')
                                <dd>Answer: {{ $job_form_answer->answer ?? 'Not answered' }}</dd>
                            @endif

                            @if ($question->type == 'textarea')
                                <dd>Answer : {{ $job_form_answer->answer ?? 'Not answered' }}</dd>
                            @endif

                            @if ($question->type == 'checkbox')
                                @isset($job_form_answer->answer_options)
                                    @foreach ($question->options as $option)
                                        @if (in_array($option->id, $job_form_answer->answer_options))
                                            <dd>Answer : {{ $option->option }}</dd>
                                        @else
                                            @continue
                                        @endif
                                    @endforeach
                                @else
                                    <dd>Answer : Not Answered</dd>
                                @endisset
                            @endif

                            @if ($question->type == 'radio')
                                @isset($job_form_answer->answer)
                                    @foreach ($question->options as $option)
                                        @if ($option->id == $job_form_answer->answer)
                                            <dd>Answer : {{ $option->option }}</dd>
                                        @else
                                            @continue
                                        @endif
                                    @endforeach
                                @else
                                    <dd>Answer : Not Answered</dd>
                                @endisset
                            @endif

                            @if ($question->type == 'dropdown')
                                @isset($job_form_answer->answer)
                                    @foreach ($question->options as $option)
                                        @if ($option->id == $job_form_answer->answer)
                                            <dd>Answer : {{ $option->option }}</dd>
                                        @else
                                            @continue
                                        @endif
                                    @endforeach
                                @else
                                    <dd>Answer : Not Answered</dd>
                                @endisset
                            @endif
                        @endforeach
                    </dl>
                </div>
            @endforeach
        </div>
    </section>
@endsection
