@extends('layouts.app')
@section('title', 'Show Customer')
@section('head')
    <link rel="stylesheet" href="{{ asset('plugins/simple-lightbox/simple-lightbox.css') }}" />
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ __('Customer Details') }}</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <form id='delete-form{{ $customer->id }}'
                        action='{{ route('customers.destroy', $customer) }}' method='POST'>
                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                        <input type='hidden' name='_method' value='DELETE'>
                    </form>
                    <a href="javascript:void(0)" onclick="confirmDelete({{ $customer->id }})"
                        class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                        <a href="{{ route('customers.index') }}" class="btn btn-dark">
                            <i class="btn-icon fas fa-undo"></i> {{ __('Back') }}
                        </a>
                        <a href="javascript:void(0)" onclick="confirmAccept({{ $customer->id }})" class="btn btn-success">
                            <i class="btn-icon fas fa-user-plus"></i> {{ __('Add as Sales Lead') }}
                        </a>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-pink">
                        <i class="btn-icon fas fa-pen"></i> {{ __('Edit Customer') }}
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="card">
            <div class="card-header bg-dark" style="padding: 7px 17px;">
                <h4 class="card-title mt-3">{{ __('Customer Name :') }} <strong>{{ $customer->name }}</strong></h4>
                <div class="card-tools text-right">
                    <small>{{ __('Added On') }}</small><br/>
                    <strong>{{ \Carbon\Carbon::parse($customer->created_at)->format('g:i A') }} | {{ \Carbon\Carbon::parse($customer->created_at)->format('d, M Y') }}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="address_1" class="col-sm-3 col-form-label">{{ __('Address 1') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_1" name="address_1"
                                            placeholder="Enter Street Address 1" value="{{ old('address_1', $customer->address_1) }}" readonly>
                                        @error('address_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address_2" class="col-sm-3 col-form-label">{{ __('Address 2') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address_2" name="address_2"
                                            placeholder="Enter Street Address 2" value="{{ old('address_2', $customer->address_2) }}" readonly>
                                        @error('address_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="city" class="col-sm-3 col-form-label">{{ __('City') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="city" name="city"
                                            placeholder="Enter City" value="{{ old('city', $customer->city) }}" readonly>
                                        @error('city')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state" class="col-sm-3 col-form-label">{{ __('State') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="state" name="state"
                                            placeholder="Enter State" value="{{ old('state', $customer->state) }}" readonly>
                                        @error('state')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="country" class="col-sm-3 col-form-label">{{ __('Country') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="country" name="country"
                                            placeholder="Enter Country" value="{{ old('country', $customer->country) }}" readonly>
                                        @error('country')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="directions" class="col-sm-3 col-form-label">{{ __('Direction') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="directions" name="directions" placeholder="Enter Directions" readonly>{{ old('directions', $customer->directions) }}</textarea>
                                        @error('directions')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="eir_code" class="col-sm-3 col-form-label">{{ __('Eircode') }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="eir_code" name="eir_code"
                                            placeholder="Enter Eircode" value="{{ old('eir_code', $customer->eir_code) }}" readonly>
                                        @error('eir_code')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">{{ __('Email') }}</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter Email" value="{{ old('email', $customer->email) }}" readonly>
                                        @error('email')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 col-form-label">{{ __('Phone') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="phone" name="phone"
                                            placeholder="Enter Phone" value="{{ old('phone', $customer->phone) }}" readonly>
                                        @error('phone')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="phone_name" name="phone_name"
                                            placeholder="Enter Name" value="{{ old('phone_name', $customer->phone_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_1" class="col-sm-3 col-form-label">{{ __('Mobile 1') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_1" name="mobile_1"
                                            placeholder="Enter Mobile 1" value="{{ old('mobile_1', $customer->mobile_1) }}" readonly>
                                        @error('mobile_1')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_1_name" name="mobile_1_name"
                                            placeholder="Enter Name" value="{{ old('mobile_1_name', $customer->mobile_1_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mobile_2" class="col-sm-3 col-form-label">{{ __('Mobile 2') }}</label>
                                    <div class="col-sm-5">
                                        <input type="tel" class="form-control" id="mobile_2" name="mobile_2"
                                            placeholder="Enter Mobile 2" value="{{ old('mobile_2', $customer->mobile_2) }}" readonly>
                                        @error('mobile_2')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="mobile_2_name" name="mobile_2_name"
                                            placeholder="Enter Name" value="{{ old('mobile_2_name', $customer->mobile_2_name) }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="note" class="col-sm-3 col-form-label">{{ __('Notes') }}</label>
                                    <div class="col-sm-9">
                                        <textarea rows="5" class="form-control" id="note" name="note" placeholder="Enter Note" readonly>{{ old('note') }}</textarea>
                                        @error('note')
                                            <span id="name-error" class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="card card-dark card-tabs">
                      <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-one-estimates-tab" data-toggle="pill" href="#custom-tabs-one-estimates" role="tab" aria-controls="custom-tabs-one-estimates" aria-selected="true">Estimates</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-invoices-tab" data-toggle="pill" href="#custom-tabs-one-invoices" role="tab" aria-controls="custom-tabs-one-invoices" aria-selected="false">Invoices</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-photos-tab" data-toggle="pill" href="#custom-tabs-one-photos" role="tab" aria-controls="custom-tabs-one-photos" aria-selected="false">Photos</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-reminders-tab" data-toggle="pill" href="#custom-tabs-one-reminders" role="tab" aria-controls="custom-tabs-one-reminders" aria-selected="false">Reminders</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-notes-tab" data-toggle="pill" href="#custom-tabs-one-notes" role="tab" aria-controls="custom-tabs-one-notes" aria-selected="false">Calls / Notes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-archive-tab" data-toggle="pill" href="#custom-tabs-one-archive" role="tab" aria-controls="custom-tabs-one-archive" aria-selected="false">Archive Notes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-documents-tab" data-toggle="pill" href="#custom-tabs-one-documents" role="tab" aria-controls="custom-tabs-one-documents" aria-selected="false">Documents</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-one-letters-tab" data-toggle="pill" href="#custom-tabs-one-letters" role="tab" aria-controls="custom-tabs-one-letters" aria-selected="false">Letters</a>
                          </li>
                        </ul>
                      </div>
                      <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                          <div class="tab-pane fade active show" id="custom-tabs-one-estimates" role="tabpanel" aria-labelledby="custom-tabs-one-estimates-tab">
                            @if(count($customer->estimates) > 0)
                            <table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('Estimate No.') }}</th>
                                        <th>{{ __('Estimate Date') }}</th>
                                        <th>{{ __('Total') }}</th>
                                        <th>{{ __('Paid') }}</th>
                                        <th>{{ __('Balance') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th>{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer->estimates as $estimate)
                                        <tr>
                                            <td>#{{ $estimate->id}}</td>
                                            <td>{{ $estimate->estimate_date}}</td>
                                            <td>£ {{ $estimate->total }}</td>
                                            <td>£ {{ $estimate->paid }}</td>
                                            <th>£ {{ $estimate->total - $estimate->paid }}</th>
                                            <td>
                                                @if ($estimate->status == 'created')
                                                    <span class="badge bg-info">{{ ucfirst($estimate->status) }}</span>
                                                @endif
                                                @if ($estimate->status == 'sent')
                                                    <span class="badge bg-success">{{ ucfirst($estimate->status) }}</span>
                                                @endif
                                                @if ($estimate->status == 'expired')
                                                    <span class="badge bg-danger">{{ ucfirst($estimate->status) }}</span>
                                                @endif
                                                @if ($estimate->status == 'cancelled')
                                                    <span class="badge bg-warning">{{ ucfirst($estimate->status) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu" style="">
                                                      <a class="dropdown-item" href="{{ route('estimates.edit', $estimate->id) }}"> Edit</a>
                                                      <a class="dropdown-item" href="{{ route('estimates.show', $estimate->id) }}"> View</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Send as Email</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Download PDF</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Print</a>
                                                      <a class="dropdown-item" href="javascript:void(0)" onclick="confirmEstimateDelete({{ $estimate->id }})"> Delete</a>
                                                      <form id='delete-estimateform{{ $estimate->id }}'
                                                        action='{{ route('estimates.destroy', $estimate->id) }}' method='POST'>
                                                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                        <input type='hidden' name='_method' value='DELETE'>
                                                    </form>
                                                    </div>
                                                  </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                             <p class="text-center mt-4"> No Estimate Found</p>
                             @endif
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-invoices" role="tabpanel" aria-labelledby="custom-tabs-one-invoices-tab">
                            @if(count($customer->invoices) > 0)
                            <table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>{{ __('Invoice No.') }}</th>
                                        <th>{{ __('Invoice Date') }}</th>
                                        <th>{{ __('Total') }}</th>
                                        <th>{{ __('Paid') }}</th>
                                        <th>{{ __('Balance') }}</th>
                                        <th>{{ __('Status') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer->invoices as $invoice)
                                        <tr>
                                            <td>#{{ $invoice->id}}</td>
                                            <td>{{ $invoice->invoice_date}}</td>
                                            <td>£ {{ $invoice->total }}</td>
                                            <td>£ {{ $invoice->paid }}</td>
                                            <th>£ {{ $invoice->total - $invoice->paid }}</th>
                                            <td>
                                                @if ($invoice->status == 'paid')
                                                    <span class="badge bg-success">{{ ucfirst($invoice->status) }}</span>
                                                @endif
                                                @if ($invoice->status == 'unpaid')
                                                    <span class="badge bg-danger">{{ ucfirst($invoice->status) }}</span>
                                                @endif
                                                @if ($invoice->status == 'cancelled')
                                                    <span class="badge bg-warning">{{ ucfirst($invoice->status) }}</span>
                                                @endif
                                                @if ($invoice->status == 'partial')
                                                    <span class="badge bg-info">{{ ucfirst($invoice->status) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-light dropdown-toggle dropdown-hover" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu" style="">
                                                      <a class="dropdown-item" href="{{ route('invoices.edit', $invoice->id) }}"> Edit</a>
                                                      <a class="dropdown-item" href="{{ route('invoices.show', $invoice->id) }}"> View</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Send as Email</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Download PDF</a>
                                                      <a class="dropdown-item" href="javascript:void(0)"> Print</a>
                                                      <a class="dropdown-item" href="javascript:void(0)" onclick="confirmInvoiceDelete({{ $invoice->id }})"> Delete</a>
                                                      <form id='delete-invoiceform{{ $invoice->id }}'
                                                        action='{{ route('invoices.destroy', $invoice->id) }}' method='POST'>
                                                        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                                        <input type='hidden' name='_method' value='DELETE'>
                                                    </form>
                                                    </div>
                                                  </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                             <p class="text-center mt-4"> No Invoice Found</p>
                             @endif
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-photos" role="tabpanel" aria-labelledby="custom-tabs-one-photos-tab">
                            <div class="gallery">
                                @forelse($customer->photos as $photo)
                                    <a href="{{ $photo->path }}" class="big"><img src="{{ $photo->path }}"
                                            alt="{{ $photo->image }}" title="Uploaded On :{{ $photo->created_at }}"
                                            width="150px" height="150px" /></a>
                                @empty
                                    <p class="text-center mt-4">{{ __('No Photos Uploaded') }}</p>
                                @endforelse
                                <div class="clear"></div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-reminders" role="tabpanel" aria-labelledby="custom-tabs-one-reminders-tab">
                            <p class="text-center mt-4"> No Reminders Found</p>
                          </div>
                          <div class="tab-pane fade" id="custom-tabs-one-notes" role="tabpanel" aria-labelledby="custom-tabs-one-notes-tab">
                            <div class="card card-widget widget-user-2">
                                <div class="card-body card-comments">
                                    @forelse($customer->allnotes as $note)
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
                         <div class="tab-pane fade" id="custom-tabs-one-archive" role="tabpanel" aria-labelledby="custom-tabs-one-archive-tab">
                            <div class="card card-widget widget-user-2">
                                <div class="card-body card-comments">
                                    {!! $customer->notes !!}
                                </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="custom-tabs-one-documents" role="tabpanel" aria-labelledby="custom-tabs-one-documents-tab">
                            <div class="card card-widget widget-user-2">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                    <div class="card-footer p-0">
                                        <ul class="nav flex-column">
                                            @forelse($customer->documents as $document)
                                            <li class="nav-item">
                                                <a href="{{ $document->path }}" class="nav-link" download="">
                                                  {{ $document->document }} <span class="float-right badge bg-primary">{{ $document->created_at }}</span>
                                                </a>
                                              </li>
                                            @empty
                                                <p class="text-center mt-4">{{ __('No Documents uploaded') }}</p>
                                            @endforelse
                                        </ul>
                                    </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="custom-tabs-one-letters" role="tabpanel" aria-labelledby="custom-tabs-one-letters-tab">
                            <p class="text-center mt-4"> No Letters Found</p>
                         </div>
                        </div>
                      </div>
                      <!-- /.card -->
                    </div>
                  </div>
            </div>
        </div>
         <div class="card">
            <div class="card-body">
                <div class="col-sm-12 text-center">
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-pink">Edit Customer</a>
                    <a href="{{ route('customer.upload-photos', $customer->id) }}" class="btn btn-orange">Upload Photo</a>
                    <a href="{{ route('customer.upload-documents', $customer->id) }}" class="btn btn-info">Upload Document</a>
                    <a href="{{ route('jobs.create', ['customer_id' => $customer->id]) }}" class="btn btn-warning">New Job</a>
                    <a href="{{ route('customer.add-notes', $customer->id) }}" class="btn btn-success">Add Note</a>
                    <a href="{{ route('invoices.create', ['customer_id' => $customer->id]) }}" class="btn btn-dark">New Invoice</a>
                    <a href="{{ route('estimates.create', ['customer_id' => $customer->id]) }}" class="btn btn-danger">New Estimate</a>
                    <a href="{{ route('customer.send-email', $customer->id) }}" class="btn btn-indigo">Send Email</a>
                </div>
            </div>
         </div>
    </section>
@endsection
@push('scripts')
<script src="{{ asset('plugins/simple-lightbox/simple-lightbox.js') }}"></script>
<script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form'+no).submit();
            }
        })
    };
    function confirmEstimateDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-estimateform'+no).submit();
            }
        })
    };
    function confirmInvoiceDelete(no){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-invoiceform'+no).submit();
            }
        })
    };
</script>
<script type="text/javascript">
    function confirmAccept(id){
        url_string = '{{ route("customers.lead", ":id") }}';
        url = url_string.replace(':id', id);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Add as Sales Lead!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
</script>
@endpush
