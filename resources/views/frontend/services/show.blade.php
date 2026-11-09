@extends('layouts.landing.main')
@section('title', $service->title . ' | FibreNetCableHub')
@section('content')
<section id="hero" class="hero section dark-background service-detail-hero">
    <div class="container position-relative">
        <span class="hero-eyebrow">FibreNetCableHub service</span>
        <h1 class="hero-title" data-aos="zoom-in" data-aos-delay="200">
            {{ $service->title }}
        </h1>
        <p>Explore your options, understand what is included, and see how to get started.</p>
    </div>
</section>
<!-- Service Details Section -->
<section id="service-details" class="service-details section">
    <div class="container">
        <div class="service-detail-card" data-aos="fade-up" data-aos-delay="100">
            <div class="service-detail-intro">
                <div>
                    <span class="service-kicker">SERVICE OVERVIEW</span>
                    <h2>{{ $service->title }}</h2>
                    <div class="service-summary">{!! $service->short_description !!}</div>
                </div>
                @if ($service->price !== null)
                    <aside class="service-price-card">
                        <span>Starting price</span>
                        <strong>${{ number_format((float) $service->price, 2) }}</strong>
                        <small>Final price depends on availability and selected options.</small>
                    </aside>
                @endif
            </div>

            <div class="service-description">{!! $service->long_description !!}</div>

            <div class="service-detail-cta">
                <div>
                    <h3>Need help choosing?</h3>
                    <p>Talk with our team about the options available for your needs.</p>
                </div>
                <a href="{{ route('welcome') }}#contact" class="btn-get-started">Contact us <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
