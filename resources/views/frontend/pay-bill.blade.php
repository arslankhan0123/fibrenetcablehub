@extends('layouts.landing.main')
@section('title', 'Pay Your Internet or TV Bill | FibreNetCableHub')
@section('content')
<section id="hero" class="hero section dark-background pay-bill-hero pay-bill-hero-title">
    <div class="container" data-aos="fade-up">
        <span class="hero-eyebrow"><i class="bi bi-receipt"></i> INDEPENDENT BILLING SUPPORT</span>
        <h1>Pay Your Internet or TV Bill <span>Fast, Secure, Independent Support</span></h1>
    </div>
</section>

<section class="pay-bill-content section">
    <div class="container">
        <div class="pay-bill-plain">
            <p>Get quick and reliable support for your internet, mobile, or TV bill payments. Speak with a real U.S.-based billing expert — no long wait times.</p>

            <div class="pay-bill-actions">
                <a class="btn-get-started" href="tel:{{ config('site.contact.phone_link') }}"><i class="bi bi-telephone"></i> Call Now: {{ config('site.contact.phone_display') }}</a>
            </div>

            <h2>What We Do</h2>
            <p>At FibreNetCableHub, we help you pay your monthly bills securely and fast. Whether it’s cable, internet, or mobile — our agents make it simple. We’re not affiliated with any one provider; we work independently to connect you with reliable support.</p>

            <h2>What We Can Help You With</h2>
            <ul>
                <li>Pay your internet, mobile, or TV bill</li>
                <li>Review charges and account balance</li>
                <li>Help accessing your online account</li>
                <li>Update payment info or billing details</li>
                <li>Speak to a real person — no robots</li>
            </ul>

            <h2>Why Choose FibreNetCableHub?</h2>
            <ul>
                <li>Live U.S. Billing Agents</li>
                <li>Fast Payment Help</li>
                <li>No Long Waits</li>
                <li>Private &amp; Secure</li>
                <li>Available Mon–Sat, 9AM–6PM EST</li>
            </ul>

            <h2>How It Works</h2>
            <ol>
                <li>Dial <a href="tel:{{ config('site.contact.phone_link') }}">{{ config('site.contact.phone_display') }}</a></li>
                <li>Tell us your provider name</li>
                <li>We’ll walk you through payment help on the call</li>
            </ol>

            <p class="pay-bill-plain-disclaimer"><strong>Disclaimer:</strong> FibreNetCableHub is an independent billing support service and is not affiliated with Verizon, Spectrum, AT&amp;T, or any specific provider. All trademarks belong to their respective owners.</p>
        </div>
    </div>
</section>
@endsection
