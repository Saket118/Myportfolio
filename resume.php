<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Saket Shrivastava – Full Stack Developer</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    :root {
      --primary: #2563eb;
      --dark: #0f172a;
      --gray: #475569;
      --light: #f8fafc;
      --border: #e2e8f0;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      background: var(--light);
      font-family: "Segoe UI", Roboto, Arial, sans-serif;
      color: var(--dark);
    }

    .resume {
      max-width: 1200px;
      margin: 40px auto;
      background: #fff;
      padding: 45px 50px;
      box-shadow: 0 20px 45px rgba(0,0,0,0.08);
    }

    /* HEADER */
    .header {
      display: flex;
      justify-content: space-between;
      border-bottom: 2px solid var(--border);
      padding-bottom: 20px;
      margin-bottom: 30px;
    }

    .name {
      font-size: 38px;
      font-weight: 700;
    }

    .role {
      color: var(--primary);
      font-weight: 600;
      margin-top: 5px;
    }

    .contact {
      text-align: right;
      font-size: 14px;
      color: var(--gray);
      line-height: 1.8;
    }

    section {
      margin-bottom: 35px;
    }

    h2 {
      font-size: 18px;
      text-transform: uppercase;
      letter-spacing: 1px;
      border-left: 4px solid var(--primary);
      padding-left: 12px;
      margin-bottom: 15px;
    }

    p {
      font-size: 15px;
      line-height: 1.6;
      color: #334155;
    }

    /* TABLE */
    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
      margin-top: 10px;
    }

    th {
      background: #f1f5f9;
      text-align: left;
      padding: 10px;
      border: 1px solid var(--border);
      font-weight: 600;
    }

    td {
      padding: 10px;
      border: 1px solid var(--border);
      vertical-align: top;
    }

    ul {
      margin: 5px 0 0;
      padding-left: 18px;
    }

    ul li {
      margin-bottom: 6px;
    }

    /* SKILLS */
    .skills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 10px;
    }

    .skill {
      background: #f1f5f9;
      padding: 10px 12px;
      border-radius: 6px;
      font-size: 14px;
    }

    .footer {
      text-align: center;
      font-size: 13px;
      color: var(--gray);
      border-top: 1px solid var(--border);
      padding-top: 15px;
    }

    @media (max-width: 768px) {
      .header {
        flex-direction: column;
      }
      .contact {
        text-align: left;
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<div class="resume">

  <!-- HEADER -->
  <div class="header">
    <div>
      <div class="name">Saket Shrivastava</div>
      <div class="role">Full Stack Developer</div>
    </div>
    <div class="contact">
      📧 saket@email.com<br>
      📞 +91-XXXXXXXXXX<br>
      🌐 yourportfolio.com<br>
      GitHub: github.com/saket
    </div>
  </div>

  <!-- SUMMARY -->
  <section>
    <h2>Professional Summary</h2>
    <p>
      Full Stack Developer with <strong>2 years of experience</strong> at
      Ubitech Solutions, skilled in building scalable and secure web
      applications using PHP, JavaScript, MySQL, and modern frontend
      technologies. Strong ownership of complete development lifecycle.
    </p>
  </section>

  <!-- EXPERIENCE (TABLE) -->
  <section>
    <h2>Professional Experience</h2>
    <table>
      <tr>
        <th>Role</th>
        <th>Company</th>
        <th>Duration</th>
        <th>Responsibilities</th>
      </tr>
      <tr>
        <td>Full Stack Developer</td>
        <td>Ubitech Solutions</td>
        <td>2022 – Present</td>
        <td>
          <ul>
            <li>Developed full-stack web applications using PHP & JavaScript</li>
            <li>Designed REST APIs and integrated frontend</li>
            <li>Built admin dashboards and CMS modules</li>
            <li>Optimized MySQL queries for performance</li>
          </ul>
        </td>
      </tr>
    </table>
  </section>

  <!-- PROJECTS (TABLE) -->
  <section>
    <h2>Key Projects</h2>
    <table>
      <tr>
        <th>Project</th>
        <th>Description</th>
      </tr>
      <tr>
        <td>Journal Management System</td>
        <td>
          Role-based journal publishing system with article workflows,
          admin dashboards, review management, and reporting.
        </td>
      </tr>
      <tr>
        <td>Plugin-Based Admin Dashboard</td>
        <td>
          Modular dashboard architecture with dynamic plugin rendering
          and reusable components.
        </td>
      </tr>
      <tr>
        <td>Certificate Generator Tool</td>
        <td>
          Web-based tool with live preview, drag-and-drop text positioning,
          and image export.
        </td>
      </tr>
    </table>
  </section>

  <!-- SKILLS -->
  <section>
    <h2>Core Skills</h2>
    <div class="skills">
      <div class="skill">HTML5, CSS3, Bootstrap</div>
      <div class="skill">JavaScript, React</div>
      <div class="skill">PHP (OOP, MVC)</div>
      <div class="skill">MySQL & Optimization</div>
      <div class="skill">REST APIs & JWT</div>
      <div class="skill">Git, GitHub, Postman</div>
    </div>
  </section>

  <!-- EDUCATION (TABLE) -->
  <section>
    <h2>Education</h2>
    <table>
      <tr>
        <th>Degree</th>
        <th>University</th>
      </tr>
      <tr>
        <td>Bachelor of Computer Applications (BCA)</td>
        <td>Jiwaji University</td>
      </tr>
    </table>
  </section>

  <!-- FOOTER -->
  <div class="footer">
    © 2026 Saket Shrivastava | Full Stack Developer
  </div>

</div>

</body>
</html>
