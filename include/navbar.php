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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- ================= SEO FRIENDLY NAVBAR ================= -->
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light px-3" role="navigation" aria-label="Main Navigation">
    <div class="container-fluid">

      <!-- LOGO / BRAND -->
      <a class="navbar-brand fw-bold" href="index.php" title="Saket Shrivastava Portfolio">
        Saket Shrivastava
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
              Home
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="aboutPage.php" title="About Saket Shrivastava">
              About
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="projectPage.php" title="Projects by Saket Shrivastava">
              Projects
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contactPage.php" title="Contact Saket Shrivastava">
              Contact
            </a>
          </li>

        </ul>

        <!-- DARK MODE TOGGLE (NOT INDEXED) -->
        <div class="form-check form-switch text-nowrap ms-lg-3">
          <input
            class="form-check-input"
            type="checkbox"
            id="themeToggle"
            aria-label="Toggle dark mode"
          >
          <label class="form-check-label ms-2" for="themeToggle">
            Dark Mode
          </label>
        </div>

      </div>
    </div>
  </nav>
</header>
