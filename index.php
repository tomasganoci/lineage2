<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Lineage 2 Interlude server s moderním dark-fantasy webem, statistikami a komunitními informacemi.">
  <meta name="keywords" content="Lineage 2, Interlude, private server, MMORPG">
  <meta name="author" content="Tomáš Gánoci">
  <meta name="robots" content="index, follow">
  <link rel="shortcut icon" href="templates/l2/images/favicona.png">
  <link rel="stylesheet" href="templates/l2/css/style.css">
  <title>Lineage 2 Interlude</title>
</head>
<body>
  <div class="site-bg"></div>

  <header id="header" class="site-header">
    <div class="container hero">
      <div class="brand">
        <p class="eyebrow">Lineage 2 Interlude</p>
        <h1>Nabitý moderní web pro tvůj server</h1>
        <p class="lead">Rychlý, přehledný a připravený pro hráče, kteří chtějí vědět vše důležité na první pohled.</p>
      </div>
      <div class="hero-art" aria-hidden="true"></div>
    </div>
    <div id="menu" class="container menu-wrap">
      <?php include "templates/l2/bars/menu.php"; ?>
    </div>
  </header>

  <main id="section" class="container layout">
    <aside id="side-left" class="panel">
      <div class="panel-head">
        <h2>Rychlé statistiky</h2>
      </div>
      <div class="panel-body">
        <?php include "templates/l2/bars/statistic.php"; ?>
      </div>
    </aside>

    <section id="side-mid" class="content">
      <?php include "main.php"; ?>
    </section>

    <aside id="side-right" class="panel stack">
      <div class="panel-card">
        <div class="panel-head">
          <h2>Server status</h2>
        </div>
        <div class="panel-body">
          <?php include "templates/l2/bars/status.php"; ?>
        </div>
      </div>

      <div class="panel-card">
        <div class="panel-head">
          <h2>Top žebříčky</h2>
        </div>
        <div class="panel-body">
          <?php include "templates/l2/bars/server_statistic.php"; ?>
        </div>
      </div>

      <div class="panel-card">
        <div class="panel-head">
          <h2>Podpoř server</h2>
        </div>
        <div class="panel-body">
          <?php include "templates/l2/bars/vote.php"; ?>
        </div>
      </div>
    </aside>
  </main>

  <footer id="footer">
    <div class="container footer-inner">
      <strong>Lineage 2 Interlude</strong>
      <address>
        Tomáš Gánoci · <a href="mailto:gony65@gmail.com">gony65@gmail.com</a>
      </address>
    </div>
  </footer>
</body>
</html>
