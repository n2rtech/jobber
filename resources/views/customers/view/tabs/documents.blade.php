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
                        <div class="card-footer p-0">
                            @forelse(savedjobForms($customer->id) as $job)

                            <ul class="nav flex-column">
                                @foreach ($job->forms as $form)
                                @if(jobFormExists($job->id,$form->id))

                                    <li class="nav-item">
                                        <a href="{{ route('jobs.view.job-form', ['jobid' => $job->id, 'formid' => $form->id]) }}" class="nav-link text-info">
                                            {{ $form->title }} <span
                                                class="float-right badge bg-primary">{{ $form->created_at }}</span>
                                        </a>
                                        <a class="nav-link text-info" href="javascript:void(0)"
                                        onclick="confirmDeleteJobForm('{{ route('customers.delete-jobform', ['job_id' => $job->id, 'redirect' => 'customer','form_id' => $form->id]) }}');"><span
                                                class="badge bg-danger"><i
                                                    class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;Delete</span></a>

                                    </li>

                                    @endif
                                    @endforeach
                                </ul>
                            @empty
                                <p class="text-center mt-3"><small>{{ __('No Saved Job Forms found') }}</small></p>
                            @endforelse
                        </div>
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
