@extends('layouts.landing.main')
@section('title', 'Pay a Bill | FibreNetCableHub')
@section('content')
<section id="hero" class="hero section dark-background pay-bill-hero">
    <div class="container">
        <div class="pay-bill-hero-copy" data-aos="fade-up">
            <span class="hero-eyebrow"><i class="bi bi-receipt"></i> BILL PAYMENT SUPPORT</span>
            <h1>Help with your <span>internet or TV bill.</span></h1>
            <p>Get clear guidance for internet, cable TV, mobile, and other eligible bill payments. We can help you understand the steps and connect with the right provider channel.</p>
            <div class="pay-bill-actions">
                <a class="btn-get-started" href="tel:{{ config('site.contact.phone_link') }}"><i class="bi bi-telephone"></i> Call {{ config('site.contact.phone_display') }}</a>
            </div>
            <div class="pay-bill-trust"><i class="bi bi-shield-check"></i> Never share passwords or full card details.</div>
        </div>
        <div class="pay-bill-hero-art" aria-hidden="true">
            <div class="pay-bill-art-orbit orbit-one"></div>
            <div class="pay-bill-art-orbit orbit-two"></div>
            <div class="pay-bill-receipt"><i class="bi bi-receipt-cutoff"></i><span></span><span></span><span></span><b><i class="bi bi-check-lg"></i></b></div>
            <div class="pay-bill-art-chip chip-card"><i class="bi bi-credit-card-2-front"></i></div>
            <div class="pay-bill-art-chip chip-wifi"><i class="bi bi-wifi"></i></div>
            <div class="pay-bill-art-chip chip-tv"><i class="bi bi-tv"></i></div>
        </div>
    </div>
</section>

<section class="pay-bill-content section">
    <div class="container">
        <div class="pay-bill-intro" data-aos="fade-up">
            <span class="service-kicker">HERE TO MAKE IT CLEAR</span>
            <h2>Bill payment guidance, made simple</h2>
            <p>FibreNetCableHub can help you understand common payment steps and find the appropriate billing channel. Payment availability and processing are handled by the biller or its authorized payment provider.</p>
        </div>

        <div class="pay-bill-grid">
            <article class="pay-bill-card" data-aos="fade-up">
                <div class="pay-bill-card-icon"><i class="bi bi-list-check"></i></div>
                <h3>How we can help</h3>
                <ul>
                    <li>Understand where to find your account number and current balance.</li>
                    <li>Locate the biller’s official website, phone line, or authorized payment option.</li>
                    <li>Review common payment methods and the information you may need.</li>
                    <li>Know what confirmation or receipt to save after you pay.</li>
                    <li>Find the right next step if a payment is delayed or not showing on your account.</li>
                </ul>
            </article>

            <article class="pay-bill-card" data-aos="fade-up" data-aos-delay="100">
                <div class="pay-bill-card-icon"><i class="bi bi-receipt"></i></div>
                <h3>Bill types and options</h3>
                <p>Depending on your biller and location, you may be able to get guidance for:</p>
                <ul>
                    <li>Home internet and broadband bills</li>
                    <li>Cable television and TV subscriptions</li>
                    <li>Mobile phone and wireless bills</li>
                    <li>Home phone and other listed utility bills</li>
                </ul>
                <p>Accepted payment methods, fees, and processing times are set by the biller or payment provider. Check those details before submitting a payment.</p>
            </article>

            <article class="pay-bill-card" data-aos="fade-up" data-aos-delay="150">
                <div class="pay-bill-card-icon"><i class="bi bi-shield-lock"></i></div>
                <h3>Keep your information safe</h3>
                <ul>
                    <li>Use the biller’s verified website or an authorized payment channel.</li>
                    <li>Check the account number and amount carefully before confirming.</li>
                    <li>Do not share your account password, one-time passcode, or full card details with us.</li>
                    <li>Keep your payment receipt and reference number for your records.</li>
                </ul>
            </article>
        </div>

        <div class="pay-bill-steps" data-aos="fade-up">
            <div class="pay-bill-steps-heading">
                <span class="service-kicker">THREE SIMPLE STEPS</span>
                <h2>How it works</h2>
                <p>We guide you to the appropriate payment channel; the biller or authorized processor handles the payment itself.</p>
            </div>
            <ol>
                <li><span>1</span><div><strong>Contact our team</strong><p>Call us and tell us which service or biller you need help with.</p></div></li>
                <li><span>2</span><div><strong>Review your options</strong><p>We’ll help identify the relevant official billing channel and explain the next steps.</p></div></li>
                <li><span>3</span><div><strong>Pay through the biller</strong><p>Complete and confirm your payment directly with the biller or its authorized processor.</p></div></li>
            </ol>
        </div>

        <div class="pay-bill-disclaimer" data-aos="fade-up">
            <i class="bi bi-info-circle"></i>
            <div><h3>Independent service provider</h3><p>FibreNetCableHub is an independent service provider. We are not affiliated with or endorsed by Verizon, AT&amp;T, Spectrum, Cox, Xfinity, or any other telecommunications provider. Provider names and trademarks belong to their respective owners. We do not post payments to provider accounts; payment completion and posting are managed by the biller or its authorized payment processor.</p></div>
        </div>

        <div class="pay-bill-contact" data-aos="zoom-in">
            <div><span class="service-kicker">NEED A HAND?</span><h2>Talk with our team</h2><p>We’re ready to point you toward the right next step.</p></div>
            <div class="pay-bill-contact-actions">
                <a class="btn-get-started" href="tel:{{ config('site.contact.phone_link') }}"><i class="bi bi-telephone"></i> {{ config('site.contact.phone_display') }}</a>
            </div>
        </div>
    </div>
</section>
@endsection
