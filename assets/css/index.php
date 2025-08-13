<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Get username from session
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard | Digital Works Hub SA</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/dashboard.css" />
</head>
<body>
  <header class="dashboard-header">
    <div class="header-left">
      <img src="../assets/images/logo.png" alt="Logo" class="logo">
      <h1>Welcome, <span id="user-name"><?php echo htmlspecialchars($username); ?></span></h1>
    </div>
    <nav>
      <a href="profile.php">Profile</a>
      <a href="../auth/logout.php">Logout</a>
    </nav>
  </header>

  <main class="dashboard-main">
    <section class="dashboard-cards">
      <div class="card">
        <h2>CV Writing</h2>
        <p>Start or update your professional CV.</p>
        <a href="../services/cv-writing.php">Go to CV Service</a>
      </div>
      <div class="card">
        <h2>Web Design</h2>
        <p>Explore web solutions for your brand.</p>
        <a href="../services/web-design.php">Go to Web Design</a>
      </div>
      <div class="card">
        <h2>SEO Services</h2>
        <p>Improve your website visibility on search engines.</p>
        <a href="../services/seo.php">Go to SEO Service</a>
      </div>
      <div class="card">
        <h2>Social Media Management</h2>
        <p>Boost your social presence and engagement.</p>
        <a href="../services/social-media.php">Go to Social Media Service</a>
      </div>
      <div class="card">
        <h2>Graphic Design</h2>
        <p>Create stunning graphics for your business.</p>
        <a href="../services/graphic-design.php">Go to Graphic Design</a>
      </div>
      <div class="card">
        <h2>Content Writing</h2>
        <p>High-quality content for blogs, websites, and ads.</p>
        <a href="../services/content-writing.php">Go to Content Service</a>
      </div>
      <div class="card">
        <h2>Video Production</h2>
        <p>Professional videos to showcase your brand.</p>
        <a href="../services/video-production.php">Go to Video Service</a>
      </div>
      <div class="card">
        <h2>App Development</h2>
        <p>Custom mobile applications for your business needs.</p>
        <a href="../services/app-development.php">Go to App Service</a>
      </div>
    </section>
  </main>

  <script src="../assets/js/dashboard.js"></script>
</body>
</html>
