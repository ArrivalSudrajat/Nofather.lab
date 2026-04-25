@extends('layouts.app')
@section('title', 'Home')
@section('content')

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="fade-in-up">Welcome to Nofather<span>.lab</span></h1>
        <p class="fade-in-up delay-1">"Building Websites, Building Myself"</p>
        <div class="hero-buttons fade-in-up delay-2">
            <a href="{{ route('projects') }}" class="btn btn-primary">Discover My Work</a>
            <a href="{{ route('contact') }}" class="btn btn-secondary">Let's Connect</a>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="scroll-indicator fade-in-up delay-2">
        <span>Scroll Down</span>
        <div class="arrow">↓</div>
    </div>
</section>

<!-- Services / Offerings -->
<section class="page-section bg-alt fade-in-up">
    <div class="section-header">
        <h2>What I Do</h2>
        <p>Combining aesthetics with robust engineering to build modern solutions.</p>
    </div>
    <div class="services-grid">
        <div class="service-card glass-panel">
            <div class="icon-wrapper">💻</div>
            <h3>Web Development</h3>
            <p>Building high-performance, scalable, and secure backend systems and APIs tailored for modern startups.</p>
        </div>
        <div class="service-card glass-panel">
            <div class="icon-wrapper">✨</div>
            <h3>UI/UX Design</h3>
            <p>Crafting intuitive and engaging user interfaces that prioritize user experience and premium aesthetics.</p>
        </div>
        <div class="service-card glass-panel">
            <div class="icon-wrapper">🚀</div>
            <h3>Optimization</h3>
            <p>Enhancing load times, SEO, and overall architecture to make web applications lighting fast.</p>
        </div>
    </div>
</section>

<!-- Featured Projects Preview -->
<section class="page-section fade-in-up">
    <div class="section-header">
        <h2>Featured Work</h2>
        <p>A glimpse into the digital experiences I've built.</p>
    </div>
    <div class="featured-projects">
        <div class="featured-card">
            <div class="feat-img" style="background-image: url('{{ asset('img/tixflow_home.png') }}');"></div>
            <div class="feat-content glass-panel">
                <h3>TixFlow - Ticket Booking Platform</h3>
                <p>A modern, full-stack ticketing website designed for seamless event discovery and high-volume ticket sales. Features an elegant dark-theme and smooth booking flows.</p>
                <a href="{{ route('projects') }}" class="inline-link">View Portfolio →</a>
            </div>
        </div>
        <div class="featured-card reverse">
            <div class="feat-img" style="background-image: url('{{ asset('img/tixflow_dash.png') }}');"></div>
            <div class="feat-content glass-panel">
                <h3>TixFlow Dashboard & Admin UI</h3>
                <p>A comprehensive administrative dashboard for event organizers to track ticket sales, analytics, and manage attendees efficiently. Built with modern, responsive components.</p>
                <a href="{{ route('projects') }}" class="inline-link">View Portfolio →</a>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section fade-in-up">
    <div class="glass-panel cta-panel">
        <h2>Ready to build something amazing?</h2>
        <p>Let's turn your vision into reality. I'm available for freelance opportunities and collaborations.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Start a Conversation</a>
    </div>
</section>

@endsection
