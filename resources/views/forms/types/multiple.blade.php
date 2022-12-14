<div class="card-body">
    <form class="wizard-form steps-validation" id="banhForm" method="POST" action="{{ route('form.update', $external_form->id) }}">
        @csrf
        @method('PUT')
                @foreach ($external_form->tabs as $tabkey => $tab)
                        <h6>{{ $tab->tab }}</h6>
                        <fieldset>
                        @foreach ($tab->questions as $question)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label" for="answer-{{ $question->id }}">{{ $question->question }}</label>

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
                            </div>
                        </div>
                        @endforeach
                        </fieldset>
                @endforeach
    </form>
</div>
