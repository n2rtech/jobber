<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

   <style>
    .card {
        /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
    }
    label{
        font-weight: 700;
    }
    .question_answer{
        box-sizing: border-box;
    padding: 10px;
        border: 1px solid rgba(224, 207, 207, 0.548);
        margin-bottom: 10px;
    }
   </style>
  </head>
  <body>
    <div class="gallery">
        @forelse($job->forms as $form)
        <div class="card">
            <div class="card-header bg-dark">
                <h2 class="card-title">{{ $form->title }}</h2>
            </div>
            <div class="card-body">
                @foreach($form->questions as $question)
                    <div class="question_answer">
                    @php
                    $job_form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)->where('job_form_id', $form->id)->where('job_form_question_id', $question->id)->first();
                    @endphp

                    <label for="answer-{{ $question->id }}">Question: {{ $question->question }}</label>

                    @if($question->type == 'text')
                        <p>Answer: {{ $job_form_answer->answer ?? 'Not answered' }}</p>
                    @endif

                    @if($question->type == 'textarea')
                        <p>Answer : {{ $job_form_answer->answer ?? 'Not answered' }}</p>
                    @endif

                    @if($question->type == 'checkbox')
                        @isset($job_form_answer->answer_options)
                            @foreach($question->options as $option)
                                @if(in_array($option->id, $job_form_answer->answer_options))
                                    <p>Answer : {{ $option->option }}</p>
                                @else
                                    @continue
                                @endif
                            @endforeach
                        @else
                            <p>Answer : Not Answered</p>
                        @endisset
                    @endif

                    @if($question->type == 'radio')
                        @isset($job_form_answer->answer)
                            @foreach($question->options as $option)
                                @if($option->id == $job_form_answer->answer)
                                    <p>Answer : {{ $option->option }}</p>
                                @else
                                    @continue
                                @endif
                            @endforeach
                        @else
                            <p>Answer : Not Answered</p>
                        @endisset
                    @endif

                    @if($question->type == 'dropdown')
                        @isset($job_form_answer->answer)
                            @foreach($question->options as $option)
                                @if($option->id == $job_form_answer->answer)
                                    <p>Answer : {{ $option->option }}</p>
                                @else
                                    @continue
                                @endif
                            @endforeach
                        @else
                            <p>Answer : Not Answered</p>
                        @endisset
                    @endif
                    </div>
                @endforeach
            </div>

        </div>
        @empty
        <p class="text-center mt-4"> No JobForm Found</p>
        @endforelse
    </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
