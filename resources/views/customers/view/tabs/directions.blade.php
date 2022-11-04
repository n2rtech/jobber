 {{-- directionss Tab Start --}}

 <div class="tab-pane" id="customer-directions" role="tabpanel"
 aria-labelledby="customer-directions-tab">
 <div class="card card-widget widget-user-2">
    <div class="card-body card-comments">
        @isset($customer->directions)
        <div class="card-comment">
            <p class="mt-2">{{ $customer->directions }}</p>
        </div>
        @else
        <div class="card-comment">
            <p class="text-center mt-4">No Directions Added.</p>
        </div>
        @endisset
 </div>
</div>

{{-- directionss Tab End --}}
