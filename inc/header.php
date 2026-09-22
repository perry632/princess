<?php
include_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $brand_name; ?> – Explore Unforgettable Cruise Adventures</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- STATUS BAR -->
  <div class="status-bar container">
    <span>🌤️ 36°C Mostly clear</span>
    <span>ENG</span>
    <span>10:11 AM</span>
    <span>US</span>
    <span>6/29/2026</span>
  </div>

  <!-- HEADER -->
  <header class="navbar">
    <div class="container">
      <div class="logo"><?php echo $brand_name; ?></div>
      <ul class="nav-links">
        <li><a href="index.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="destinations.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'destinations.php') ? 'class="active"' : ''; ?>>Destinations</a></li>
        <li><a href="services.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'services.php') ? 'class="active"' : ''; ?>>Services</a></li>
        <li><a href="contact.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
      </ul>
    </div>
  </header>