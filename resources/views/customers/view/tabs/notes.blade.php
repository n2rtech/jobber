{{-- Notes Tab Start --}}

<div class="tab-pane fade active show" id="customer-notes" role="tabpanel"
aria-labelledby="customer-notes-tab">

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

{{-- Notes Tab End --}}
