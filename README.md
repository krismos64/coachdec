# CoachDEC - Site d'accompagnement mémoire DEC

## Description
Site vitrine pour le service d'accompagnement au mémoire DEC (Diplôme d'Expertise Comptable) proposé par Staka.

**URL de production :** https://coachdec.fr
**Hébergement :** OVH

---

## Modifications demandées par le client (27/11/2024)

### 1. Formulaire de contact
- [x] Configurer l'envoi des formulaires vers **contact@staka.fr**

### 2. Balises SEO (meta tags)
- [x] **Title :** `Accompagnement Mémoire expertise comptable - mémoire DEC`
- [x] **Description :** `Accompagnement et coaching mémoire DEC. 12 ans d'expérience. Suivi jusqu'à la réussite. Zéro paiement d'avance.`
- [x] **Keywords :** `Notice mémoire DEC, mémoire DEC, coaching mémoire DEC, coaching notice DEC, Choix du sujet mémoire DEC.`

### 3. Texte Hero
- [x] H1 modifié en : `Accompagnement Mémoire expertise comptable - mémoire DEC`
- [x] Sous-titre modifié en : `Accompagnement et coaching mémoire DEC. 12 ans d'expérience. Suivi jusqu'à la réussite. Zéro paiement d'avance.`

### 4. Section "Notre service d'accompagnement"
- [x] Texte ajouté : `Depuis 2012, Staka met à disposition des experts-comptables stagiaires une équipe d'experts en comptabilité et gestion pour les guider dans leur mémoire de DEC.`

### 5. Suppressions
- [x] Supprimer **"Réussite garantie"** (partout où il apparaît)
- [x] Supprimer le mot **"rédaction"** dans le quiz
- [x] Supprimer **"Rédaction"** dans le point 4

### 6. Modification Point 4
- [x] Nouveau texte : `Suivi personnalisé : Accompagnement continu tout au long de votre travail.`

### 7. Consent Manager (RGPD)
- [x] Script Consent Manager intégré dans le `<head>`

### 8. Nouvelle page Charte d'Intégrité
- [x] Page `charte-integrite.php` créée avec le même header/footer que l'accueil
- [x] Liens ajoutés dans la navbar et le footer

---

## Migration PHP (27/11/2024)

Le site a été migré de HTML statique vers PHP avec un système d'includes pour partager le header et le footer entre les pages.

### Changements effectués :
- Création du dossier `includes/` avec les composants partagés
- Extraction du CSS dans un fichier externe
- Conversion des pages `.html` en `.php`
- Mise à jour du `.htaccess` avec redirections

---

## Formulaire de contact PHP (28/11/2024)

### Implémentation
- Remplacement d'EmailJS par un script PHP natif (`contact.php`)
- Envoi via `mail()` PHP avec headers optimisés anti-spam
- Email HTML responsive avec CSS inline (compatible Gmail/Outlook)

### Fonctionnalités
- **Destinataire :** contact@staka.fr
- **Expéditeur :** noreply@coachdec.fr (boîte créée sur OVH)
- **Protection anti-spam :** Honeypot + Rate limiting (1 envoi/minute/IP)
- **Validation :** Champs obligatoires côté serveur
- **Format :** Email HTML avec template professionnel

### Prérequis OVH
- Boîte email `noreply@coachdec.fr` créée sur OVH
- DKIM activé pour le domaine

---

## Structure du projet

```
/coachdec/
├── index.php                       # Page principale (PHP)
├── contact.php                     # Traitement formulaire de contact
├── charte-integrite.php            # Charte d'intégrité académique (PHP)
├── index.html                      # [BACKUP] Ancienne page principale
├── charte-integrite-coachdec.html  # [BACKUP] Ancienne charte
├── .htaccess                       # Configuration Apache (HTTPS, cache, sécurité)
├── README.md                       # Ce fichier
├── includes/
│   ├── header.php                  # Header commun (navbar, meta tags dynamiques)
│   ├── footer.php                  # Footer commun
│   └── legal-modal.php             # Modal mentions légales
└── assets/
    └── css/
        └── style.css               # CSS externalisé
```

---

## Variables PHP pour les meta tags

Chaque page peut définir ses propres meta tags avant d'inclure le header :

```php
<?php
$pageTitle = 'Titre de la page';
$pageDescription = 'Description de la page';
$pageKeywords = 'mot-clé1, mot-clé2';

include 'includes/header.php';
?>
```

---

## Stack technique

- PHP 7+
- HTML5 / CSS3
- JavaScript vanilla (AJAX fetch)
- mail() PHP natif (envoi formulaires)
- Google Fonts (Montserrat)
- Consent Manager (RGPD)
- Apache (OVH)

---

## Développement local

```bash
# Lancer le serveur PHP local
php -S localhost:8000

# Accéder au site
# http://localhost:8000
```

---

## Contact

**Client :** Staka
**Email :** contact@staka.fr
