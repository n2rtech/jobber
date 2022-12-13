<div class="col-md-12">
    <div class="card card-default">
        <div class="card-body p-0">
            <form id="myForm" method="POST" action="{{ route('form.update', $external_form->id) }}">
                @csrf
                @method('PUT')
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        @foreach ($external_form->tabs as $key => $tab)
                            <!-- your steps here -->
                            <div class="step" data-target="#tab{{ $key }}-part">
                                <button type="button" class="step-trigger" role="tab"
                                    aria-controls="tab{{ $key }}-part"
                                    id="tab{{ $key }}-part-trigger">
                                    <span class="bs-stepper-circle">{{ $loop->iteration }}</span>
                                    <span class="bs-stepper-label">{{ $tab->tab }}</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                    <div class="bs-stepper-content">
                        @foreach ($external_form->tabs as $tabkey => $tab)
                            <div id="tab{{ $tabkey }}-part" class="content" role="tabpanel"
                                aria-labelledby="general-information-part-trigger">
                                @foreach ($tab->questions as $question)
                                    <div class="form-group">

                                        <label for="answer-{{ $question->id }}">{{ $question->question }}</label>

                                        @if ($question->type == 'text')
                                            <input type="text" class="form-control form-control-sm"
                                                id="answer-{{ $question->id }}"
                                                name="question[{{ $question->id }}][answer]">
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
                                            <select class="form-control form-control-sm"
                                                id="answer-{{ $question->id }}"
                                                name="question[{{ $question->id }}][answer]">
                                                <option value="">Choose One</option>
                                                @foreach ($question->options as $option)
                                                    <option value="{{ $option->id }}">{{ $option->option }}</option>
                                                @endforeach
                                            </select>
                                        @endif

                                    </div>
                                @endforeach
                                @if(!$loop->first)
                                <button type="button" class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                                @endif
                                @if(!$loop->last)
                                <button type="button" class="btn btn-primary" onclick="stepper.next()">Next</button>
                                @endif
                                @if($loop->last)
                                <button type="submit" class="btn btn-success" form="myForm">Save</button>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card -->
</div>
