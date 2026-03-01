@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Expertise.css') }}">

    @endpush

@section('content')

<section class="section-container">
    <div class="section-header">
        <h2>How we operate for you</h2>
        <p>We put you first and serve you the best. Whether it be accounting, tax, bookkeeping, home loans, or insurance—we hold your hand and guide you all the way.</p>
    </div>

    <div class="divider">
        <span>⚖️</span>
    </div>

    <div class="services-grid">
        <div class="service-card">
            <div class="image-wrapper">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=600&q=80" alt="Contact">
            </div>
            <div class="card-content">
                <h3>Get in touch</h3>
                <p>Ready to start your journey? Reach out via mail or phone. Our experts are standing by to assist you.</p>
                <a href="/contact" class="card-link">Contact Us</a>
            </div>
        </div>

        <div class="service-card">
            <div class="image-wrapper">
                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?auto=format&fit=crop&w=600&q=80" alt="Consultation">
            </div>
            <div class="card-content">
                <h3>Personal Consultation</h3>
                <p>Book a free 1-on-1 session to discuss your financial goals with a dedicated specialist.</p>
                <a href="/contact" class="card-link">Schedule Now</a>
            </div>
        </div>

        <div class="service-card">
            <div class="image-wrapper">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=600&q=80" alt="Support">
            </div>
            <div class="card-content">
                <h3>Hold your hand</h3>
                <p>We don't just advise; we execute. Experience end-to-end support for your long-term success.</p>
                <a href="/contact" class="card-link">Contact Us</a>
            </div>
        </div>
    </div>
</section>

{{-- 3rd section about looks --}}
<section class="premium-cta">
    <div class="container">
        <div class="content-box">
            <h2>Our mission is to put <span>you first</span>, and serve you best.</h2>
            <p>We’ll be right by your side, guiding you with expert care until your matter is fully settled.</p>

            <a href="/contact" class="btn-modern">
                Get in touch
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
        </div>
    </div>
</section>

{{-- Area of expertise --}}


<div class="container">
    <div class="header-section">
        <h2>Areas of Expertise</h2>
        <p>Professional guidance across all your financial needs.</p>
    </div>

    <div class="services-grid">
        <div class="card">
            <div class="icon-box">📋</div>
            <h3>Accounting</h3>
            <p>Dedicated to providing quality, professional accounting solutions tailored for small and medium businesses.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>

        <div class="card">
            <div class="icon-box">🏛️</div>
            <h3>Taxation</h3>
            <p>From individual tax returns to complex company structures, we handle all taxation matters in one place.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>

        <div class="card">
            <div class="icon-box">🏠</div>
            <h3>Home Loans</h3>
            <p>First home buyers, investment properties, or commercial refinancing—we take care of the details for you.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>

        <div class="card">
            <div class="icon-box">⚖️</div>
            <h3>Bookkeeping</h3>
            <p>Customised, flexible, and cost-effective bookkeeping and payroll solutions for your growing business.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>

        <div class="card">
            <div class="icon-box">🛡️</div>
            <h3>Insurances</h3>
            <p>Personal, life, or general insurance matters—our associated experts are here to guide your protection.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>

        <div class="card">
            <div class="icon-box">🇳🇵</div>
            <h3>Legal Remit</h3>
            <p>Legal remit to Nepal at your fingertips. Download our app and send money instantly and securely.</p>
            <a href="/contact" class="btn-learn">Learn More</a>
        </div>
    </div>
</div>
@endsection
