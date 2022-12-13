<div class="col-md-12">
    <div class="card card-default">
        <div class="card-body">
            <form method="POST" action="{{ route('form.update', $external_form->id) }}">
                @csrf
                @method('PUT')
                <div class="bs-stepper-linear">
                    <div class="bs-stepper-content">
                        @foreach ($external_form->questions as $question)
                            <div class="form-group">

                                <label for="answer-{{ $question->id }}">{{ $question->question }}</label>

                                @if ($question->type == 'text')
                                    <input type="text" class="form-control form-control-sm"
                                        id="answer-{{ $question->id }}" name="question[{{ $question->id }}][answer]">
                                @endif

                                @if ($question->type == 'textarea')
                                    <textarea class="form-control form-control-sm" id="answer-{{ $question->id }}"
                                        name="question[{{ $question->id }}][answer]" rows="3"></textarea>
                                @endif

                                @if ($question->type == 'checkbox')
                                    @foreach ($question->options as $option)
                                        <div class="form-check" id="answer-{{ $question->id }}">
                                            <input class="form-check-input" type="checkbox"
                                                id="option-{{ $option->id }}" value="{{ $option->id }}"
                                                name="question[{{ $question->id }}][answer][]">
                                            <label class="form-check-label"
                                                id="option-{{ $option->id }}">{{ $option->option }}</label>
                                        </div>
                                    @endforeach
                                @endif

                                @if ($question->type == 'radio')
                                    @foreach ($question->options as $option)
                                        <div class="form-check" id="answer-{{ $question->id }}">
                                            <input class="form-check-input" type="radio"
                                                id="option-{{ $option->id }}" value="{{ $option->id }}"
                                                name="question[{{ $question->id }}][answer]">
                                            <label class="form-check-label">{{ $option->option }}</label>
                                        </div>
                                    @endforeach
                                @endif

                                @if ($question->type == 'dropdown')
                                    <select class="form-control form-control-sm" id="answer-{{ $question->id }}"
                                        name="question[{{ $question->id }}][answer]">
                                        <option value="">Choose One</option>
                                        @foreach ($question->options as $option)
                                            <option value="{{ $option->id }}">{{ $option->option }}</option>
                                        @endforeach
                                    </select>
                                @endif

                            </div>
                        @endforeach
                        <div class="form-group text-right">
                            <button class="btn btn-success" type="">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
