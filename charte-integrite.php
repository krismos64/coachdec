<?php
// Page Charte d'Intégrité - Variables pour les meta tags
$pageTitle = "Charte d'Intégrité Académique | CoachDEC.fr";
$pageDescription = "Engagement éthique pour les futurs experts-comptables. Accompagnement 100% humain dans le respect des valeurs de la profession DEC.";
$pageKeywords = "charte intégrité DEC, éthique mémoire DEC, accompagnement humain DEC, coaching éthique expert comptable";

// Inclusion du header
include 'includes/header.php';
?>

<style>
    /* Styles spécifiques à la page charte */
    .charte-hero {
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, #044a9e 100%);
        color: white;
        padding: 80px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .charte-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.5;
    }

    .charte-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .charte-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: rgba(191, 4, 70, 0.2);
        border: 1px solid var(--color-accent-red);
        color: white;
        padding: 10px 22px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    .charte-hero h1 {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        font-weight: 600;
        margin-bottom: 20px;
        letter-spacing: -0.5px;
    }

    .charte-hero-subtitle {
        font-size: 1.25rem;
        font-weight: 300;
        opacity: 0.9;
        max-width: 600px;
        margin: 0 auto;
    }

    .charte-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .charte-section {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 16px;
        padding: 40px;
        margin-bottom: 30px;
        box-shadow: 0 4px 20px rgba(2, 47, 107, 0.06);
        border: 1px solid rgba(255, 255, 255, 0.8);
    }

    .charte-section-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 2px solid rgba(2, 51, 115, 0.1);
    }

    .charte-section-icon {
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        flex-shrink: 0;
        font-size: 1.5rem;
    }

    .charte-section-icon.accent {
        background: linear-gradient(135deg, var(--color-accent-red) 0%, #d40052 100%);
    }

    .charte-section h2 {
        font-size: 1.75rem;
        font-weight: 600;
        color: var(--color-dark-blue);
    }

    .charte-section p {
        color: var(--color-gray);
        margin-bottom: 20px;
        line-height: 1.7;
    }

    .highlight-box {
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        color: white;
        padding: 30px;
        border-radius: 12px;
        text-align: center;
    }

    .highlight-box h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .highlight-box p {
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 0;
    }

    .highlight-tag {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--color-accent-red);
        color: white;
        padding: 8px 18px;
        border-radius: 20px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 0.5px;
        margin-bottom: 15px;
    }

    .check-list {
        list-style: none;
        padding: 0;
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 15px 0;
        border-bottom: 1px solid rgba(2, 51, 115, 0.1);
    }

    .check-list li:last-child {
        border-bottom: none;
    }

    .list-icon {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 2px;
        font-size: 1rem;
    }

    .list-icon.success {
        background: rgba(2, 51, 115, 0.1);
        color: var(--color-dark-blue);
    }

    .list-icon.error {
        background: rgba(191, 4, 73, 0.1);
        color: var(--color-accent-red);
    }

    .list-content strong {
        color: var(--color-dark-blue);
        display: block;
        margin-bottom: 3px;
    }

    .list-content span {
        color: var(--color-gray);
        font-size: 15px;
    }

    .siec-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 20px;
    }

    .siec-item {
        background: rgba(248, 251, 255, 0.8);
        padding: 20px;
        border-radius: 10px;
        border-left: 3px solid var(--color-accent-red);
    }

    .siec-item strong {
        color: var(--color-dark-blue);
        display: block;
        margin-bottom: 5px;
        font-size: 15px;
    }

    .siec-item span {
        color: var(--color-gray);
        font-size: 14px;
    }

    .quote-box {
        background: rgba(248, 251, 255, 0.8);
        border-left: 4px solid var(--color-accent-red);
        padding: 25px 30px;
        margin: 25px 0;
        border-radius: 0 10px 10px 0;
    }

    .quote-box p {
        font-size: 1.15rem;
        font-style: italic;
        color: var(--color-dark-blue);
        margin: 0;
    }

    .coach-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-top: 20px;
    }

    .coach-badge {
        background: rgba(248, 251, 255, 0.8);
        border: 1px solid rgba(2, 51, 115, 0.1);
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 14px;
        color: var(--color-gray);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .coach-badge span {
        color: var(--color-accent-red);
    }

    .engagement-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .engagement-item {
        text-align: center;
        padding: 25px 15px;
        background: rgba(248, 251, 255, 0.8);
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .engagement-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(2, 47, 107, 0.1);
    }

    .engagement-icon {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px;
        color: white;
        font-size: 1.5rem;
    }

    .engagement-item strong {
        display: block;
        color: var(--color-dark-blue);
        margin-bottom: 5px;
    }

    .engagement-item span {
        font-size: 14px;
        color: var(--color-gray);
    }

    .cta-section {
        background: linear-gradient(135deg, var(--color-dark-blue) 0%, var(--color-medium-blue) 100%);
        color: white;
        text-align: center;
        padding: 50px 40px;
        border-radius: 16px;
        margin-top: 40px;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 200%;
        background: radial-gradient(circle, rgba(191, 4, 70, 0.15) 0%, transparent 70%);
    }

    .cta-content {
        position: relative;
        z-index: 1;
    }

    .cta-title {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .cta-section h2 {
        font-size: 2rem;
    }

    .cta-section p {
        opacity: 0.9;
        margin-bottom: 25px;
        font-size: 1.1rem;
    }

    .certification {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        background: rgba(191, 4, 70, 0.15);
        border: 1px solid rgba(191, 4, 70, 0.4);
        padding: 20px 30px;
        border-radius: 10px;
        margin-top: 25px;
    }

    .certification-icon {
        width: 50px;
        height: 50px;
        background: var(--color-accent-red);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
    }

    .certification-text {
        text-align: left;
    }

    .certification-text strong {
        display: block;
        color: white;
        font-size: 1.1rem;
    }

    .certification-text span {
        font-size: 14px;
        opacity: 0.8;
    }

    .cta-tagline {
        display: inline-block;
        border: 2px solid var(--color-accent-red);
        color: white;
        padding: 12px 30px;
        border-radius: 8px;
        font-size: 1.2rem;
        font-style: italic;
    }

    @media (max-width: 768px) {
        .charte-hero {
            padding: 60px 20px;
        }

        .charte-section {
            padding: 30px 25px;
        }

        .charte-section-header {
            flex-direction: column;
            text-align: center;
        }

        .siec-grid {
            grid-template-columns: 1fr;
        }

        .engagement-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .certification {
            flex-direction: column;
            text-align: center;
        }

        .certification-text {
            text-align: center;
        }
    }

    @media (max-width: 480px) {
        .engagement-grid {
            grid-template-columns: 1fr;
        }

        .coach-badges {
            flex-direction: column;
        }
    }
</style>

    <!-- Hero Section -->
    <section class="charte-hero">
        <div class="charte-hero-content">
            <span class="charte-hero-badge">
                🎓 Engagement Éthique
            </span>
            <h1>Notre Charte d'Intégrité Académique</h1>
            <p class="charte-hero-subtitle">Engagement éthique pour les futurs experts-comptables — Accompagnement 100% humain dans le respect des valeurs de la profession</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="charte-container">

        <!-- Introduction -->
        <section class="charte-section">
            <div class="highlight-box">
                <span class="highlight-tag">
                    💼 Notre Engagement
                </span>
                <h3>100% Accompagnement Humain — Zéro IA</h3>
                <p>Tous nos accompagnements sont réalisés par des <strong>experts-comptables diplômés</strong> et des professionnels qualifiés. Nous n'utilisons <strong>aucune intelligence artificielle générative</strong> dans notre processus de coaching, de relecture ou de conseil. Chaque recommandation est le fruit d'une expertise humaine authentique.</p>
            </div>
        </section>

        <!-- Ce que nous faisons -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon">✓</div>
                <h2>Ce que nous faisons</h2>
            </div>
            <ul class="check-list">
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Coaching méthodologique</strong>
                        <span>Vous guider dans la structuration de votre réflexion et votre démarche intellectuelle</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Aide au choix du sujet</strong>
                        <span>Valider la pertinence et la faisabilité de votre problématique avec vous</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Accompagnement à la notice</strong>
                        <span>Conseils pour maximiser vos chances d'obtenir le 4.1 dès le premier dépôt</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Relecture critique</strong>
                        <span>Identification des points d'amélioration sur la forme et la cohérence de votre travail</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Vérification de conformité</strong>
                        <span>Respect des exigences formelles et réglementaires du SIEC</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Conseils bibliographiques</strong>
                        <span>Orientation vers les sources pertinentes, actualisées et reconnues</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Préparation à la soutenance</strong>
                        <span>Simulations, conseils de posture et anticipation des questions du jury</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon success">✓</div>
                    <div class="list-content">
                        <strong>Développement de vos compétences</strong>
                        <span>Vous rendre autonome dans votre démarche de recherche et de réflexion</span>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Ce que nous ne faisons PAS -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon accent">✕</div>
                <h2>Ce que nous ne faisons PAS</h2>
            </div>
            <ul class="check-list">
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Rédaction du mémoire à la place du candidat</strong>
                        <span>Votre mémoire doit refléter votre réflexion personnelle</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Production de contenu original pour votre compte</strong>
                        <span>Nous guidons, nous ne créons pas à votre place</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Élaboration des outils et livrables à votre place</strong>
                        <span>Les outils proposés doivent être les vôtres</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Utilisation d'IA générative pour produire du contenu</strong>
                        <span>100% de nos conseils sont issus d'une expertise humaine</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Plagiat ou réutilisation de travaux existants</strong>
                        <span>Chaque mémoire est unique et original</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Substitution au candidat lors des échanges avec le jury</strong>
                        <span>La soutenance est votre moment, pas le nôtre</span>
                    </div>
                </li>
                <li>
                    <div class="list-icon error">✕</div>
                    <div class="list-content">
                        <strong>Garantie de résultat sur la décision du jury</strong>
                        <span>Le jury est indépendant — nous maximisons vos chances, sans promettre l'impossible</span>
                    </div>
                </li>
            </ul>
        </section>

        <!-- Respect des exigences du SIEC -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon">🎓</div>
                <h2>Respect des exigences du SIEC</h2>
            </div>
            <p>Notre méthodologie est alignée sur les <strong>attentes officielles du jury national du DEC</strong>. Nous accompagnons les candidats dans le respect des critères d'évaluation :</p>

            <div class="siec-grid">
                <div class="siec-item">
                    <strong>Apport à la profession</strong>
                    <span>Valeur ajoutée pour l'expertise comptable</span>
                </div>
                <div class="siec-item">
                    <strong>Rigueur méthodologique</strong>
                    <span>Démarche scientifique et structurée</span>
                </div>
                <div class="siec-item">
                    <strong>Qualité de la forme</strong>
                    <span>Présentation et mise en page irréprochables</span>
                </div>
                <div class="siec-item">
                    <strong>Originalité des outils</strong>
                    <span>Pertinence et innovation des livrables</span>
                </div>
            </div>

            <div class="quote-box">
                <p>« Votre mémoire reste votre création personnelle. Il témoigne de votre capacité de réflexion sur les missions et la profession d'expert-comptable. Notre rôle est de vous aider à révéler le meilleur de votre travail, pas de le faire à votre place. »</p>
            </div>
        </section>

        <!-- Confidentialité -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon">🔒</div>
                <h2>Confidentialité absolue</h2>
            </div>
            <p>Tous les échanges, documents et travaux sont <strong>strictement confidentiels</strong>. Nous ne partageons, ne conservons ni ne réutilisons jamais les mémoires ou informations de nos clients. Chaque accompagnement est unique et personnalisé.</p>
        </section>

        <!-- Nos Coachs -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon">👥</div>
                <h2>Nos coachs</h2>
            </div>
            <p>Nos intervenants sont des professionnels reconnus, engagés à respecter la présente charte :</p>

            <div class="coach-badges">
                <div class="coach-badge">
                    <span>⭐</span>
                    Experts-comptables diplômés
                </div>
                <div class="coach-badge">
                    <span>⭐</span>
                    Commissaires aux comptes
                </div>
                <div class="coach-badge">
                    <span>⭐</span>
                    Connaissance approfondie de la profession
                </div>
                <div class="coach-badge">
                    <span>⭐</span>
                    Formés aux exigences du DEC
                </div>
            </div>
        </section>

        <!-- Engagement envers la profession -->
        <section class="charte-section">
            <div class="charte-section-header">
                <div class="charte-section-icon">❤️</div>
                <h2>Notre engagement envers la profession</h2>
            </div>
            <p>En tant qu'acteurs de l'accompagnement des futurs experts-comptables, nous avons conscience de notre responsabilité envers la profession. Un expert-comptable doit démontrer son intégrité dès l'obtention de son diplôme.</p>

            <div class="engagement-grid">
                <div class="engagement-item">
                    <div class="engagement-icon">⚖️</div>
                    <strong>Éthique</strong>
                    <span>Promouvoir la déontologie professionnelle</span>
                </div>
                <div class="engagement-item">
                    <div class="engagement-icon">🎯</div>
                    <strong>Autonomie</strong>
                    <span>Former des candidats compétents</span>
                </div>
                <div class="engagement-item">
                    <div class="engagement-icon">📋</div>
                    <strong>Conformité</strong>
                    <span>Respecter les règles du DEC</span>
                </div>
                <div class="engagement-item">
                    <div class="engagement-icon">🏆</div>
                    <strong>Excellence</strong>
                    <span>Préserver la valeur du diplôme</span>
                </div>
            </div>
        </section>

        <!-- CTA Final -->
        <section class="cta-section">
            <div class="cta-content">
                <div class="cta-title">
                    <span style="font-size: 2rem;">📜</span>
                    <h2>Certification</h2>
                </div>
                <p>Nous certifions que tous nos services sont réalisés dans le respect de la présente charte.<br>Votre parcours vers le DEC sera accompagné avec authenticité, expertise et intégrité.</p>

                <div class="certification">
                    <div class="certification-icon">🏅</div>
                    <div class="certification-text">
                        <strong>100% Humain — 0% IA</strong>
                        <span>L'excellence académique dans le respect de l'éthique</span>
                    </div>
                </div>

                <div style="margin-top: 30px;">
                    <span class="cta-tagline">« Votre réussite, votre mérite — Notre accompagnement, notre engagement »</span>
                </div>
            </div>
        </section>

    </main>

<?php include 'includes/footer.php'; ?>

<?php include 'includes/legal-modal.php'; ?>

    <script>
      // Burger menu functionality
      document.addEventListener("DOMContentLoaded", function () {
        const burgerMenu = document.getElementById("burger-menu");
        const navMenu = document.getElementById("nav-menu");

        if (burgerMenu && navMenu) {
          burgerMenu.addEventListener("click", function () {
            burgerMenu.classList.toggle("active");
            navMenu.classList.toggle("active");
          });

          navMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", function () {
              burgerMenu.classList.remove("active");
              navMenu.classList.remove("active");
            });
          });
        }
      });

      // Legal Modal functionality
      function openLegalModal() {
        const modal = document.getElementById("legalModal");
        if (modal) {
          modal.classList.add("active");
          document.body.style.overflow = "hidden";
        }
      }

      function closeLegalModal() {
        const modal = document.getElementById("legalModal");
        if (modal) {
          modal.classList.remove("active");
          document.body.style.overflow = "auto";
        }
      }

      document.addEventListener("click", function (e) {
        const modal = document.getElementById("legalModal");
        if (modal && e.target === modal) {
          closeLegalModal();
        }
      });

      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closeLegalModal();
        }
      });
    </script>
  </body>
</html>
