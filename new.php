<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <!-- SEO TITLE -->
  <title>Saket Shrivastava | PHP Web Developer Portfolio</title>

  <!-- SEO DESCRIPTION -->
  <meta name="description" content="Portfolio of Saket Shrivastava, a PHP web developer specializing in responsive websites, Bootstrap UI, and modern web applications.">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome for Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="newstyle.css">
</head>

<body>

<!-- ================= MODERN NAVBAR ================= -->
<header>
  <nav class="navbar navbar-expand-lg fixed-top" role="navigation" aria-label="Main Navigation">
    <div class="container">

      <!-- LOGO / BRAND -->
      <a class="navbar-brand fw-bold" href="index.php" title="Saket Shrivastava Portfolio">
        <div class="logo-container">
          <span class="logo-text">Saket</span>
          <span class="logo-dot"></span>
        </div>
      </a>

      <!-- MOBILE TOGGLE -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#primaryNavbar"
        aria-controls="primaryNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- NAV LINKS -->
      <div class="collapse navbar-collapse" id="primaryNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" href="index.php" title="Home - Saket Shrivastava Portfolio">
              <i class="fas fa-home me-2"></i>Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutPage.php" title="About Saket Shrivastava">
              <i class="fas fa-user me-2"></i>About
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="projectPage.php" title="Projects by Saket Shrivastava">
              <i class="fas fa-code me-2"></i>Projects
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contactPage.php" title="Contact Saket Shrivastava">
              <i class="fas fa-envelope me-2"></i>Contact
            </a>
          </li>

        </ul>

        <!-- RIGHT SIDE CONTROLS -->
        <div class="d-flex align-items-center gap-3">
          <!-- DARK MODE TOGGLE -->
          <div class="form-check form-switch">
            <input
              class="form-check-input"
              type="checkbox"
              id="themeToggle"
              aria-label="Toggle dark mode"
            >
            <label class="form-check-label" for="themeToggle">
              <i class="fas fa-moon"></i>
            </label>
          </div>
          
          <!-- RESUME BUTTON -->
          <a href="#" class="btn btn-sm btn-outline-primary" title="Download Resume">
            <i class="fas fa-download me-1"></i>Resume
          </a>
        </div>

      </div>
    </div>
  </nav>
</header>

<main class="pt-5">

<!-- ================= MODERN HERO ================= -->
<section class="hero-section" id="home">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      
      <!-- TEXT CONTENT -->
      <div class="col-lg-6">
        <div class="hero-content">
          <!-- BADGE -->
          <div class="hero-badge-wrapper mb-4">
            <span class="hero-badge">
              <i class="fas fa-code me-2"></i>Web Developer
            </span>
          </div>

          <!-- MAIN TITLE -->
          <h1 class="hero-title mb-4">
            Hi, I'm <span class="highlight-text">Saket Shrivastava</span>
          </h1>
          
          <!-- ANIMATED TYPING TEXT -->
          <div class="hero-subtitle-wrapper mb-4">
            <h2 class="hero-subtitle">
              I create <span class="typed-text" id="typed-text"></span>
              <span class="cursor">&nbsp;</span>
            </h2>
          </div>

          <!-- DESCRIPTION -->
          <p class="hero-description mb-5">
            I build modern, responsive, and SEO-friendly web applications 
            using HTML, CSS, Bootstrap, JavaScript, and PHP. Passionate about 
            clean code and intuitive user experiences.
          </p>

          <!-- CTA BUTTONS -->
          <div class="hero-buttons d-flex flex-wrap gap-3">
            <a href="#projects" class="btn btn-primary btn-lg px-5 py-3">
              <i class="fas fa-eye me-2"></i>View Projects
            </a>
            <a href="#contact" class="btn btn-outline-primary btn-lg px-5 py-3">
              <i class="fas fa-paper-plane me-2"></i>Contact Me
            </a>
          </div>

          <!-- SOCIAL LINKS -->
          <div class="social-links mt-5">
            <p class="mb-3 text-muted">Follow me on:</p>
            <div class="d-flex gap-3">
              <a href="#" class="social-icon" aria-label="GitHub">
                <i class="fab fa-github fa-lg"></i>
              </a>
              <a href="#" class="social-icon" aria-label="LinkedIn">
                <i class="fab fa-linkedin fa-lg"></i>
              </a>
              <a href="#" class="social-icon" aria-label="Twitter">
                <i class="fab fa-twitter fa-lg"></i>
              </a>
              <a href="#" class="social-icon" aria-label="Instagram">
                <i class="fab fa-instagram fa-lg"></i>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- IMAGE CONTENT -->
      <div class="col-lg-5">
        <div class="hero-image-container position-relative">
          <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
          </div>
          
          <div class="profile-image-wrapper">
            <img
              src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&fit=crop"
              class="profile-img"
              alt="Saket Shrivastava - PHP Web Developer"
              loading="eager"
            >
            <div class="profile-badge">
              <i class="fas fa-star"></i>
              <span>5+ Projects</span>
            </div>
          </div>

          <!-- EXPERIENCE BADGE -->
          <div class="experience-badge">
            <div class="exp-content">
              <span class="exp-number">2+</span>
              <span class="exp-text">Years<br>Experience</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= FEATURED SKILLS ================= -->
<section class="skills-section py-5" id="skills">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="skills-wrapper">
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-html5"></i>
            </div>
            <span class="skill-name">HTML5</span>
          </div>
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-css3-alt"></i>
            </div>
            <span class="skill-name">CSS3</span>
          </div>
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-js"></i>
            </div>
            <span class="skill-name">JavaScript</span>
          </div>
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-php"></i>
            </div>
            <span class="skill-name">PHP</span>
          </div>
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fab fa-bootstrap"></i>
            </div>
            <span class="skill-name">Bootstrap</span>
          </div>
          <div class="skill-item">
            <div class="skill-icon">
              <i class="fas fa-database"></i>
            </div>
            <span class="skill-name">MySQL</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= FEATURED PROJECTS ================= -->
<section class="featured-projects py-5" id="projects">
  <div class="container">
    <div class="section-header text-center mb-5">
      <span class="section-badge">Featured Work</span>
      <h2 class="section-title">Recent Projects</h2>
      <p class="section-subtitle">Some of my recent work that showcases my skills</p>
    </div>

    <div class="row g-4">
      <!-- PROJECT 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card featured">
          <div class="project-image">
            <img
              src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800"
              alt="E-commerce Platform Project"
              loading="lazy"
            >
            <div class="project-overlay">
              <a href="#" class="btn btn-primary btn-sm">View Details</a>
            </div>
          </div>
          <div class="project-content">
            <div class="project-meta">
              <span class="project-category">Web Development</span>
              <span class="project-date">2024</span>
            </div>
            <h3 class="project-title">E-commerce Platform</h3>
            <p class="project-desc">
              Full-featured online store with cart, payments, and admin dashboard.
            </p>
            <div class="project-tech">
              <span>PHP</span>
              <span>MySQL</span>
              <span>JavaScript</span>
            </div>
          </div>
        </div>
      </div>

      <!-- PROJECT 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card featured">
          <div class="project-image">
            <img
              src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w-800"
              alt="Portfolio Website Project"
              loading="lazy"
            >
            <div class="project-overlay">
              <a href="#" class="btn btn-primary btn-sm">View Details</a>
            </div>
          </div>
          <div class="project-content">
            <div class="project-meta">
              <span class="project-category">Portfolio</span>
              <span class="project-date">2024</span>
            </div>
            <h3 class="project-title">Modern Portfolio</h3>
            <p class="project-desc">
              Responsive portfolio with dark mode, animations, and SEO optimization.
            </p>
            <div class="project-tech">
              <span>HTML5</span>
              <span>CSS3</span>
              <span>Bootstrap</span>
            </div>
          </div>
        </div>
      </div>

      <!-- PROJECT 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="project-card featured">
          <div class="project-image">
            <img
              src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=800"
              alt="Task Management System"
              loading="lazy"
            >
            <div class="project-overlay">
              <a href="#" class="btn btn-primary btn-sm">View Details</a>
            </div>
          </div>
          <div class="project-content">
            <div class="project-meta">
              <span class="project-category">Web App</span>
              <span class="project-date">2024</span>
            </div>
            <h3 class="project-title">Task Manager</h3>
            <p class="project-desc">
              Productivity app with drag-drop interface, teams, and real-time updates.
            </p>
            <div class="project-tech">
              <span>JavaScript</span>
              <span>PHP</span>
              <span>MySQL</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="projectPage.php" class="btn btn-outline-primary btn-lg px-5">
        <i class="fas fa-arrow-right me-2"></i>View All Projects
      </a>
    </div>
  </div>
</section>

<!-- ================= TESTIMONIALS ================= -->
<section class="testimonials-section py-5 bg-light">
  <div class="container">
    <div class="section-header text-center mb-5">
      <span class="section-badge">Feedback</span>
      <h2 class="section-title">What Clients Say</h2>
      <p class="section-subtitle">Here's what people I've worked with have to say</p>
    </div>

    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "Saket delivered exactly what we needed on time. His attention to detail is impressive."
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100" alt="Client">
            </div>
            <div class="author-info">
              <h5>John Smith</h5>
              <p>CEO, TechSolutions</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "Professional and skilled developer. The project was completed ahead of schedule."
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="https://images.unsplash.com/photo-1494790108755-2616b786d4a3?w=100" alt="Client">
            </div>
            <div class="author-info">
              <h5>Sarah Johnson</h5>
              <p>Marketing Director</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-4">
        <div class="testimonial-card">
          <div class="testimonial-content">
            <p class="testimonial-text">
              "Excellent communication and problem-solving skills. Highly recommended!"
            </p>
          </div>
          <div class="testimonial-author">
            <div class="author-avatar">
              <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" alt="Client">
            </div>
            <div class="author-info">
              <h5>Michael Chen</h5>
              <p>Startup Founder</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ================= CTA SECTION ================= -->
<section class="cta-section py-5">
  <div class="container">
    <div class="cta-card">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="cta-title mb-3">Ready to Bring Your Ideas to Life?</h2>
          <p class="cta-text mb-0">
            Let's discuss how we can work together to create something amazing.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="contactPage.php" class="btn btn-primary btn-lg px-5 py-3">
            <i class="fas fa-paper-plane me-2"></i>Start a Project
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<!-- ================= MODERN FOOTER ================= -->
<footer class="portfolio-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="footer-brand">
          <h3 class="brand-name">Saket Shrivastava</h3>
          <p class="brand-tagline">PHP Web Developer</p>
          <p class="footer-text mt-3">
            Creating beautiful, functional web experiences with modern technologies.
          </p>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-heading">Quick Links</h5>
        <ul class="footer-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutPage.php">About</a></li>
          <li><a href="projectPage.php">Projects</a></li>
          <li><a href="contactPage.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
        <h5 class="footer-heading">Services</h5>
        <ul class="footer-links">
          <li><a href="#">Web Development</a></li>
          <li><a href="#">Responsive Design</a></li>
          <li><a href="#">PHP Applications</a></li>
          <li><a href="#">SEO Optimization</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Get In Touch</h5>
        <div class="contact-info">
          <p class="contact-item">
            <i class="fas fa-envelope me-2"></i>hello@saket.dev
          </p>
          <p class="contact-item">
            <i class="fas fa-phone me-2"></i>+91 98765 43210
          </p>
          <div class="social-links mt-3">
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>

    <hr class="my-4">

    <div class="row">
      <div class="col-md-6">
        <p class="copyright">
          &copy; 2024 Saket Shrivastava. All rights reserved.
        </p>
      </div>
      <div class="col-md-6 text-md-end">
        <p class="made-with">
          Made with <i class="fas fa-heart text-danger"></i> using PHP & Bootstrap
        </p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script>
  // Dark Mode Toggle
  document.getElementById('themeToggle').addEventListener('change', function() {
    document.body.classList.toggle('dark-mode', this.checked);
    localStorage.setItem('darkMode', this.checked);
  });

  // Check for saved theme preference
  if (localStorage.getItem('darkMode') === 'true') {
    document.getElementById('themeToggle').checked = true;
    document.body.classList.add('dark-mode');
  }

  // Typing Animation
  const typedTextSpan = document.getElementById("typed-text");
  const textArray = ["responsive websites", "web applications", "user interfaces", "PHP solutions"];
  const typingDelay = 100;
  const erasingDelay = 50;
  const newTextDelay = 1500;
  let textArrayIndex = 0;
  let charIndex = 0;

  function type() {
    if (charIndex < textArray[textArrayIndex].length) {
      typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
      charIndex++;
      setTimeout(type, typingDelay);
    } else {
      setTimeout(erase, newTextDelay);
    }
  }

  function erase() {
    if (charIndex > 0) {
      typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
      charIndex--;
      setTimeout(erase, erasingDelay);
    } else {
      textArrayIndex++;
      if (textArrayIndex >= textArray.length) textArrayIndex = 0;
      setTimeout(type, typingDelay + 1100);
    }
  }

  document.addEventListener("DOMContentLoaded", function() {
    setTimeout(type, newTextDelay + 250);
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });

  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
      navbar.classList.add('navbar-scrolled');
    } else {
      navbar.classList.remove('navbar-scrolled');
    }
  });
</script>

</body>
</html>