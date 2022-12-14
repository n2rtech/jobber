@extends('layouts.front')
@section('content')
    <!-- Wizard with validation -->
    <div class="page-content">
        <div class="content-wrapper">
            <div class="content-inner">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">{{ $external_form->title }}</h6>
                    </div>
                    @if ($external_form->type == 'single')
                        @include('forms.types.single')
                    @else
                        @include('forms.types.multiple')
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
