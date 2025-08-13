<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.html");
    exit();
}
$userName = $_SESSION['user_name'] ?? "User";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Dashboard | Digital Works Hub SA</title>
  <!-- Global theme -->
  <link rel="stylesheet" href="../assets/css/style.css" />
  <!-- Dashboard-specific theme -->
  <link rel="stylesheet" href="../assets/css/dashboard.css" />
</head>
<body>
  <header class="dashboard-header">
    <h1>Welcome, <?php echo htmlspecialchars($userName); ?></h1>
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
        <a class="btn-primary" href="../services/cv-writing.html">Go to CV Service</a>
      </div>

      <div class="card">
        <h2>Web Design</h2>
        <p>Explore web solutions for your brand.</p>
        <a class="btn-primary" href="../services/web-design.html">Go to Web Design</a>
      </div>

      <div class="card">
        <h2>Digital Skills</h2>
        <p>Upskill with our training modules.</p>
        <a class="btn-primary" href="../services/digital-skills.html">Go to Digital Skills</a>
      </div>

      <div class="card">
        <h2>Electronics Repair</h2>
        <p>Book a device repair session.</p>
        <a class="btn-primary" href="../services/electronics-repair.html">Go to Repair Service</a>
      </div>
    </section>
  </main>

  <script src="../assets/js/dashboard.js"></script>
</body>
</html>