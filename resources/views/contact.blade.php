@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<section class="page-section fade-in-up">
    <div class="section-header" style="margin-bottom: 3rem;">
        <h1>Let's Connect</h1>
        <p>Feel free to reach out through any of the platforms below.</p>
    </div>

    <!-- Professional Contact Methods Grid -->
    <div style="display: flex; justify-content: center; margin-bottom: 4rem;">
        
        <!-- Email -->
        <a href="mailto:info@nofatherlab.com" class="glass-panel" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; gap: 1rem; padding: 2.5rem 4rem; text-decoration: none; border-radius: 16px; min-width: 300px;">
            <div style="font-size: 2.5rem; width: 75px; height: 75px; display: flex; align-items: center; justify-content: center; background: rgba(135, 206, 235, 0.1); border-radius: 50%; color: var(--primary);">✉️</div>
            <div>
                <div style="font-size: 0.95rem; color: var(--text-main); opacity: 0.7; margin-bottom: 0.3rem;">Email Us Directly</div>
                <div style="color: var(--primary); font-weight: 600; font-size: 1.2rem;">info@nofatherlab.com</div>
            </div>
        </a>

    </div>
    
    <div class="contact-container glass-panel">
        <form id="contactForm" class="contact-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="John Doe">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="john@example.com">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send via WhatsApp</button>
        </form>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;
        
        // WhatsApp Number Format: 628...
        const waNumber = "6289656321783"; 
        
        const text = `Halo Nofather.lab!%0A%0ANama: ${encodeURIComponent(name)}%0AEmail: ${encodeURIComponent(email)}%0A%0A${encodeURIComponent(message)}`;
        
        const url = `https://wa.me/${waNumber}?text=${text}`;
        window.open(url, '_blank');
    });
</script>
@endsection
