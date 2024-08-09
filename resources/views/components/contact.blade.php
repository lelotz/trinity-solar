@extends('layouts.main',['title' => 'Contact'])

@section('content')
    <!-- Contact Start -->
    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">{{ __('site.contact_us') }}</h6>
                        <h1 class="mb-4">{{ __('site.feel_free') }}</h1>
                        <p class="mb-4">{{ __('site.contact_us_sub') }}<a href="https://trinitysolar.co.tz">{{ __('site.download_broch') }}</a>.</p>
                        @livewire('contact-form')
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;" src="{{ env('CLIENT_EMBED_LOCATION') }}" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
