 {{-- Archived Tab Start --}}

 <div class="tab-pane" id="customer-archived-notes" role="tabpanel"
 aria-labelledby="customer-archived-notes-tab">
 @isset($customer->notes)
         {!! $customer->notes !!}
@else
    <p class="text-center mt-4">{{ __('No Archive Notes Added') }}</p>
@endisset
</div>

{{-- Archived Tab End --}}
