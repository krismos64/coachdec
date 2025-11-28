<?php
// Page d'accueil - Variables pour les meta tags
$pageTitle = 'Accompagnement Mémoire expertise comptable - mémoire DEC';
$pageDescription = 'Accompagnement et coaching mémoire DEC. 12 ans d\'expérience. Suivi jusqu\'à la réussite. Zéro paiement d\'avance.';
$pageKeywords = 'Notice mémoire DEC, mémoire DEC, coaching mémoire DEC, coaching notice DEC, Choix du sujet mémoire DEC.';

// Inclusion du header
include 'includes/header.php';
?>

    <section class="hero">
      <div class="container">
        <h1>Accompagnement Mémoire expertise comptable - mémoire DEC</h1>
        <p>
          Accompagnement et coaching mémoire DEC. 12 ans d'expérience. Suivi
          jusqu'à la réussite. Zéro paiement d'avance.
        </p>
        <div class="hero-buttons">
          <a href="#contact" class="cta-button">Démarrer maintenant</a>
          <a href="tel:+33615078152" class="callback-button">
            <span class="phone-icon">📞</span>
            Expert DEC
          </a>
        </div>
      </div>
    </section>

    <section class="banner">
      <div class="container">
        <div class="banner-content">
          <div class="banner-item">
            <span>✓</span>
            <span>Zéro Plagiat</span>
          </div>
          <div class="banner-item">
            <span>📞</span>
            <span>100% Humain</span>
          </div>
          <div class="banner-item">
            <span>📞</span>
            <span>Suivi jusqu'à la réussite</span>
          </div>
          <div class="banner-item">
            <span>📞</span>
            <span>Zéro paiement d'avance</span>
          </div>
          <div class="banner-item">
            <span>📞</span>
            <span>Budget adapté</span>
          </div>
          <div class="banner-item">
            <span>📞</span>
            <span>Paiement en 10 fois</span>
          </div>
        </div>
      </div>
    </section>

    <main>
      <div class="container">
        <section class="quiz-section" id="quiz">
          <div class="container">
            <h2>Quiz DEC : Nouvelles Directives 2025 !</h2>
            <div class="quiz-intro">
              <p>
                🎯 <strong>Défi DEC</strong> : Maîtrisez-vous les nouvelles
                directives du mémoire ?
              </p>
              <p>
                🏆 <strong>Récompense</strong> : Le gagnant remporte
                <span style="color: var(--color-accent-red); font-weight: 600"
                  >30 minutes gratuites</span
                >
                avec un expert pour optimiser son mémoire selon les nouvelles
                règles !
              </p>
            </div>

            <div class="quiz-container" id="quiz-container">
              <div class="quiz-question active" data-question="1">
                <h3>Question 1/5</h3>
                <p>
                  Selon les nouvelles directives 2025, quelle est la volumétrie
                  maximale autorisée pour les annexes ?
                </p>
                <div class="quiz-options">
                  <button onclick="selectAnswer(1, 'A', false)">
                    A) 50 pages maximum
                  </button>
                  <button onclick="selectAnswer(1, 'B', true)">
                    B) 100 pages (même volumétrie que le mémoire)
                  </button>
                  <button onclick="selectAnswer(1, 'C', false)">
                    C) 150 pages maximum
                  </button>
                  <button onclick="selectAnswer(1, 'D', false)">
                    D) Aucune limite définie
                  </button>
                </div>
              </div>

              <div class="quiz-question" data-question="2">
                <h3>Question 2/5</h3>
                <p>
                  Comment la problématique doit-elle être formulée selon les
                  nouvelles exigences ?
                </p>
                <div class="quiz-options">
                  <button onclick="selectAnswer(2, 'A', false)">
                    A) Sous forme d'affirmation
                  </button>
                  <button onclick="selectAnswer(2, 'B', true)">
                    B) Sous forme d'une question unique (impératif)
                  </button>
                  <button onclick="selectAnswer(2, 'C', false)">
                    C) Sous forme de plusieurs sous-questions
                  </button>
                  <button onclick="selectAnswer(2, 'D', false)">
                    D) Sous forme d'hypothèse
                  </button>
                </div>
              </div>

              <div class="quiz-question" data-question="3">
                <h3>Question 3/5</h3>
                <p>
                  Quelles sont les nouvelles marges latérales requises pour le
                  mémoire ?
                </p>
                <div class="quiz-options">
                  <button onclick="selectAnswer(3, 'A', false)">
                    A) 3,5 cm à gauche et à droite
                  </button>
                  <button onclick="selectAnswer(3, 'B', true)">
                    B) 2,5 cm à gauche et à droite
                  </button>
                  <button onclick="selectAnswer(3, 'C', false)">
                    C) 3 cm à gauche et à droite
                  </button>
                  <button onclick="selectAnswer(3, 'D', false)">
                    D) 2 cm à gauche et à droite
                  </button>
                </div>
              </div>

              <div class="quiz-question" data-question="4">
                <h3>Question 4/5</h3>
                <p>
                  Comment le mémoire et les annexes doivent-ils être présentés ?
                </p>
                <div class="quiz-options">
                  <button onclick="selectAnswer(4, 'A', false)">
                    A) En fichiers séparés
                  </button>
                  <button onclick="selectAnswer(4, 'B', true)">
                    B) En un seul fichier PDF avec renvois automatisés
                  </button>
                  <button onclick="selectAnswer(4, 'C', false)">
                    C) En deux tomes distincts
                  </button>
                  <button onclick="selectAnswer(4, 'D', false)">
                    D) Format libre selon le candidat
                  </button>
                </div>
              </div>

              <div class="quiz-question" data-question="5">
                <h3>Question 5/5</h3>
                <p>
                  Concernant la réglementation et la pratique dans le mémoire :
                </p>
                <div class="quiz-options">
                  <button onclick="selectAnswer(5, 'A', false)">
                    A) Il faut les séparer en parties distinctes
                  </button>
                  <button onclick="selectAnswer(5, 'B', true)">
                    B) Il faut les confronter tout au long du mémoire
                  </button>
                  <button onclick="selectAnswer(5, 'C', false)">
                    C) La réglementation doit être en annexe
                  </button>
                  <button onclick="selectAnswer(5, 'D', false)">
                    D) La pratique prime sur la réglementation
                  </button>
                </div>
              </div>

              <div class="quiz-result" id="quiz-result" style="display: none">
                <h3>Résultat du Quiz</h3>
                <div class="score-display">
                  <span id="score-text">Votre score : </span>
                  <span id="score-value">0/5</span>
                </div>
                <div id="result-message"></div>
                <div class="quiz-actions">
                  <button onclick="restartQuiz()" class="quiz-restart">
                    Recommencer
                  </button>
                  <a
                    href="https://wa.me/33615078152?text=Bonjour,%20j'ai%20terminé%20le%20quiz%20DEC%20sur%20les%20nouvelles%20directives%202025%20et%20je%20souhaite%20réclamer%20ma%20consultation%20gratuite%20!"
                    target="_blank"
                    rel="noopener"
                    class="quiz-contact"
                    id="winner-contact"
                    style="display: none"
                  >
                    🏆 Réclamer ma consultation gratuite
                  </a>
                </div>
              </div>

              <div class="quiz-progress">
                <div class="progress-bar">
                  <div class="progress-fill" id="progress-fill"></div>
                </div>
                <span class="progress-text" id="progress-text"
                  >Question 1 sur 5</span
                >
              </div>
            </div>
          </div>
        </section>

        <section class="content-section" id="services">
          <h2>Pourquoi Choisir Notre Accompagnement ?</h2>
          <div class="why-choose-list">
            <div class="why-choose-item">
              <h4>📞 12 ans d'expérience</h4>
              <p>en accompagnement de mémoires DEC</p>
            </div>
            <div class="why-choose-item">
              <h4>📞 Experts en comptabilité</h4>
              <p>maîtrise parfaite des enjeux professionnels</p>
            </div>
            <div class="why-choose-item">
              <h4>📞 Connaissance du jury</h4>
              <p>anticipation des attentes et critères d'évaluation</p>
            </div>
            <div class="why-choose-item">
              <h4>📞 Accompagnement personnalisé</h4>
              <p>suivi individuel tout au long du processus</p>
            </div>
            <div class="why-choose-item">
              <h4>📞 Méthodologie éprouvée</h4>
              <p>approche structurée et efficace</p>
            </div>
            <div class="why-choose-item">
              <h4>📞 Préparation soutenance</h4>
              <p>coaching pour l'oral et support PowerPoint</p>
            </div>
          </div>

          <h3>Nos Services d'Accompagnement</h3>
          <p>
            Depuis 2012, Staka met à disposition des experts-comptables
            stagiaires une équipe d'experts en comptabilité et gestion pour les
            guider dans leur mémoire de DEC.
          </p>

          <div
            style="
              background: linear-gradient(
                135deg,
                rgba(0, 182, 122, 0.05) 0%,
                rgba(0, 182, 122, 0.1) 100%
              );
              padding: 2rem;
              border-radius: 15px;
              text-align: center;
              margin: 2rem 0;
            "
          >
            <h3 style="color: #00b67a; margin-bottom: 1rem">
              ✓ Suivi jusqu'à la Réussite
            </h3>
            <p
              style="
                font-size: 1.2rem;
                font-weight: 600;
                color: var(--color-dark-blue);
                margin-bottom: 1rem;
              "
            >
              Pas de supplément suite 4.2 ou 4.3
            </p>
            <p style="color: var(--color-gray)">
              Avec 12 ans d'expérience dans l'accompagnement de mémoires DEC,
              nos experts vous guident vers la réussite.
            </p>
          </div>

          <div
            style="
              background: linear-gradient(
                135deg,
                rgba(191, 4, 73, 0.05) 0%,
                rgba(191, 4, 73, 0.1) 100%
              );
              padding: 2rem;
              border-radius: 15px;
              text-align: center;
              margin: 2rem 0;
            "
          >
            <h3 style="color: var(--color-accent-red); margin-bottom: 1rem">
              📞 Session Mai 2026
            </h3>
            <p
              style="
                font-size: 1.1rem;
                font-weight: 600;
                color: var(--color-dark-blue);
                margin-bottom: 1rem;
              "
            >
              Zéro paiement avant le 4.1. 100% de réussite à la session de mai
              2025.
            </p>
            <p style="color: var(--color-gray)">
              Pour garantir un encadrement personnalisé de qualité, nous
              limitons chaque session à 3 candidats maximum. Les inscriptions
              pour la session de mai 2026 sont désormais ouvertes.
            </p>
          </div>
        </section>

        <section class="experts">
          <div class="container">
            <h2>Nos Experts DEC</h2>
            <div class="experts-grid">
              <div class="expert-card">
                <div class="expert-avatar">JO</div>
                <div class="expert-name">Jordan</div>
                <div class="expert-title">Expert Comptable</div>
                <div class="expert-department">Spécialiste Mémoire</div>
              </div>
              <div class="expert-card">
                <div class="expert-avatar">MI</div>
                <div class="expert-name">Mickael</div>
                <div class="expert-title">Directeur de Cabinet</div>
                <div class="expert-department">15 ans d'expérience</div>
              </div>
              <div class="expert-card">
                <div class="expert-avatar">MI</div>
                <div class="expert-name">Michel</div>
                <div class="expert-title">Expert Comptable</div>
                <div class="expert-department">Commissaire aux Comptes</div>
              </div>
            </div>
          </div>
        </section>

        <section class="testimonials">
          <div class="container">
            <h2>Témoignages DEC</h2>
            <div class="trustpilot-rating">
              <div class="rating-stars">
                <span class="stars">★★★★★</span>
                <span class="rating-text">4,7/5 sur Trustpilot</span>
                <span class="rating-badge">Excellent</span>
              </div>
            </div>
            <div class="testimonials-grid">
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "Accompagnement exceptionnel pour mon mémoire DEC ! Mon expert
                  m'a guidé du choix du sujet à la soutenance. Réussite au
                  premier passage grâce à leur connaissance parfaite du jury."
                </p>
                <div class="testimonial-author">
                  <strong>Expert-Comptable Diplômé</strong>
                  <span>Session Mai 2024</span>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "La méthodologie est parfaite ! Construction de la
                  problématique, plan démonstratif, respect des 100 pages. Tout
                  était cadré et professionnel. Je recommande vivement."
                </p>
                <div class="testimonial-author">
                  <strong>Méthodologie éprouvée</strong>
                  <span>Session Novembre 2024</span>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "Le coaching soutenance a été décisif. Support PowerPoint
                  professionnel, simulation d'entretien, conseils stratégiques.
                  J'étais parfaitement préparé à l'oral."
                </p>
                <div class="testimonial-author">
                  <strong>Soutenance réussie</strong>
                  <span>Session Mai 2024</span>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "Suivi personnalisé exemplaire. Mon expert connaissait
                  parfaitement les enjeux de l'expertise comptable et les
                  attentes du jury. Résultat : 4.1 du premier coup !"
                </p>
                <div class="testimonial-author">
                  <strong>Suivi personnalisé</strong>
                  <span>Session Novembre 2023</span>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "Mise aux normes parfaite : format réglementaire,
                  bibliographie classée, annexes organisées avec liens
                  hypertextes. Travail de qualité professionnelle."
                </p>
                <div class="testimonial-author">
                  <strong>Normes respectées</strong>
                  <span>Session Mai 2023</span>
                </div>
              </div>
              <div class="testimonial-card">
                <div class="testimonial-stars">★★★★★</div>
                <p>
                  "12 ans d'expérience, ça se ressent ! Anticipation parfaite
                  des critères d'évaluation. Zéro paiement d'avance et suivi
                  jusqu'à la réussite. Excellent service."
                </p>
                <div class="testimonial-author">
                  <strong>Expertise reconnue</strong>
                  <span>Session Novembre 2024</span>
                </div>
              </div>
            </div>
            <div class="trustpilot-link">
              <a
                href="https://fr.trustpilot.com/review/staka.fr"
                target="_blank"
                rel="noopener"
                class="trustpilot-button"
              >
                <span>Voir tous les avis sur</span>
                <img
                  src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwIiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMTAwIDI0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBkPSJNMTIgMEw5LjMxIDguOTFIMEw3LjU4IDE0LjQxTDQuODggMjMuMzJMMTIgMTguMzJMMTkuMTIgMjMuMzJMMTYuNDIgMTQuNDFMMjQgOC45MUgxNC42OUwxMiAwWiIgZmlsbD0iIzAwQjY3QSIvPgo8L3N2Zz4K"
                  alt="Trustpilot"
                  style="height: 20px; margin-left: 8px"
                />
              </a>
            </div>
          </div>
        </section>

        <section class="process">
          <div class="container">
            <h2>Processus DEC en 10 Étapes</h2>
            <div class="process-steps">
              <div class="process-step">
                <div class="step-number">1</div>
                <h3>Recherche de Sujets</h3>
                <p>
                  Identification d'un sujet avec un
                  <strong>véritable apport à la profession</strong> comptable
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">2</div>
                <h3>Conception de la Notice</h3>
                <p>
                  Élaboration détaillée de votre
                  <strong>notice de mémoire</strong> selon les exigences
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">3</div>
                <h3>Conception des Outils</h3>
                <p>
                  Création des <strong>outils méthodologiques</strong> adaptés à
                  votre recherche
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">4</div>
                <h3>Suivi personnalisé</h3>
                <p>
                  Accompagnement continu tout au long de votre travail.
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">5</div>
                <h3>Conception des Annexes</h3>
                <p>
                  Élaboration des <strong>annexes techniques</strong> et
                  documents supports
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">6</div>
                <h3>Relecture Experte</h3>
                <p>
                  <strong>Révision professionnelle</strong> de l'ensemble du
                  mémoire
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">7</div>
                <h3>Mise en Page Pro</h3>
                <p>
                  Formatage professionnel avec
                  <strong>liens hypertextes</strong> intégrés
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">8</div>
                <h3>Dépôt sur plateforme DEXCO</h3>
                <p>
                  Dépôt du <strong>mémoire finalisé</strong> sur la plateforme
                  officielle
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">9</div>
                <h3>Préparation Soutenance</h3>
                <p>
                  <strong>Coaching intensif</strong> pour votre présentation
                  orale
                </p>
              </div>
              <div class="process-step">
                <div class="step-number">10</div>
                <h3>Soutenances Blanches</h3>
                <p>
                  <strong>Deux répétitions complètes</strong> en conditions
                  réelles
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="formulas" id="formules">
          <div class="container">
            <h2>Nos Formules</h2>
            <div class="formulas-grid">
              <div class="formula-card">
                <h3>Accompagnement Complet</h3>
                <p>De la problématique à la soutenance</p>
                <ul>
                  <li>Suivi personnalisé par un expert</li>
                  <li>Révisions illimitées</li>
                  <li>Préparation complète à l'oral</li>
                  <li>Support PowerPoint inclus</li>
                </ul>
              </div>
              <div class="formula-card">
                <h3>Accompagnement Partiel</h3>
                <p>Aide ponctuelle sur une étape spécifique</p>
                <ul>
                  <li>Relecture et corrections professionnelles</li>
                  <li>Mise aux normes DEC</li>
                  <li>Aide ciblée sur demande</li>
                  <li>Conseil expert personnalisé</li>
                </ul>
              </div>
              <div class="formula-card">
                <h3>Coaching Soutenance</h3>
                <p>Préparation optimale de la présentation</p>
                <ul>
                  <li>Support PowerPoint professionnel</li>
                  <li>Simulation d'entretien</li>
                  <li>Conseils stratégiques personnalisés</li>
                  <li>Préparation questions jury</li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        <section class="contact" id="contact">
          <div class="container">
            <h2>Démarrez votre DEC</h2>

            <div
              style="
                background: linear-gradient(
                  135deg,
                  rgba(191, 4, 73, 0.05) 0%,
                  rgba(191, 4, 73, 0.1) 100%
                );
                padding: 3rem;
                border-radius: 25px;
                text-align: center;
                margin-bottom: 4rem;
              "
            >
              <h3
                style="
                  color: var(--color-accent-red);
                  margin-bottom: 1.5rem;
                  font-size: 2rem;
                "
              >
                📞 Contact Privilégié
              </h3>
              <p
                style="
                  color: var(--color-gray);
                  font-size: 1.2rem;
                  margin-bottom: 2rem;
                  max-width: 600px;
                  margin-left: auto;
                  margin-right: auto;
                "
              >
                Un premier contact téléphonique nous permet de mieux cerner vos
                attentes et de vous proposer la solution la plus adaptée.
                Contactez-nous pour un échange gratuit et sans engagement.
              </p>
              <div
                style="
                  display: flex;
                  gap: 1.5rem;
                  justify-content: center;
                  flex-wrap: wrap;
                "
              >
                <a
                  href="tel:+33615078152"
                  style="
                    background: linear-gradient(
                      135deg,
                      var(--color-accent-red) 0%,
                      #d40052 100%
                    );
                    color: white;
                    padding: 1.2rem 2.5rem;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 1.1rem;
                    display: inline-flex;
                    align-items: center;
                    gap: 0.5rem;
                    box-shadow: 0 8px 25px rgba(191, 4, 73, 0.2);
                    transition: all 0.3s ease;
                  "
                >
                  <span style="font-size: 1.2rem">📞</span>
                  06 15 07 81 52
                </a>
                <a
                  href="https://wa.me/33615078152?text=Bonjour,%20je%20souhaite%20avoir%20plus%20d'informations%20sur%20votre%20accompagnement%20DEC."
                  target="_blank"
                  rel="noopener"
                  style="
                    background: linear-gradient(
                      135deg,
                      #25d366 0%,
                      #128c7e 100%
                    );
                    color: white;
                    padding: 1.2rem 2.5rem;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 1.1rem;
                    display: inline-flex;
                    align-items: center;
                    gap: 0.5rem;
                    box-shadow: 0 8px 25px rgba(37, 211, 102, 0.2);
                    transition: all 0.3s ease;
                  "
                >
                  <svg
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="white"
                    style="margin-right: 5px"
                  >
                    <path
                      d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"
                    />
                  </svg>
                  WhatsApp
                </a>
              </div>
            </div>

            <form class="contact-form" id="contact-form" method="POST" action="contact.php">
              <!-- Honeypot anti-spam (champ caché) -->
              <input type="text" name="website" style="display: none;" tabindex="-1" autocomplete="off" />

              <div class="form-group">
                <label for="nom">Nom *</label>
                <input type="text" id="nom" name="nom" required />
              </div>
              <div class="form-group">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required />
              </div>
              <div class="form-group">
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" />
              </div>
              <div class="form-group">
                <label for="session">Session DEC *</label>
                <select id="session" name="session" required>
                  <option value="">Sélectionnez</option>
                  <option value="mai-2025">Mai 2025</option>
                  <option value="novembre-2025">Novembre 2025</option>
                  <option value="mai-2026">Mai 2026</option>
                  <option value="novembre-2026">Novembre 2026</option>
                </select>
              </div>
              <div class="form-group">
                <label for="formule">Formule souhaitée *</label>
                <select id="formule" name="formule" required>
                  <option value="">Sélectionnez</option>
                  <option value="complet">Accompagnement Complet</option>
                  <option value="partiel">Accompagnement Partiel</option>
                  <option value="coaching">Coaching Soutenance</option>
                </select>
              </div>
              <div class="form-group">
                <label for="message">Votre projet DEC *</label>
                <textarea
                  id="message"
                  name="message"
                  placeholder="Décrivez votre projet de mémoire DEC, vos besoins et vos délais..."
                  required
                ></textarea>
              </div>
              <div class="form-submit">
                <button type="submit" id="submit-btn">Contactez-nous</button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </main>

<?php include 'includes/footer.php'; ?>

    <!-- CTA Popup -->
    <div class="cta-popup" id="ctaPopup">
      <div class="cta-popup-content">
        <button class="cta-popup-close" onclick="closePopup()">&times;</button>
        <h2>📞 Consultation DEC</h2>
        <p>
          30 minutes avec un expert DEC pour analyser votre projet de mémoire et
          vous proposer un accompagnement personnalisé.
        </p>
        <div class="cta-popup-buttons">
          <a
            href="https://wa.me/33615078152?text=Bonjour,%20je%20veux%20réserver%20ma%20consultation%20DEC%20de%2030%20minutes."
            class="cta-popup-button"
            target="_blank"
            rel="noopener"
          >
            <svg
              width="20"
              height="20"
              viewBox="0 0 24 24"
              fill="currentColor"
              style="margin-right: 8px"
            >
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"
              />
            </svg>
            Réserver sur WhatsApp
          </a>
          <button class="cta-popup-button secondary" onclick="closePopup()">
            Plus tard
          </button>
        </div>
      </div>
    </div>

<?php include 'includes/legal-modal.php'; ?>

    <script type="text/javascript">
      // Initialize when page loads
      document.addEventListener("DOMContentLoaded", function () {
        // Burger menu functionality
        const burgerMenu = document.getElementById("burger-menu");
        const navMenu = document.getElementById("nav-menu");

        if (burgerMenu && navMenu) {
          burgerMenu.addEventListener("click", function () {
            burgerMenu.classList.toggle("active");
            navMenu.classList.toggle("active");
          });

          // Close menu when clicking on a link
          navMenu.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", function () {
              burgerMenu.classList.remove("active");
              navMenu.classList.remove("active");
            });
          });

          // Close menu when clicking outside
          document.addEventListener("click", function (e) {
            if (!burgerMenu.contains(e.target) && !navMenu.contains(e.target)) {
              burgerMenu.classList.remove("active");
              navMenu.classList.remove("active");
            }
          });
        }

        // PHP Form submission via AJAX
        const contactForm = document.getElementById("contact-form");
        if (contactForm) {
          contactForm.addEventListener("submit", function (event) {
            event.preventDefault();

            const submitBtn = document.getElementById("submit-btn");
            const originalText = submitBtn.textContent;

            // Show loading state
            submitBtn.textContent = "Envoi en cours...";
            submitBtn.disabled = true;

            // Create FormData from the form
            const formData = new FormData(this);

            // Send via fetch to contact.php
            fetch("contact.php", {
              method: "POST",
              body: formData
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                alert("✅ " + data.message);
                contactForm.reset();
              } else {
                alert("❌ " + data.message);
              }
              submitBtn.textContent = originalText;
              submitBtn.disabled = false;
            })
            .catch(error => {
              console.error("Erreur:", error);
              alert("❌ Erreur lors de l'envoi. Veuillez nous contacter directement au 06 15 07 81 52.");
              submitBtn.textContent = originalText;
              submitBtn.disabled = false;
            });
          });
        }

        // Initialize other functions
        animateOnScroll();
        initPopup();
      });

      // Smooth scrolling for anchor links
      document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
          e.preventDefault();
          const target = document.querySelector(this.getAttribute("href"));
          if (target) {
            target.scrollIntoView({
              behavior: "smooth",
            });
          }
        });
      });

      // CTA Popup functionality
      function showPopup() {
        const popup = document.getElementById("ctaPopup");
        if (popup) {
          popup.classList.add("active");
        }
      }

      function closePopup() {
        const popup = document.getElementById("ctaPopup");
        if (popup) {
          popup.classList.remove("active");
          localStorage.setItem("popupShown", "true");
        }
      }

      // Show popup after 30 seconds if not already shown
      function initPopup() {
        if (!localStorage.getItem("popupShown")) {
          setTimeout(showPopup, 30000);
        }
      }

      // Close popup when clicking outside
      document.addEventListener("click", function (e) {
        const popup = document.getElementById("ctaPopup");
        if (popup && e.target === popup) {
          closePopup();
        }
      });

      // Close popup with Escape key
      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closePopup();
        }
      });

      // Legal Modal functionality
      function openLegalModal() {
        const modal = document.getElementById("legalModal");
        if (modal) {
          modal.classList.add("active");
          // Prevent body scroll when modal is open
          document.body.style.overflow = "hidden";
        }
      }

      function closeLegalModal() {
        const modal = document.getElementById("legalModal");
        if (modal) {
          modal.classList.remove("active");
          // Restore body scroll
          document.body.style.overflow = "auto";
        }
      }

      // Close legal modal when clicking outside
      document.addEventListener("click", function (e) {
        const modal = document.getElementById("legalModal");
        if (modal && e.target === modal) {
          closeLegalModal();
        }
      });

      // Close legal modal with Escape key
      document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") {
          closeLegalModal();
        }
      });

      // Quiz functionality
      let currentQuestion = 1;
      let score = 0;
      let answers = {};
      const totalQuestions = 5;

      // Correct answers for each question
      const correctAnswers = {
        1: "B", // 100 pages (même volumétrie que le mémoire)
        2: "B", // Sous forme d'une question unique (impératif)
        3: "B", // 2,5 cm à gauche et à droite
        4: "B", // En un seul fichier PDF avec renvois automatisés
        5: "B", // Il faut les confronter tout au long du mémoire
      };

      function selectAnswer(questionNum, option, isCorrect) {
        // Store the answer
        answers[questionNum] = { option, isCorrect };

        // Update visual feedback
        const buttons = document.querySelectorAll(
          `[data-question="${questionNum}"] button`
        );
        buttons.forEach((btn) => {
          btn.classList.remove("selected", "correct", "incorrect");
          btn.disabled = true;
        });

        const selectedButton = event.target;
        selectedButton.classList.add("selected");

        // Show correct/incorrect after a brief delay
        setTimeout(() => {
          buttons.forEach((btn) => {
            const btnOption = btn.textContent.charAt(0); // Get A, B, C, or D
            const isCorrectOption = btnOption === correctAnswers[questionNum];

            if (isCorrectOption) {
              btn.classList.add("correct");
            } else if (btn === selectedButton && !isCorrect) {
              btn.classList.add("incorrect");
            }
          });

          // Auto advance after showing results
          setTimeout(() => {
            nextQuestion();
          }, 1500);
        }, 500);
      }

      function nextQuestion() {
        if (currentQuestion < totalQuestions) {
          // Hide current question
          document
            .querySelector(`[data-question="${currentQuestion}"]`)
            .classList.remove("active");

          // Show next question
          currentQuestion++;
          document
            .querySelector(`[data-question="${currentQuestion}"]`)
            .classList.add("active");

          // Update progress
          updateProgress();
        } else {
          // Show results
          showResults();
        }
      }

      function updateProgress() {
        const progressFill = document.getElementById("progress-fill");
        const progressText = document.getElementById("progress-text");

        const progressPercentage = (currentQuestion / totalQuestions) * 100;
        progressFill.style.width = progressPercentage + "%";
        progressText.textContent = `Question ${currentQuestion} sur ${totalQuestions}`;
      }

      function showResults() {
        // Calculate score
        score = Object.values(answers).filter(
          (answer) => answer.isCorrect
        ).length;

        // Hide quiz questions and show results
        document
          .querySelectorAll(".quiz-question")
          .forEach((q) => (q.style.display = "none"));
        document.getElementById("quiz-result").style.display = "block";

        // Update score display
        document.getElementById(
          "score-value"
        ).textContent = `${score}/${totalQuestions}`;

        // Update progress to 100%
        document.getElementById("progress-fill").style.width = "100%";
        document.getElementById("progress-text").textContent = "Quiz terminé !";

        // Show appropriate message
        const resultMessage = document.getElementById("result-message");
        const winnerContact = document.getElementById("winner-contact");

        if (score === 5) {
          resultMessage.innerHTML = `
                    <div style="color: #00B67A; font-weight: 600; font-size: 1.3rem; margin-bottom: 1rem;">
                        🎉 PARFAIT ! 🎉
                    </div>
                    <p>Vous maîtrisez parfaitement les nouvelles directives 2025 du SIEC !
                    Vous remportez <strong style="color: var(--color-accent-red);">30 minutes gratuites</strong>
                    avec un expert Staka pour optimiser votre mémoire selon les nouvelles règles.</p>
                `;
          winnerContact.style.display = "inline-flex";
        } else if (score >= 3) {
          resultMessage.innerHTML = `
                    <div style="color: var(--color-medium-blue); font-weight: 600; font-size: 1.2rem; margin-bottom: 1rem;">
                        👏 Très bien !
                    </div>
                    <p>Vous avez une bonne connaissance des nouvelles directives DEC.
                    Quelques révisions et votre mémoire sera parfaitement conforme !</p>
                `;
        } else {
          resultMessage.innerHTML = `
                    <div style="color: var(--color-accent-red); font-weight: 600; font-size: 1.2rem; margin-bottom: 1rem;">
                        📚 À revoir
                    </div>
                    <p>Il est essentiel de maîtriser les nouvelles directives 2025 pour la rédaction du mémoire.
                    Nous vous recommandons un accompagnement personnalisé pour adapter votre travail aux nouvelles exigences.</p>
                `;
        }
      }

      function restartQuiz() {
        // Reset variables
        currentQuestion = 1;
        score = 0;
        answers = {};

        // Reset UI
        document.getElementById("quiz-result").style.display = "none";
        document.querySelectorAll(".quiz-question").forEach((q, index) => {
          q.style.display = index === 0 ? "block" : "none";
          q.classList.toggle("active", index === 0);

          // Reset buttons
          q.querySelectorAll("button").forEach((btn) => {
            btn.classList.remove("selected", "correct", "incorrect");
            btn.disabled = false;
          });
        });

        // Reset progress
        updateProgress();
      }

      // Animation on scroll
      function animateOnScroll() {
        const elements = document.querySelectorAll(
          ".content-section, .formula-card, .testimonial-card"
        );

        elements.forEach((element) => {
          const elementTop = element.getBoundingClientRect().top;
          const elementVisible = 150;

          if (elementTop < window.innerHeight - elementVisible) {
            element.style.opacity = "1";
            element.style.transform = "translateY(0)";
          }
        });
      }

      window.addEventListener("scroll", animateOnScroll);
    </script>
  </body>
</html>
