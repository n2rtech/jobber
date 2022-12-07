<div class="card-header p-0 pt-1 customer-tabs">
    <ul class="nav nav-tabs nav-fill" id="external-formtab" role="tablist">
        @foreach ($external_form->tabs as $key => $tab)
            <li class="nav-item">
                @if ($loop->first)
                    <a class="nav-link active" id="external-form{{ $key }}-tab" data-toggle="pill"
                        href="#external-form{{ $key }}" role="tab"
                        aria-controls="external-form{{ $key }}" aria-selected="true">{{ $tab->tab }}
                    </a>
                @else
                    <a class="nav-link" id="external-form{{ $key }}-tab" data-toggle="pill"
                        href="#external-form{{ $key }}" role="tab"
                        aria-controls="external-form{{ $key }}" aria-selected="false">{{ $tab->tab }}
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
</div>
