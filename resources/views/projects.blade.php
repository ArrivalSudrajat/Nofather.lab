@extends('layouts.app')
@section('title', 'Projects')
@section('content')
<section class="page-section fade-in-up">
    <h1>Our Projects</h1>
    <div class="projects-grid">
        <!-- Project 1 -->
        <div class="project-card glass-panel">
            <div class="project-img" style="background-image: url('{{ asset('img/tixflow_home.png') }}');"></div>
            <h3>TixFlow Booking Web App</h3>
            <p>State-of-the-art ticket booking platform with an elegant frontend UI.</p>
            <a href="#" class="btn btn-sm btn-primary" style="margin-top: 1rem;">View Case Study</a>
        </div>
        <!-- Project 2 -->
        <div class="project-card glass-panel">
            <div class="project-img" style="background-image: url('{{ asset('img/tixflow_dash.png') }}');"></div>
            <h3>TixFlow Analytics Panel</h3>
            <p>Dashboard tailored for real-time ticket sales tracking and management.</p>
            <a href="#" class="btn btn-sm btn-primary" style="margin-top: 1rem;">View Case Study</a>
        </div>
        <!-- Project 3 -->
        <div class="project-card glass-panel">
            <div class="project-img placeholder-gradient-3"></div>
            <h3>Coming Soon...</h3>
            <p>A stealth mode project in development focusing on AI-powered integrations.</p>
            <a href="#" class="btn btn-sm" style="margin-top: 1rem; border: 1px solid var(--glass-border); padding: 5px 15px; border-radius: 20px;">Coming Soon</a>
        </div>
    </div>
</section>
@endsection
