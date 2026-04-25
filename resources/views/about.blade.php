@extends('layouts.app')
@section('title', 'About')
@section('content')
<section class="page-section fade-in-up">
    <h1>About Us</h1>
    <div class="about-grid">
        <div class="about-text">
            <h2 style="font-size: 2.5rem; margin-bottom: 2rem;">Our Story</h2>
            <p style="margin-bottom: 1.2rem; font-size: 1.15rem; line-height: 1.8;"><strong>NoFather.Lab</strong> is more than just a web development and design startup — it is a story of resilience, independence, and growth.</p>
            <p style="margin-bottom: 1.2rem; font-size: 1.15rem; line-height: 1.8;">Built from the ground up without privilege or guidance, NoFather.Lab represents the journey of creating something meaningful despite life’s limitations. The name itself reflects a personal reality: growing, learning, and building a future without a father figure. Instead of becoming a limitation, it became the foundation of strength and determination.</p>
            <p style="margin-bottom: 1.2rem; font-size: 1.15rem; line-height: 1.8;">We specialize in crafting modern, functional, and user-friendly websites, as well as clean and impactful web designs. Every project we work on is driven by passion, precision, and a deep understanding that every client’s vision matters.</p>
            <p style="margin-bottom: 1.2rem; font-size: 1.15rem; line-height: 1.8;">At NoFather.Lab, we don’t just build websites — we build value, identity, and digital experiences that help others grow, just like we did.</p>
            <blockquote style="border-left: 4px solid var(--primary); padding-left: 1.5rem; margin-top: 2.5rem; font-style: italic; font-size: 1.35rem; color: var(--primary); letter-spacing: 0.5px;">
                "Because we believe…<br>great things can come from nothing."
            </blockquote>
        </div>
        <div class="about-image glass-panel" style="display: flex; justify-content: center; align-items: center; padding: 3rem; background: transparent; border: none; box-shadow: none;">
            <img src="{{ asset('img/logo.png') }}" alt="NoFather.Lab Logo" style="width: 280px; height: 280px; object-fit: contain; border-radius: 50%; background: var(--nav-bg); box-shadow: 0 10px 40px rgba(135, 206, 235, 0.25); border: 2px solid var(--primary); padding: 1.5rem; animation: float 6s ease-in-out infinite;">
        </div>
    </div>
</section>

<!-- Founder Profile Section -->
<section class="page-section fade-in-up delay-1" style="padding-top: 0; margin-top: 2rem;">
    <div style="text-align: center; margin-bottom: 4rem;">
        <h2 style="font-size: 2.5rem; color: var(--primary);">Meet The Founder</h2>
        <p style="color: var(--text-main); opacity: 0.8; font-size: 1.1rem;">The mind and hands behind NoFather.Lab.</p>
    </div>
    
    <div class="glass-panel" style="display: flex; flex-wrap: wrap; gap: 3rem; align-items: center; padding: 3rem;">
        <!-- Avatar/Placeholder for Founder image -->
        <div style="flex: 1; min-width: 250px;">
            <div style="width: 100%; height: 350px; border-radius: 20px; background: var(--glass-bg); border: 1px solid var(--glass-border); box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; justify-content: center; align-items: center; overflow: hidden; position: relative;">
               <img src="{{ asset('img/Arrival.jpg') }}" alt="Arrival Sudrajat" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
        </div>
        
        <!-- Founder Info -->
        <div style="flex: 2; min-width: 300px;">
            <h3 style="font-size: 2.2rem; margin-bottom: 0.5rem; color: var(--text-main);">Arrival Sudrajat</h3>
            <h4 style="font-size: 1.2rem; color: var(--primary); margin-bottom: 1.5rem; font-weight: 600;">Founder & Full-Stack Developer</h4>
            
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.2rem;">
                I am currently pursuing my Bachelor's Degree (S1) in <strong>Information Systems at Telkom University</strong>. My academic foundation allows me to bridge the gap between complex business requirements and cutting-edge technological solutions.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.2rem;">
                My journey into the tech industry is driven by an insatiable curiosity and a deeply ingrained ethos of self-reliance. As a passionate developer, I specialize in transforming abstract concepts into intuitive, high-performance web applications. I believe that elegant code, combined with thoughtful user-centric design, has the power to solve real-world problems and elevate the digital experience.
            </p>
            <p style="font-size: 1.1rem; line-height: 1.8;">
                At NoFather.Lab, I wear many hats—architecting robust backend systems, crafting pristine interfaces, and ensuring that every project is delivered with uncompromising quality and passion.
            </p>
            
            <div style="margin-top: 2.5rem; display: flex; gap: 1rem; flex-wrap: wrap;">
                <span style="background: rgba(135, 206, 235, 0.1); color: var(--primary); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--primary); font-size: 0.9rem; font-weight: 600;">Information Systems</span>
                <span style="background: rgba(135, 206, 235, 0.1); color: var(--primary); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--primary); font-size: 0.9rem; font-weight: 600;">Telkom University</span>
                <span style="background: rgba(135, 206, 235, 0.1); color: var(--primary); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--primary); font-size: 0.9rem; font-weight: 600;">Laravel Stack</span>
                <span style="background: rgba(135, 206, 235, 0.1); color: var(--primary); padding: 5px 15px; border-radius: 20px; border: 1px solid var(--primary); font-size: 0.9rem; font-weight: 600;">UI/UX Enthusiast</span>
            </div>
            
            <div style="margin-top: 2rem;">
                <a href="https://github.com/ArrivalSudrajat" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 0.5rem 1.5rem; font-size: 1rem;">View Git Profile</a>
            </div>
        </div>
    </div>
</section>
@endsection
