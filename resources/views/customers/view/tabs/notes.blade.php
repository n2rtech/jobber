{{-- Notes Tab Start --}}
<style>
    .odd{ background-color: rgba(0,0,0,.05);;}
    .even{ background:#fff;}
</style>
<div class="tab-pane fade active show" id="customer-notes" role="tabpanel"
aria-labelledby="customer-notes-tab">

<div class="card card-widget widget-user-2">
    <div class="card-body card-comments cardforResponsive">
        @forelse($customer->allnotes as $note)
        @php
        ($loop->iteration%2 == 0) ? $cls = "even" : $cls = "odd";
        @endphp
        <div class="card-comment {{ $cls }}">
            <div class="row">
                <div class="col-sm-7 col-6">
                    <span class="noteDate" style="font-weight: 600">{{ \Carbon\Carbon::parse($note->created_at)->format('d-m-Y h:i') }} <br/>@isset($note->file)<span class="badge badge-warning text-dark"> <a href="{{ $note->path }}" download>{{ $note->file }}</a></span>@endisset</span>
                </div>
                <div class="col-sm-5 col-6">
                    <div class="float-right noteUser">
                        <img class="img-circle img-sm" src="{{ asset('dist/img/avatar.png') }}" alt="User Image">
                        &nbsp; {{ isset($note->user_id) ? $note->user->name : 'Customer' }}
                    </div>
                </div>
                <div class="col-sm-12">
                    {!! $note->note !!}
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
