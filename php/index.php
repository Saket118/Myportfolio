

<!-- ================= NAVBAR ================= -->
<?php  include 'include/navbar.php'; ?>

<!-- ================= HERO SECTION ================= -->

<header id="home" class="hero-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-md-7">
        <span class="hero-badge">👋 Hello, I’m</span>

        <h1 class="hero-title">
          Saket <span>Shrivastava</span>
        </h1>

        <p class="hero-subtitle">
          I build modern, responsive and clean web experiences using
          HTML, CSS, Bootstrap and JavaScript.
        </p>

        <div class="hero-buttons">
          <a href="#projects" class="btn btn-primary px-4 py-2">View Projects</a>
          <a href="#contact" class="btn btn-outline-secondary px-4 py-2 ms-3">Contact Me</a>
        </div>
      </div>

      <!-- RIGHT CONTENT -->
      <div class="col-md-5 text-center">
        <div class="hero-image">
          <img src="https://via.placeholder.com/280" alt="Profile">
        </div>
      </div>

    </div>
  </div>
</header>

<!-- About -->
 <section id="about" class="about-section">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="section-badge">About Me</span>
      <h2 class="section-title">Who I Am</h2>
    </div>

    <div class="row align-items-center">

      <!-- LEFT: IMAGE -->
      <div class="col-md-5 text-center mb-4 mb-md-0">
        <img src="https://via.placeholder.com/320"
             alt="About Image"
             class="about-img">
      </div>

      <!-- RIGHT: CONTENT -->
      <div class="col-md-7">
        <h3 class="about-heading">
          Passionate Web Developer
        </h3>

        <p class="about-text">
          I am a self-motivated web developer with a strong interest in
          building clean, responsive and user-friendly websites.
          I enjoy turning complex problems into simple, beautiful
          and intuitive designs.
        </p>

        <p class="about-text">
          Currently, I focus on HTML, CSS, Bootstrap and JavaScript,
          and I am continuously improving my skills by building
          real-world projects.
        </p>

        <!-- Skills Badges -->
        <div class="about-skills">
          <span>HTML</span>
          <span>CSS</span>
          <span>Bootstrap</span>
          <span>JavaScript</span>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Projects -->
 <section id="projects" class="projects-section">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="section-badge">Projects</span>
      <h2 class="section-title">My Work</h2>
    </div>

    <div class="row g-4">

      <!-- Project 1 -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://via.placeholder.com/400x250"
               alt="Project 1"
               class="project-img">

          <h3 class="project-title">Portfolio Website</h3>

          <p class="project-desc">
            A modern portfolio website built using Bootstrap and
            custom CSS with dark mode support.
          </p>

          <div class="project-tags mb-3">
            <span>HTML</span>
            <span>CSS</span>
            <span>Bootstrap</span>
          </div>

          <div class="project-links">
            <a href="#">Live Demo</a>
            <a href="#">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://via.placeholder.com/400x250"
               alt="Project 2"
               class="project-img">

          <h3 class="project-title">Admin Dashboard</h3>

          <p class="project-desc">
            A responsive admin dashboard with cards, charts,
            and clean UI design.
          </p>

          <div class="project-tags mb-3">
            <span>Bootstrap</span>
            <span>JavaScript</span>
            <span>Chart.js</span>
          </div>

          <div class="project-links">
            <a href="#">Live Demo</a>
            <a href="#">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-md-4">
        <div class="project-card">
          <img src="https://via.placeholder.com/400x250"
               alt="Project 3"
               class="project-img">

          <h3 class="project-title">Certificate Generator</h3>

          <p class="project-desc">
            A dynamic certificate generator with bulk upload
            and export functionality.
          </p>

          <div class="project-tags mb-3">
            <span>PHP</span>
            <span>MySQL</span>
            <span>JavaScript</span>
          </div>

          <div class="project-links">
            <a href="#">Live Demo</a>
            <a href="#">Source Code</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- Contact Section -->
 <section id="contact" class="contact-section">
  <div class="container">

    <!-- Section Title -->
    <div class="text-center mb-5">
      <span class="section-badge">Contact</span>
      <h2 class="section-title">Get In Touch</h2>
      <p class="text-muted mt-2">
        Feel free to reach out for collaboration or just a friendly hello 👋
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="contact-card p-4 p-md-5">

          <form>

            <div class="row g-3">
              <!-- Name -->
              <div class="col-md-6">
                <label class="form-label">Your Name</label>
                <input type="text" class="form-control" placeholder="John Doe">
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <label class="form-label">Your Email</label>
                <input type="email" class="form-control" placeholder="john@email.com">
              </div>

              <!-- Message -->
              <div class="col-12">
                <label class="form-label">Message</label>
                <textarea rows="5" class="form-control"
                  placeholder="Write your message here..."></textarea>
              </div>

              <!-- Button -->
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary px-5 py-2">
                  Send Message
                </button>
              </div>
            </div>

          </form>

        </div>

      </div>
    </div>

  </div>
</section>
<!-- ================= FOOTER ================= -->
<?php include 'include/footer.php'; ?>


