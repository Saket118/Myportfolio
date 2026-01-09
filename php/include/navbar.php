<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  >
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
<!-- ================= NAVBAR ================= -->
<nav class="navbar navbar-expand-lg navbar-light bg-light px-3">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold" href="#">MyPortfolio</a>

    <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" id="home" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"  href="aboutPage.php">About</a>
        </li>

         <li class="nav-item">
          <a class="nav-link"  href="projectPage.php">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactPage.php">Contact</a>
        </li>
      </ul>

      <!-- DARK MODE SWITCH -->
      <div class="form-check form-switch text-nowrap">
        <input class="form-check-input" type="checkbox" id="themeToggle">
        <label class="form-check-label ms-2" for="themeToggle">
          Dark Mode
        </label>
      </div>

    </div>
  </div>
</nav>
