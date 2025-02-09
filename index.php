<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Lineage 2 Interlude Test server pro všechny co to chtějí zkusit." />
  <meta name="keywords" content="L2,OnlineGame,Lineage 2, Interlude" />
  <meta name="author" content="Tomáš Gánoci" />
  <meta name="robots" content="index, follow" />
  <link rel="shortcut icon" href="templates/l2/images/favicona.png" />
  <link rel="stylesheet" type="text/css" href="templates/l2/css/style.css" />
  <title>Lineage 2 Interlude
  </title>
</head>

<body>
  <div id="header">
    <div id="logo">
    </div>
    <div id="menu">
      <?php include "templates/l2/bars/menu.php" ?>
    </div>
    <a href="#header">
      <div class="hook">
      </div>
    </a>
  </div>
  <div id="section">
    <div id="site">
      <div id="side-left">
        <div class="nav-menu">
          <div class="nav-menu-top">
            <h2> Statistics </h2>
          </div>
          <div class="nav-menu-mid">
            <?php include "templates/l2/bars/statistic.php" ?>
          </div>
          <div class="nav-menu-bottom">
          </div>
        </div>
        <hr>
        <div class="nav-menu">
          <div class="nav-menu-top">
            <h2> Vote Fo Us </h2>
          </div>
          <div class="nav-menu-mid">
            <?php include "templates/l2/bars/vote.php" ?>
          </div>
          <div class="nav-menu-bottom">
          </div>
        </div>
      </div>
      <div id="side-mid">
        <div class="nav-menu">
          <div class="nav-mid-top">
          </div>
          <div class="nav-mid-mid">
            <?php include "main.php" ?>
          </div>
          <div class="nav-mid-bottom">
          </div>
        </div>
      </div>
      <div id="side-right">
        <div class="nav-menu">
          <div class="nav-menu-top">
            <h4> Server Status </h4>
          </div>
          <div class="nav-menu-mid">
            <div class="css">
              <p>
                <a href="http://jigsaw.w3.org/css-validator/check/referer" title="CSS Ověřit" target=_blank>
                  <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Ověřit"></a>
              </p>
              <p>
                <a href="http://seo-servis.cz/source-zdrojovy-kod/10256740" title="SEO Servis, optimalizace pro vyhledávače." target=_blank>
                  <img src="http://seo-servis.cz/optimised.png" alt="Seo servis" height="15" width="80"></a>
              </p>
              <p>
                <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fl2icevortex.ic.cz%2F&amp;charset=%28detect+automatically%29&amp;doctype=Inline&amp;group=0&amp;No200=1&amp;user-agent=W3C_Validator%2F1.3+http%3A%2F%2Fvalidator.w3.org%2Fservices" title="Validator" target=_blank>
                  <img src="templates/l2/images/validator.png" alt="Validator" height="15" width="80"></a>
              </p>
            </div>
            <hr>
          </div>
          <div class="nav-menu-bottom">
          </div>
        </div>
        <div class="nav-menu">
          <div class="nav-menu-top">
            <h4> Server Statistic </h4>
          </div>
          <div class="nav-menu-mid">
          </div>
          <div class="nav-menu-bottom">
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr>
  <div id="footer"> <strong>Designet by Gony</strong>
    <address>Tomáš Gánoci
      <br>
      <a href="mailto:gony65@gmail.com">Gony65@gmail.com</a>
    </address>
  </div>
</body>

</html>