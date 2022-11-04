{{-- Documents Tab Start --}}
<div class="tab-pane fade" id="customer-documents" role="tabpanel" aria-labelledby="customer-documents-tab">
    <div class="card card-widget widget-user-2">
        <div class="card-footer p-0">
            <ul class="nav flex-column">
                @forelse($customer->documents as $document)
                <li class="nav-item">
                    <a href="{{ $document->path }}" class="nav-link text-info" download="">
                      {{ $document->document }} <span class="float-right badge bg-primary">{{ $document->created_at }}</span>
                    </a>
                    <a class="nav-link text-info" href="{{ route('customer.delete-document', $document->id) }}"><span class="badge bg-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;&nbsp;Delete</span></a>

                  </li>
                @empty
                    <p class="text-center mt-3">{{ __('No Documents uploaded') }}</p>
                @endforelse
            </ul>
        </div>
    </div>
 </div>
{{-- Documents Tab End --}}
