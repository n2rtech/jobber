@extends('layouts.app')
@section('title', 'View Job Details')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-sm-7 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 class="visit-card-title">VISIT</h3>
                        <div class="card-tools">
                            <a href="{{ route('schedules.index') }}" class="btn btn-tool">
                                <i class="fas fa-close"></i>
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
                                <button class="btn btn-sm btn-block btn-dark mt-2">Mark Complete</button>
                            </div>
                            <div class="col-sm-6" style="position: relative">
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
                                <button style="position: absolute;bottom: 0;left: 0;"
                                    class="btn btn-sm btn-block btn-outline-dark mt-4">More Actions</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-header bg-dark p-0 pt-1" style="border-radius: 0px;">
                        <ul class="nav nav-tabs" style="border-bottom: none;" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item" style="width: 33.33%">
                                <a class="nav-link active" id="custom-tabs-one-info-tab" data-toggle="pill"
                                    href="#custom-tabs-one-info" role="tab" aria-controls="custom-tabs-one-info"
                                    aria-selected="true">Info</a>
                            </li>
                            <li class="nav-item" style="width: 33.33%">
                                <a class="nav-link" id="custom-tabs-one-notes-tab" data-toggle="pill"
                                    href="#custom-tabs-one-notes" role="tab" aria-controls="custom-tabs-one-notes"
                                    aria-selected="false">Notes</a>
                            </li>
                            <li class="nav-item" style="width: 33.33%">
                                <a class="nav-link" id="custom-tabs-one-jobforms-tab" data-toggle="pill"
                                    href="#custom-tabs-one-jobforms" role="tab" aria-controls="custom-tabs-one-jobforms"
                                    aria-selected="false">Job Forms</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade active show" id="custom-tabs-one-info" role="tabpanel"
                                aria-labelledby="custom-tabs-one-info-tab">
                                <span class="text-dark"> <strong>Instructions</strong></span>
                                <p class="text-dark">{{ $job->instructions }}</p>
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="text-left" width="33.33%">Job</th>
                                            <th width="33.33%">Team</th>
                                            <th class="text-right">Reminder</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-left">
                                                <small> Job Title&nbsp;: {{ $job->jobTitle->title }}</small>
                                                <br />
                                                <small> Job ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                    #{{ $job->id }}</small>
                                            </td>
                                            <td>
                                                <select name="team" id="team" class="form-control form-control-sm"
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
                                <hr>
                                <span class="text-dark"> <strong>Items Line</strong></span>
                                <table class="table table-sm mt-3" id="line_items">
                                    <thead>
                                        <tr>
                                            <th width="40%">{{ __('Product / Service') }}</th>
                                            <th class="text-right">{{ __('Quantity') }}</th>
                                            <th class="text-right">{{ __('Unit Price') }}</th>
                                            <th class="text-right">{{ __('Total') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($job->products as $key => $product)
                                        <tr id="item-row{{ $key }}">
                                            <td>
                                                <select name="product[{{ $key }}][product]" id="product{{ $key }}" class="form-control form-control-sm" readonly>
                                                    <option value="">Select Product</option>
                                                        @foreach($products as $row_product)
                                                            <option value="{{ $row_product->id }}" @if($row_product->id == $product->product_id) selected @endif data-unitprice="{{ $row_product->unit_price }}" data-description="{{ $row_product->description }}">{{ $row_product->name }}</option>
                                                        @endforeach
                                                </select>
                                                {{-- <textarea name="product[{{ $key }}][description]" id="description{{ $key }}" rows="2" placeholder="Description"
                                                    class="form-control form-control-sm mt-1" readonly>{{ $product->description }}</textarea> --}}
                                            </td>
                                            <td>
                                                <input type="number"
                                                    class="form-control form-control-sm text-align-right"
                                                    id="quantity{{ $key }}" name="product[{{ $key }}][quantity]" placeholder="Quantity" readonly min="1" value="{{ $product->quantity }}">
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-sm">€</span>
                                                    </div>
                                                    <input type="number"
                                                        class="form-control form-control-sm text-align-right"
                                                        id="unit_price{{ $key }}" name="product[{{ $key }}][unit_price]"
                                                        placeholder="Unit Price" readonly value="{{ $product->unit_price }}" min="0" step="any" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-sm">€</span>
                                                    </div>
                                                    <input type="number"
                                                        class="form-control form-control-sm text-align-right totalpriceinput"
                                                        id="total{{ $key }}" name="product[{{ $key }}][total]"
                                                        placeholder="Total" value="{{ $product->total }}" min="0" step="any" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-notes" role="tabpanel"
                                aria-labelledby="custom-tabs-one-notes-tab">
                                <div class="row">
                                    <div class="col-sm-12">
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
                                                <button type="submit" class="btn btn-success" form="documentUploadForm">{{ __('Add Note') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="text-center">
                                        <label for="photos">{{ __('Archived Notes') }}</label>
                                        </div>
                                        <div class="card card-widget widget-user-2">
                                            <div class="card-body card-comments">
                                                @forelse($job->jobnotes as $note)
                                                <div class="card-comment">

                                                    <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">

                                                    <div class="comment-text">
                                                        <span class="username">
                                                            {{  $note->user->name }}
                                                            <span class="text-muted float-right">{{ $note->created_at }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                                                        </span>
                                                        {{ $note->note }}
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
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-jobforms" role="tabpanel"
                                aria-labelledby="custom-tabs-one-jobforms-tab">
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
        $(document).ready(function() {
            $('.content-wrapper').css('background-color', '#000000a3')
        });

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
@endpush
