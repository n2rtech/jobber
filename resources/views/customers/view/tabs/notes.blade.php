{{-- Notes Tab Start --}}

<div class="tab-pane fade active show" id="customer-notes" role="tabpanel"
aria-labelledby="customer-notes-tab">

<div class="card card-widget widget-user-2">
    <div class="card-body card-comments cardforResponsive">
        @forelse($customer->allnotes as $note)
        <div class="card-comment">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <span class="noteDate" style="font-weight: 600">{{ $note->created_at }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                </div>
                <div class="col-sm-5 col-6">
                    <div class="float-right noteUser">
                        <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">
                        &nbsp; {{  $note->user->name }}
                    </div>
                </div>
                <div class="col-sm-12">
                    {{ $note->note }}
                </div>
            </div>
        </div>
        @if($loop->iteration == 5)
        @break
        @endif
        @empty
        <div class="card-comment">
            <p class="text-center mt-4">No Notes Added.</p>
        </div>
        @endforelse

    </div>

</div>
@if(count($customer->allnotes) > 5)
                            <div class="col-sm-12 text-center">
                                <a href="{{ route('customers.all-notes', $customer->id) }}" class="btn btn-indigo">View All <i
                                    class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        @endif
</div>

{{-- Notes Tab End --}}
