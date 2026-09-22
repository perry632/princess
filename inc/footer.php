<?php
include_once __DIR__ . '/config.php';
?>
  <footer class="footer">
    <div class="container">
      <div class="footer-col">
        <h5>Explore</h5>
        <a href="index.php">Home</a>
        <a href="destinations.php">Destinations</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
        <p style="margin-top:12px;">We provide unparalleled cruise travel services worldwide.</p>
        <p class="phone"><?php echo $phone; ?></p>
      </div>

      <div class="footer-col">
        <h5>Contact</h5>
        <a href="#" class="phone"><?php echo $phone; ?></a>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        <div class="footer-social">
          <a href="#" target="_blank">📘</a>
          <a href="#" target="_blank">📸</a>
          <a href="#" target="_blank">🎵</a>
          <a href="#" target="_blank">🐦</a>
        </div>
      </div>

      <div class="footer-col">
        <h5>Support</h5>
        <div class="footer-form">
          <input type="email" placeholder="Enter your email address" />
          <input type="text" placeholder="Your email for updates" />
          <button class="btn-submit">Submit your inquiry now</button>
        </div>
      </div>
    </div>

    <div class="footer-bottom container">
      © 2025. All rights reserved <?php echo $brand_name; ?> - Help Desk
    </div>
  </footer>

  <script src="assets/js/main.js"></script>
</body>
</html>