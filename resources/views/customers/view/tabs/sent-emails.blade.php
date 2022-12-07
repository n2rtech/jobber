{{-- Sent Emails Tab Start --}}
<div class="tab-pane fade" id="customer-sentemails" role="tabpanel" aria-labelledby="customer-sentemails-tab">
        @if(count($customer->sentEmails) > 0)
        <div class="table-responsive">
            <table id="dataTable" class="table table-sm table-bordered">
                <thead>
                    <tr>
                        <th class="bg-darkblue" style="background: darkblue;color: #fff; font-weight: normal;" width="10%">{{ __('Date Sent') }}</th>
                        <th style="background: darkblue;color: #fff; font-weight: normal;" width="20%">{{ __('Notification Details') }}</th>
                        <th style="background: darkblue;color: #fff; font-weight: normal;">{{ __('Email / Text') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer->sentEmails as $email)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($email->created_at)->format('Y-m-d') }}</td>
                        <td>
                            <span class="badge bg-success">Medium: {{ ucfirst($email->medium) }}</span><br>
                            <span class="badge bg-info">Type: {{ ucfirst($email->type) }}</span><br>
                            <span class="badge bg-danger">Mode: {{ ucfirst($email->mode) }}</span><br>
                            <span class="badge bg-warning">Sender: {{ ucfirst($email->user->name) }}</span>
                        </td>
                        @if($email->type == 'jobs')
                            @if($email->medium == 'email')
                                <td>
                                    <small><strong>Subject: </strong><br>{{ nl2br($email->subject) }}</small><br>
                                    <small><strong>Message:</strong>{!! $email->message !!}</small>
                                </td>
                            @else
                                <td>
                                    <small><strong>Message:</strong>{!! $email->text !!}</small>
                                </td>
                            @endif
                        @endif
                        @if($email->type == 'invoices')
                            @if($email->medium == 'email')
                                <td>
                                    <small><strong>Subject: </strong><br>{{ nl2br($email->subject) }}</small><br>
                                    <small><strong>Message:</strong>{!! $email->message !!}</small><br>
                                    <small><strong>Attachment:</strong><a href="{{ asset('storage/uploads/invoices/'.$email->custom_id.'/invoice.pdf') }}" download=""> <i class="fas fa-download"></i> Download</a></small>
                                </td>
                            @else
                                <td>
                                    <small><strong>Message:</strong>{!! $email->text !!}</small>
                                </td>
                            @endif
                        @endif
                        @if($email->type == 'estimates')
                            @if($email->medium == 'email')
                                <td>
                                    <small><strong>Subject: </strong><br>{{ nl2br($email->subject) }}</small><br>
                                    <small><strong>Message:</strong>{!! $email->message !!}</small><br>
                                    <small><strong>Attachment:</strong><a href="{{ asset('storage/uploads/estimates/'.$email->custom_id.'/estimate.pdf') }}" download=""> <i class="fas fa-download"></i> Download</a></small>
                                </td>
                            @else
                                <td>
                                    <small><strong>Message:</strong>{!! $email->text !!}</small>
                                </td>
                            @endif
                        @endif
                    </tr>
                        {{-- <tr>
                            <td><a href="{{ route('jobs.show', $job->id) }}">#{{ $job->id }}</a></td>
                            <td>{{ \Carbon\Carbon::parse($job->created_at)->format('Y-m-d') }}</td>
                            <td>{{ $job->jobTitle->title }}</td>

                            <td>
                                <ul>
                                    @foreach($job->products as $product)
                                        <li>{{ $product->product->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                @if ($job->scheduled == 'no')
                                    <span class="badge bg-danger">{{ __('No') }}</span>
                                @else
                                    <span class="badge bg-success"> <i class="fas fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('Y-m-d')}}</span>
                                    <br/>
                                    <span class="badge bg-info"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('h:i:s') }}</span>
                                    <br/>
                                    <span class="badge bg-danger"><i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->end)->format('h:i:s') }}</span>
                                    <br/>
                                    <span class="badge bg-yellow"><i class="fas fa-calendar-day"></i>&nbsp;&nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($job->start)->format('l') }}</span>
                                @endif
                            </td>
                            <td>€ {{ $job->total }}</td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-ellipsis-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="{{ route('jobs.edit', $job->id) }}"><i class="fas fa-edit"></i> Edit</a>
                                    <a class="dropdown-item" href="{{ route('jobs.show', $job->id) }}"><i class="fas fa-eye"></i> View</a>
                                    <a class="dropdown-item" href="javascript:void(0)" onclick="confirmDelete({{ $job->id }})"><i class="fas fa-trash-alt"></i> Delete</a>
                                    <form id='delete-form{{ $job->id }}'
                                        action='{{ route('jobs.destroy', $job->id) }}' method='POST'>
                                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                        <input type='hidden' name='_method' value='DELETE'>
                                    </form>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
        @else
            <p class="text-center mt-4">{{ __('No Sent emails found') }}</p>
        @endif
</div>
{{-- Sent Emails Tab End --}}
