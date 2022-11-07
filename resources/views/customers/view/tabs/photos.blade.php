{{-- Photos Tab Start --}}
<div class="tab-pane fade" id="customer-photos" role="tabpanel" aria-labelledby="customer-photos-tab">
    <div class="gallery">
        @forelse($customer->photos as $photo)
        <div class="image-box">
            <a href="{{ $photo->path }}" class="big">
                <img src="{{ $photo->path }}"
                    alt="{{ $photo->image }}" title="Uploaded On :{{ $photo->created_at }}"
                    width="140px" height="140px" />
                </a>

                <a href="javascript:void(0)" onclick="confirmPhotoDelete({{ $photo->id }})" class="delete-image-btn btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i> Delete</a>
        </div>
        @empty
            <p class="text-center mt-3">{{ __('No Photos uploaded') }}</p>
        @endforelse
        <div class="clear"></div>
    </div>
</div>
{{-- Photos Tab End --}}
