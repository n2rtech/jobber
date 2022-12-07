{{-- Documents Tab Start --}}
<div class="tab-pane fade" id="customer-documents" role="tabpanel" aria-labelledby="customer-documents-tab">
    <div class="row">
        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-dark">
                            <small>Job Forms</small>
                        </div>
                        @if (count($customer->jobs) > 0)
                            <div class="card-body">
                                @foreach ($customer->jobs as $job)
                                    <div class="card">
                                        <div class="card-header bg-indigo">
                                            <small>{{ $job->jobTitle->title }}</small>
                                            <span
                                                class="float-right"><small>{{ \Carbon\Carbon::parse($job->created_at)->format('Y-m-d') }}</small></span>
                                        </div>
                                        @if (count($job->forms) > 0)
                                            <div class="card-body">
                                                <div id="accordion">
                                                    @foreach ($job->forms as $form)
                                                        <div @if(!jobFormExists($job->id, $form->id)) class="card card-warning" @else class="card card-success" @endif>
                                                            <div class="card-header">
                                                                <small>
                                                                    <a data-toggle="collapse" href="#accordianjob{{ $job->id }}form{{ $form->id }}">
                                                                        {{ $form->title }}
                                                                    </a>
                                                                </small>
                                                                <span class="float-right">
                                                                    @if(jobFormExists($job->id, $form->id))
                                                                    <a href="{{ route('jobs.download.job-form', ['jobid' => $job->id, 'formid' => $form->id]) }}"
                                                                        class="btn btn-tool">
                                                                        <i class="fas fa-download"></i>
                                                                    </a>
                                                                    @endif
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-tool" onclick="confirmDeleteJobForm('{{ route('customers.delete-jobform', ['job_id' => $job->id, 'redirect' => 'customer','form_id' => $form->id]) }}');">
                                                                        <i class="fas fa-trash"></i>
                                                                </a>
                                                                </span>
                                                            </div>
                                                            @if(!jobFormExists($job->id, $form->id))
                                                            <div id="accordianjob{{ $job->id }}form{{ $form->id }}"
                                                                class="collapse" data-parent="#accordion">
                                                                <div class="card-body">
                                                                    <form method="POST" id="job{{ $job->id }}Form{{ $form->id }}"
                                                                        action="{{ route('jobs.save.job-form', $job->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <input type="hidden" name="job_form_id" value="{{ $form->id }}">
                                                                        <input type="hidden" name="redirect" value="customer">
                                                                        <div class="card-body">
                                                                            @foreach ($form->questions as $question)
                                                                                @php
                                                                                    $job_form_answer = \App\Models\JobFormAnswer::where('job_id', $job->id)
                                                                                        ->where('job_form_id', $form->id)
                                                                                        ->where('job_form_question_id', $question->id)
                                                                                        ->first();
                                                                                @endphp
                                                                                <div class="form-group">

                                                                                    <label
                                                                                        for="answer-{{ $question->id }}">{{ $question->question }}</label><br>

                                                                                    @if ($question->type == 'text')
                                                                                        <input type="text" class="form-control form-control-sm"
                                                                                            id="answer-{{ $question->id }}"
                                                                                            name="question[{{ $question->id }}][answer]"
                                                                                            value="{{ $job_form_answer->answer ?? '' }}"
                                                                                            placeholder="Write Answer here">
                                                                                    @endif

                                                                                    @if ($question->type == 'textarea')
                                                                                        <textarea class="form-control form-control-sm" id="answer-{{ $question->id }}"
                                                                                            name="question[{{ $question->id }}][answer]" rows="3" placeholder="Write Answer here">{{ $job_form_answer->answer ?? '' }}</textarea>
                                                                                    @endif

                                                                                    @if ($question->type == 'checkbox')
                                                                                        @foreach ($question->options as $option)
                                                                                            <div class="form-check form-check-inline"
                                                                                                id="answer-{{ $question->id }}">
                                                                                                <input class="form-check-input" type="checkbox"
                                                                                                    id="option-{{ $option->id }}"
                                                                                                    value="{{ $option->id }}"
                                                                                                    name="question[{{ $question->id }}][answer][]"
                                                                                                    @isset($job_form_answer->answer_options) {{ in_array($option->id, $job_form_answer->answer_options) ? 'checked' : '' }} @endisset>
                                                                                                <label class="form-check-label"
                                                                                                    id="option-{{ $option->id }}">{{ $option->option }}</label>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    @endif

                                                                                    @if ($question->type == 'radio')
                                                                                        @foreach ($question->options as $option)
                                                                                            <div class="form-check form-check-inline"
                                                                                                id="answer-{{ $question->id }}">
                                                                                                <input class="form-check-input" type="radio"
                                                                                                    id="option-{{ $option->id }}"
                                                                                                    value="{{ $option->id }}"
                                                                                                    name="question[{{ $question->id }}][answer]"
                                                                                                    @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'checked' : '' }} @endisset>
                                                                                                <label
                                                                                                    class="form-check-label">{{ $option->option }}</label>
                                                                                            </div>
                                                                                        @endforeach
                                                                                    @endif

                                                                                    @if ($question->type == 'dropdown')
                                                                                        <select class="form-control form-control-sm"
                                                                                            id="answer-{{ $question->id }}"
                                                                                            name="question[{{ $question->id }}][answer]">
                                                                                            <option value="">Choose One</option>
                                                                                            @foreach ($question->options as $option)
                                                                                                <option value="{{ $option->id }}"
                                                                                                    @isset($job_form_answer->answer) {{ $option->id == $job_form_answer->answer ? 'selected' : '' }} @endisset>
                                                                                                    {{ $option->option }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    @endif
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="card-footer text-right">
                                                                            <button type="submit"
                                                                                form="job{{ $job->id }}Form{{ $form->id }}"
                                                                                class="btn btn-sm btn-danger"><i class="fas fa-save"></i>
                                                                                Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            @endif
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @else
                                            <div class="card-footer p-0">
                                                <p class="text-center mt-3">
                                                    <small>{{ __('No Job Form found.') }}</small>
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <div class="card-footer p-0">
                                <p class="text-center mt-3"><small>{{ __('No Jobs found.') }}</small></p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card card-widget widget-user-2">
                <div class="card-header bg-dark">
                    <small>Uploaded Document</small>
                </div>
                <div class="card-footer p-0">
                    <ul class="nav flex-column">
                        @forelse($customer->documents as $document)
                            <li class="nav-item">
                                <a href="{{ $document->path }}" class="nav-link text-info" download="">
                                    {{ $document->document }} <span
                                        class="float-right badge bg-primary">{{ $document->created_at }}</span>
                                </a>
                                <a class="nav-link text-info" href="javascript:void(0)"
                                    onclick="confirmDocumentDelete({{ $document->id }})"><span
                                        class="badge bg-danger"><i
                                            class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;Delete</span></a>

                            </li>
                        @empty
                            <p class="text-center mt-3"><small>{{ __('No Documents uploaded') }}</small></p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Documents Tab End --}}
