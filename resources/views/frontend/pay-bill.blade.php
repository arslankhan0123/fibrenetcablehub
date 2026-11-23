@extends('layouts.landing.main')
@section('title', 'Pay Your Internet or TV Bill | FibreNetCableHub')
@section('content')
<section id="hero" class="hero section dark-background pay-bill-hero pay-bill-hero-title">
    <div class="container" data-aos="fade-up">
        <h1>Pay Your Internet or TV Bill <span>Fast, Secure, Independent Support</span></h1>
    </div>
</section>

<section class="pay-bill-content section">
    <div class="container">
        <div class="pay-bill-plain">
            <p>Fast, dependable help with paying your internet, mobile, or TV bill. Talk to a real billing specialist based in the U.S., without the long hold.</p>

            <div class="pay-bill-actions">
                <a class="btn-get-started" href="tel:{{ config('site.contact.phone_link') }}"><i class="bi bi-telephone"></i> Call Now: {{ config('site.contact.phone_display') }}</a>
            </div>

            <h2>What We Do</h2>
            <p>FibreNetCableHub helps you get your monthly bills paid quickly and safely. Cable, internet, or mobile, our agents keep it easy. We are not tied to any single provider; we operate independently to connect you with support you can rely on.</p>

            <h2>What We Can Help You With</h2>
            <ul>
                <li>Paying your internet, mobile, or TV bill</li>
                <li>Checking your charges and account balance</li>
                <li>Getting into your online account</li>
                <li>Changing your payment info or billing details</li>
                <li>Talking to a real person, not a robot</li>
            </ul>

            <h2>Why Choose FibreNetCableHub?</h2>
            <ul>
                <li>Real Billing Agents in the U.S.</li>
                <li>Quick Help With Payments</li>
                <li>Short Wait Times</li>
                <li>Secure &amp; Confidential</li>
                <li>Open Mon–Sat, 9AM–6PM EST</li>
            </ul>

            <h2>How It Works</h2>
            <ol>
                <li>Call <a href="tel:{{ config('site.contact.phone_link') }}">{{ config('site.contact.phone_display') }}</a></li>
                <li>Let us know who your provider is</li>
                <li>We’ll guide you through your payment while you’re on the line</li>
            </ol>

            <p class="pay-bill-plain-disclaimer"><strong>Disclaimer:</strong> FibreNetCableHub is an independent billing support service with no affiliation to Verizon, Spectrum, AT&amp;T, or any particular provider. All trademarks are the property of their respective owners.</p>
        </div>
    </div>
</section>
@endsection
