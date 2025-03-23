<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechYong_AS</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700&family=Fira+Code&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        /* Custom Styles */
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #fff;
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            position: relative;
        }

        .hero {
            min-height: 100vh;
            padding-top: 80px;
            position: relative;
            z-index: 1;
        }

        /* Navbar */
        .navbar {
            padding: 1rem 0;
            background: rgba(0, 0, 0, 0.8) !important;
            opacity: 0;
        }

        .nav-link {
            color: #fff !important;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #00ddeb !important;
        }

        /* Badge */
        .badge {
            background: rgba(255, 255, 255, 0.1);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            opacity: 0;
        }

        .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #00ddeb;
            border-radius: 50%;
            margin-right: 5px;
        }

        /* Text Styles */
        h1 {
            font-size: 4rem;
            font-weight: 700;
            line-height: 1.2;
            opacity: 0;
        }

        .highlight {
            color: #00ddeb;
        }

        .emoji {
            color: #ff69b4;
        }

        .subtitle {
            font-size: 1.5rem;
            font-weight: 300;
            text-shadow: 0 0 10px #00ddeb;
            opacity: 0;
        }

        .tagline {
            font-size: 1rem;
            opacity: 0;
        }

        /* Buttons */
        .btn-outline-primary {
            border-color: #00ddeb;
            color: #00ddeb;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .btn-outline-primary:hover {
            background: #00ddeb;
            color: #fff;
            transform: scale(1.05);
        }

        .btn-dark {
            background: #2a2a3e;
            color: #fff;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .btn-dark:hover {
            background: #3a3a4e;
            transform: scale(1.05);
        }

        /* Code Snippet */
        .code-snippet {
            background: #1e1e2f;
            padding: 20px;
            border-radius: 10px;
            font-family: 'Fira Code', monospace;
            font-size: 0.9rem;
            color: #fff;
            box-shadow: 0 0 20px rgba(0, 221, 235, 0.2);
            white-space: pre-wrap;
            opacity: 0;
        }

        /* Syntax Highlighting */
        code .keyword {
            color: #ff79c6;
        }

        code .string {
            color: #f1fa8c;
        }

        code .boolean {
            color: #8be9fd;
        }

        code .number {
            color: #bd93f9;
        }

        /* Particle Background (Traveling Stars) */
        #particles {
            position: fixed; /* Full-page coverage */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            background: #fff;
            border-radius: 50%;
            opacity: 0.7;
            animation: travel 10s linear infinite; /* 10-second duration */
        }

        /* Animation for Traveling Stars */
        @keyframes travel {
            0% {
                transform: translate(0, 0) scale(0.5); /* Start at top-left corner */
                opacity: 0.2;
            }
            50% {
                opacity: 0.7;
            }
            100% {
                transform: translate(calc(100vw * var(--x)), calc(100vh * var(--y))) scale(1); /* Spread across page */
                opacity: 0.2;
            }
        }

        /* Animations for Other Elements */
        .animate-nav {
            animation: fadeIn 1s ease forwards;
        }

        .animate-badge {
            animation: fadeInUp 0.8s ease forwards;
        }

        .animate-text {
            animation: fadeInUp 1s ease forwards 0.3s;
        }

        .animate-subtitle {
            animation: fadeInUp 1s ease forwards 0.6s;
        }

        .animate-tagline {
            animation: fadeInUp 1s ease forwards 0.9s;
        }

        .animate-btn {
            animation: fadeInScale 0.8s ease forwards 1.2s;
        }

        .code-snippet {
            animation: fadeIn 1.5s ease forwards 1.5s;
        }

        /* Keyframes for Other Animations */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInScale {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top animate-nav">
        <div class="container">
            <a class="navbar-brand" href="#">TechYong_AS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Particle Background (Moved outside hero section) -->
    <div id="particles"></div>

    <!-- Hero Section -->
    <section id="home" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <!-- Left Side -->
                <div class="col-lg-6 text-light">
                    <!-- <div class="badge mb-3 animate-badge">
                        <span class="dot"></span> Welcome to my universe
                    </div> -->
                    <h1 class="display-3 animate-text">
                        Hello <span class="emoji">✨</span><br>
                        I’m <span class="highlight">TechYong_AS</span>
                    </h1>
                    <!-- <h3 class="subtitle mt-3 animate-subtitle">Full-Stack Developer & UI/UX Enthusiast</h3>
                    <p class="tagline mt-3 animate-tagline">
                        JavaScript lover 🚀 | OlovaJS creator 🛠 | Crafting frameworks and coding the future ✨
                    </p> -->
                    <div class="mt-4">
                        <a href="#about" class="btn btn-outline-primary me-3 animate-btn">Learn More</a>
                        <a href="#" class="btn btn-dark animate-btn">Follow Up</a>
                    </div>
                </div>
                <!-- Right Side (Code Snippet) -->
                <div class="col-lg-6 d-flex align-items-center">
                    <pre class="code-snippet">
                        <code id="code-typing">
As a skilled freelance web developer, 
I specialize in crafting dynamic animated websites and stunning static
designs, tailored to meet client needs, 
with seamless hosting solutions for an exceptional user experience.                        
                    </code>
                    </pre>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS and Custom JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth Scroll for Navbar Links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                document.querySelector(targetId).scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Typing Animation for Code Snippet
        const codeElement = document.getElementById('code-typing');
        const codeText = codeElement.innerText;
        codeElement.innerText = '';

        let i = 0;
        function typeCode() {
            if (i < codeText.length) {
                codeElement.innerText += codeText.charAt(i);
                i++;
                setTimeout(typeCode, 20); // Adjust speed of typing
            } else {
                // Apply syntax highlighting after typing
                highlightSyntax();
            }
        }

        setTimeout(typeCode, 2000); // Start typing after a delay

        // Syntax Highlighting
        function highlightSyntax() {
            let codeText = codeElement.innerHTML;
            const keywords = ['const', 'function', 'return'];
            const booleans = ['true', 'false'];
            const numbers = ['4', '8', '3'];

            keywords.forEach(keyword => {
                codeText = codeText.replace(new RegExp(`\\b${keyword}\\b`, 'g'), `<span class="keyword">${keyword}</span>`);
            });

            codeText = codeText.replace(/"([^"]*)"/g, `<span class="string">"$1"</span>`);

            booleans.forEach(bool => {
                codeText = codeText.replace(new RegExp(`\\b${bool}\\b`, 'g'), `<span class="boolean">${bool}</span>`);
            });

            numbers.forEach(num => {
                codeText = codeText.replace(new RegExp(`\\b${num}\\b`, 'g'), `<span class="number">${num}</span>`);
            });

            codeElement.innerHTML = codeText;
        }

        // Particle Effect (Traveling Stars)
        const particleContainer = document.getElementById('particles');
        function createParticle() {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            const size = Math.random() * 3 + 1; // Random size between 1px and 4px
            particle.style.width = `${size}px`;
            particle.style.height = particle.style.width;
            particle.style.left = '0'; // Start at left edge
            particle.style.top = '0'; // Start at top edge

            // Assign random x and y multipliers for the endpoint
            const randomX = Math.random(); // Between 0 and 1
            const randomY = Math.random(); // Between 0 and 1
            particle.style.setProperty('--x', randomX);
            particle.style.setProperty('--y', randomY);

            particle.style.animationDelay = `${Math.random() * 10}s`; // Random delay up to 10s
            particleContainer.appendChild(particle);

            setTimeout(() => particle.remove(), 10000); // Remove after 10s (matches animation duration)
        }

        setInterval(createParticle, 200); // Create a new star every 200ms
    </script>
</body>
</html>