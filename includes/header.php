<?php
// Variables par défaut pour les meta tags
$pageTitle = $pageTitle ?? 'Accompagnement Mémoire expertise comptable - mémoire DEC';
$pageDescription = $pageDescription ?? 'Accompagnement et coaching mémoire DEC. 12 ans d\'expérience. Suivi jusqu\'à la réussite. Zéro paiement d\'avance.';
$pageKeywords = $pageKeywords ?? 'Notice mémoire DEC, mémoire DEC, coaching mémoire DEC, coaching notice DEC, Choix du sujet mémoire DEC.';

// Déterminer si on est sur la page d'accueil
$isHomePage = basename($_SERVER['PHP_SELF']) === 'index.php';
$baseUrl = $isHomePage ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <script
      type="text/javascript"
      data-cmp-ab="1"
      src="https://cdn.consentmanager.net/delivery/autoblocking/2be9442962741.js"
      data-cmp-host="c.delivery.consentmanager.net"
      data-cmp-cdn="cdn.consentmanager.net"
      data-cmp-codesrc="0"
    ></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords); ?>" />

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/svg+xml"
      href="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgNjAgNjAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgICA8IS0tIFNoaWVsZCBiYWNrZ3JvdW5kIC0tPgogICAgPHBhdGggZD0iTTMwIDUgTDUwIDE1IEw1MCAzNSBDNTAgNDUgMzAgNTUgMzAgNTUgQzMwIDU1IDEwIDQ1IDEwIDM1IEwxMCAxNSBaIiBmaWxsPSIjQkYwNDQ5Ii8+CiAgICA8IS0tIFdoaXRlIGxpbmVzIGluIHNoaWVsZCAtLT4KICAgIDxyZWN0IHg9IjE1IiB5PSIxOCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIiIGZpbGw9IndoaXRlIi8+CiAgICA8cmVjdCB4PSIxNSIgeT0iMjIiIHdpZHRoPSIyMCIgaGVpZ2h0PSIyIiBmaWxsPSJ3aGl0ZSIvPgogICAgPHJlY3QgeD0iMTUiIHk9IjI2IiB3aWR0aD0iMjAiIGhlaWdodD0iMiIgZmlsbD0id2hpdGUiLz4KICAgIDxyZWN0IHg9IjE1IiB5PSIzMCIgd2lkdGg9IjIwIiBoZWlnaHQ9IjIiIGZpbGw9IndoaXRlIi8+CiAgICA8cmVjdCB4PSIxNSIgeT0iMzQiIHdpZHRoPSIxNSIgaGVpZ2h0PSIyIiBmaWxsPSJ3aGl0ZSIvPgogICAgPHJlY3QgeD0iMTUiIHk9IjM4IiB3aWR0aD0iMTAiIGhlaWdodD0iMiIgZmlsbD0id2hpdGUiLz4KICAgIDwhLS0gVmVydGljYWwgYWNjZW50IC0tPgogICAgPHJlY3QgeD0iNDAiIHk9IjE1IiB3aWR0aD0iMyIgaGVpZ2h0PSIyNSIgZmlsbD0id2hpdGUiLz4KPC9zdmc+"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Google tag (gtag.js) -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=AW-958038378"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "AW-958038378");
    </script>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-content">
          <a href="<?php echo $baseUrl ?: './'; ?>" class="logo">
            <svg viewBox="0 0 60 60" height="40">
              <!-- Shield background -->
              <path
                d="M30 5 L50 15 L50 35 C50 45 30 55 30 55 C30 55 10 45 10 35 L10 15 Z"
                fill="#BF0449"
              />
              <!-- White lines in shield -->
              <rect x="15" y="18" width="20" height="2" fill="white" />
              <rect x="15" y="22" width="20" height="2" fill="white" />
              <rect x="15" y="26" width="20" height="2" fill="white" />
              <rect x="15" y="30" width="20" height="2" fill="white" />
              <rect x="15" y="34" width="15" height="2" fill="white" />
              <rect x="15" y="38" width="10" height="2" fill="white" />
              <!-- Vertical accent -->
              <rect x="40" y="15" width="3" height="25" fill="white" />
            </svg>
            <span
              style="
                color: var(--color-medium-blue);
                font-size: 2rem;
                font-weight: 700;
              "
              >Staka</span
            >
          </a>
          <div class="burger-menu" id="burger-menu">
            <div class="burger-line"></div>
            <div class="burger-line"></div>
            <div class="burger-line"></div>
          </div>
          <nav class="nav" id="nav-menu">
            <a href="<?php echo $baseUrl; ?>#quiz">Quiz DEC</a>
            <a href="<?php echo $baseUrl; ?>#services">Services</a>
            <a href="<?php echo $baseUrl; ?>#formules">Formules</a>
            <a href="<?php echo $baseUrl; ?>#contact">Contact</a>
            <a href="charte-integrite.php">Charte d'intégrité</a>
          </nav>
        </div>
      </div>
    </header>
