<?php include 'include/navbar.php'; ?>

<main>

<!-- ================= HERO ================= -->
<header class="hero-section" id="home">
  <div class="container">
    <div class="row align-items-center">

      <!-- TEXT -->
      <div class="col-md-7">
        <span class="hero-badge">👋 Hello, I’m</span>

        <!-- ONLY ONE H1 (VERY IMPORTANT FOR SEO) -->
        <h1 class="hero-title">
          Saket <span>Shrivastava</span> – PHP Web Developer
        </h1>

        <p class="hero-subtitle">
          I build modern, responsive and SEO-friendly web applications
          using HTML, CSS, Bootstrap, JavaScript and PHP.
        </p>

        <div class="hero-buttons">
          <a href="#projects" class="btn btn-primary px-4 py-2">
            View Projects
          </a>
          <a href="#contact" class="btn btn-outline-secondary px-4 py-2 ms-3">
            Contact Me
          </a>
        </div>
      </div>

      <!-- IMAGE -->
      <div class="col-md-5 text-center">
        <div class="hero-image">
          <img
            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&fit=crop"
            alt="Saket Shrivastava PHP Web Developer"
            loading="lazy"
          >
        </div>
      </div>

    </div>
  </div>
</header>

<!-- ================= ABOUT ================= -->
<section class="about-section" id="about">
  <div class="container">

    <div class="text-center mb-5">
      <span class="section-badge">About Me</span>
      <h2 class="section-title">Who I Am</h2>
    </div>

    <div class="row align-items-center">

      <div class="col-md-5 text-center">
        <img
          src="https://images.unsplash.com/photo-1502767089025-6572583495b4?w=500"
          class="about-img"
          alt="About Saket Shrivastava Web Developer"
          loading="lazy"
        >
      </div>

      <div class="col-md-7">
        <div class="about-content">

          <p class="about-text">
            I am a passionate PHP web developer with experience in building
            responsive websites, admin dashboards, and modern user interfaces.
            I focus on performance, accessibility, and clean code.
          </p>

          <div class="about-skills" aria-label="Skills">
            <span>HTML</span>
            <span>CSS</span>
            <span>Bootstrap</span>
            <span>JavaScript</span>
            <span>PHP</span>
            <span>MySQL</span>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- ================= PROJECTS ================= -->
<section class="projects-section" id="projects">
  <div class="container">

    <div class="text-center mb-5">
      <span class="section-badge">Projects</span>
      <h2 class="section-title">My Work</h2>
    </div>

    <div class="row g-4">

      <article class="col-md-4">
        <div class="project-card">

          <img
            src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800"
            class="project-img"
            alt="Portfolio Website Project by Saket Shrivastava"
            loading="lazy"
          >

          <h3 class="project-title">Portfolio Website</h3>

          <p class="project-desc">
            A modern personal portfolio website with dark mode,
            responsive design, and SEO-friendly structure.
          </p>

          <div class="project-tags" aria-label="Technologies used">
            <span>HTML</span>
            <span>CSS</span>
            <span>Bootstrap</span>
          </div>

        </div>
      </article>

    </div>
  </div>
</section>

<!-- ================= CONTACT ================= -->
<section class="contact-section" id="contact">
  <div class="container">

    <div class="text-center mb-5">
      <span class="section-badge">Contact</span>
      <h2 class="section-title">Get In Touch</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-8">

        <div class="contact-card">

          <form method="post" aria-label="Contact form">

            <label class="visually-hidden" for="name">Name</label>
            <input
              id="name"
              name="name"
              class="form-control mb-3"
              placeholder="Your Name"
              required
            >

            <label class="visually-hidden" for="email">Email</label>
            <input
              id="email"
              name="email"
              type="email"
              class="form-control mb-3"
              placeholder="Your Email"
              required
            >

            <label class="visually-hidden" for="message">Message</label>
            <textarea
              id="message"
              name="message"
              class="form-control mb-4"
              rows="5"
              placeholder="Message"
              required
            ></textarea>

            <div class="text-center">
              <button type="submit" class="btn btn-primary px-5 py-2">
                Send Message
              </button>
            </div>

          </form>

        </div>

      </div>
    </div>

  </div>
</section>

</main>

<?php include 'include/footer.php'; ?>
