

<footer class="portfolio-footer">
  <div class="container text-center">

    <h4 class="footer-name">Saket Shrivastava</h4>
    <p class="footer-role">Web Developer | Frontend Developer</p>

    <div class="footer-links">
       <a  href="#home" class="text-decoration-none">Home</a>
    <a href="#about" class="text-decoration-none">About</a>
    <a href="#projects" class="text-decoration-none">Projects</a>
    <a href="#contact" class="text-decoration-none">Contact</a>
    </div>

    <p class="footer-copy">
      © 2026 Saket. All rights reserved.
    </p>

  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- DARK MODE SCRIPT -->
<script>
  const toggle = document.getElementById("themeToggle");

  // Load saved theme
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
    toggle.checked = true;
  }

  toggle.addEventListener("change", () => {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });
</script>
</body>
</html>