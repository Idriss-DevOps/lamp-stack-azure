<?php
$hostname  = gethostname();
$server_ip = $_SERVER['SERVER_ADDR'] ?? 'N/A';
$php_ver   = phpversion();
$os        = php_uname('s') . ' ' . php_uname('r');
$time      = date('D, d M Y H:i:s T');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>LAMP Stack on Azure – Docker Container</title>
  <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="wrapper">

  <!-- Header -->
  <header>
    <div class="header-inner">
      <div class="logo">⚡ LAMP <span>on Azure</span></div>
      <div class="badges">
        <span class="badge azure">☁️ Azure</span>
        <span class="badge docker">🐳 Docker</span>
        <span class="badge apache">🌐 Apache</span>
        <span class="badge php">🐘 PHP <?= $php_ver ?></span>
      </div>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="hero-glow"></div>
    <h1>LAMP Stack Container<br/><span>Running on Azure</span></h1>
    <p>Docker-based Apache container deployed to Microsoft Azure · DevOps Foundation</p>
    <div class="status-row">
      <span class="dot green"></span> Container is Live &amp; Running
    </div>
  </section>

  <main>

    <!-- Server Info Cards -->
    <section class="section">
      <h2 class="section-title">🖥 Server Information</h2>
      <div class="info-grid">
        <div class="info-card">
          <div class="info-icon">🏷</div>
          <div class="info-label">Hostname</div>
          <div class="info-value"><?= htmlspecialchars($hostname) ?></div>
        </div>
        <div class="info-card">
          <div class="info-icon">🌐</div>
          <div class="info-label">Server IP</div>
          <div class="info-value"><?= htmlspecialchars($server_ip) ?></div>
        </div>
        <div class="info-card">
          <div class="info-icon">🐘</div>
          <div class="info-label">PHP Version</div>
          <div class="info-value"><?= $php_ver ?></div>
        </div>
        <div class="info-card">
          <div class="info-icon">🐧</div>
          <div class="info-label">OS</div>
          <div class="info-value"><?= htmlspecialchars($os) ?></div>
        </div>
        <div class="info-card">
          <div class="info-icon">🕐</div>
          <div class="info-label">Server Time</div>
          <div class="info-value"><?= $time ?></div>
        </div>
        <div class="info-card">
          <div class="info-icon">🌍</div>
          <div class="info-label">Web Server</div>
          <div class="info-value"><?= htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'Apache') ?></div>
        </div>
      </div>
    </section>

    <!-- Stack Architecture -->
    <section class="section">
      <h2 class="section-title">☁️ Azure Deployment Architecture</h2>
      <div class="arch-flow">
        <div class="arch-node browser">
          <div class="arch-icon">👤</div>
          <div>Browser</div>
        </div>
        <div class="arch-arrow">→</div>
        <div class="arch-node azure-lb">
          <div class="arch-icon">☁️</div>
          <div>Azure<br/>Load Balancer</div>
        </div>
        <div class="arch-arrow">→</div>
        <div class="arch-node aci">
          <div class="arch-icon">🐳</div>
          <div>Docker<br/>Container</div>
        </div>
        <div class="arch-arrow">→</div>
        <div class="arch-node apache">
          <div class="arch-icon">🌐</div>
          <div>Apache<br/>+ PHP</div>
        </div>
        <div class="arch-arrow">→</div>
        <div class="arch-node db">
          <div class="arch-icon">🐬</div>
          <div>Azure MySQL<br/>Flexible Server</div>
        </div>
      </div>
    </section>

    <!-- Tech Stack Cards -->
    <section class="section">
      <h2 class="section-title">🔧 LAMP Stack Components</h2>
      <div class="stack-grid">
        <div class="stack-card linux">
          <div class="stack-letter">L</div>
          <h3>Linux</h3>
          <p>Ubuntu 22.04 LTS base image inside the Docker container running on Azure.</p>
        </div>
        <div class="stack-card apache">
          <div class="stack-letter">A</div>
          <h3>Apache</h3>
          <p>Apache HTTP Server 2.4 serving web content on port 80 inside the container.</p>
        </div>
        <div class="stack-card mysql">
          <div class="stack-letter">M</div>
          <h3>MySQL</h3>
          <p>MySQL 8.0 running as a separate container or Azure Database for MySQL.</p>
        </div>
        <div class="stack-card php">
          <div class="stack-letter">P</div>
          <h3>PHP</h3>
          <p>PHP <?= $php_ver ?> with PDO and MySQLi extensions for dynamic web pages.</p>
        </div>
      </div>
    </section>

  </main>

  <footer>
    <p>LAMP Stack Container on Azure · DevOps Foundation – Eduonix E-Degree</p>
  </footer>

</div>
<script src="js/app.js"></script>
</body>
</html>
