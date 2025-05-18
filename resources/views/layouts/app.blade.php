<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Karthik') }} | @yield('title', 'Cloud | AI | Automation | Strategy')</title>
    <meta name="description" content="@yield('meta_description', 'Karthikeyan\'s portfolio - Building systems that scale with cloud, AI, and automation')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://api.iconify.design/bx/code-alt.svg?color=%2339FF14">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <style>
        :root {
            --midnight-blue: #1A1A40;
            --neon-green: #39FF14;
            --soft-white: #F5F5F5;
            --charcoal-gray: #333333;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to bottom right, var(--midnight-blue), var(--charcoal-gray));
            color: var(--soft-white);
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header */
        header {
            padding: 20px 0;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--neon-green);
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: var(--soft-white);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: var(--neon-green);
        }
        
        /* Hero Section */
        .hero {
            height: 90vh;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 16px;
        }
        
        .hero h2 {
            font-size: 24px;
            color: var(--neon-green);
            margin-bottom: r24px;
            font-weight: 600;
        }
        
        .hero p {
            font-size: 18px;
            margin-bottom: 32px;
        }
        
        .btn-group {
            display: flex;
            gap: 16px;
        }
        
        .btn-primary {
            background-color: var(--neon-green);
            color: var(--midnight-blue);
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #fff;
            transform: scale(1.05);
        }
        
        .btn-secondary {
            background-color: transparent;
            color: var(--neon-green);
            border: 2px solid var(--neon-green);
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .btn-secondary:hover {
            background-color: rgba(57, 255, 20, 0.1);
        }
        
        /* Sections */
        section {
            padding: 80px 0;
        }
        
        .section-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 48px;
            position: relative;
            display: inline-block;
            padding-bottom: 16px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50%;
            height: 4px;
            background-color: var(--neon-green);
        }
        
        /* Footer */
        footer {
            padding: 40px 0;
            text-align: center;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .social-links a {
            color: var(--soft-white);
            font-size: 24px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: var(--neon-green);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Karthik.</div>
                <div class="nav-links">
                    <a href="/">Home</a>
                    <a href="#about">About</a>
                    <a href="#services">Services</a>
                    <a href="#systems">Systems</a>
                    <a href="#blog">Blog</a>
                    <a href="#contact">Contact</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="social-links">
                <a href="https://github.com/yourusername" target="_blank">
                    <span class="iconify" data-icon="mdi:github"></span>
                </a>
                <a href="https://linkedin.com/in/yourusername" target="_blank">  
                    <span class="iconify" data-icon="mdi:linkedin"></span>
                </a>
                <a href="https://instagram.com/yourusername" target="_blank">
                    <span class="iconify" data-icon="mdi:instagram"></span>
                </a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> Karthikeyan. All rights reserved.</p>
        </div>
    </footer>

    <!-- Iconify for icons -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    @stack('scripts')
</body>
</html>