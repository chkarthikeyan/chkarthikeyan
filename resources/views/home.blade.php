<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>I Build Systems That Scale</h1>
                <h2>Cloud | AI | Automation | Strategy</h2>
                <p>Turning ideas into efficient, tech-driven solutions.</p>
                <div class="btn-group">
                    <a href="#systems" class="btn-primary">Explore My Work</a>
                    <a href="#contact" class="btn-secondary">Let's Connect</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <p>B.Tech in Computer Science, fueled by a passion for cloud, AI, and automation. My mission is to build tech-backed businesses that solve real-world problems.</p>
            <p>I love crafting tools, automating workflows, and sharing insights via CreagTalks. My journey is all about learning in public and building systems that make a difference.</p>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" style="background-color: var(--charcoal-gray);">
        <div class="container">
            <h2 class="section-title">What I Do</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
                <div style="background-color: rgba(26, 26, 64, 0.5); padding: 24px; border-radius: 12px; border: 1px solid #444;">
                    <h3>Cloud & DevOps</h3>
                    <p>Learning AWS, Docker, and infrastructure design in public.</p>
                </div>
                <div style="background-color: rgba(26, 26, 64, 0.5); padding: 24px; border-radius: 12px; border: 1px solid #444;">
                    <h3>Automation & AI</h3>
                    <p>Building no-code and AI-driven workflows to save time.</p>
                </div>
                <div style="background-color: rgba(26, 26, 64, 0.5); padding: 24px; border-radius: 12px; border: 1px solid #444;">
                    <h3>Content Creation</h3>
                    <p>CreagTalks: Business insights via Instagram Reels.</p>
                </div>
                <div style="background-color: rgba(26, 26, 64, 0.5); padding: 24px; border-radius: 12px; border: 1px solid #444;">
                    <h3>Business Strategy</h3>
                    <p>Merging tech with real-world growth ideas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="systems">
        <div class="container">
            <h2 class="section-title">Systems I've Built</h2>
            <p>Projects coming soon...</p>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="blog" style="background-color: var(--charcoal-gray);">
        <div class="container">
            <h2 class="section-title">Thought Drops</h2>
            <p>Blog posts coming soon...</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title">Let's Connect</h2>
            <div style="max-width: 600px;">
                <form action="#" method="POST">
                    <div style="margin-bottom: 16px;">
                        <label for="name" style="display: block; margin-bottom: 8px;">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your name" required 
                               style="width: 100%; padding: 12px; border-radius: 8px; background-color: var(--charcoal-gray); border: 1px solid #444; color: var(--soft-white);">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label for="email" style="display: block; margin-bottom: 8px;">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your email" required 
                               style="width: 100%; padding: 12px; border-radius: 8px; background-color: var(--charcoal-gray); border: 1px solid #444; color: var(--soft-white);">
                    </div>
                    <div style="margin-bottom: 16px;">
                        <label for="message" style="display: block; margin-bottom: 8px;">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="How can I help you?" required 
                                  style="width: 100%; padding: 12px; border-radius: 8px; background-color: var(--charcoal-gray); border: 1px solid #444; color: var(--soft-white);"></textarea>
                    </div>
                    <button type="submit" class="btn-primary" style="border: none; cursor: pointer;">Send Message</button>
                </form>
            </div>
        </div>
    </section>
@endsection