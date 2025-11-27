# CoachDEC - Site d'accompagnement mémoire DEC

## Description
Site vitrine pour le service d'accompagnement au mémoire DEC (Diplôme d'Expertise Comptable) proposé par Staka.

**URL de production :** https://coachdec.fr
**Hébergement :** OVH

---

## Modifications demandées par le client (27/11/2024)

### 1. Formulaire de contact
- [ ] Configurer l'envoi des formulaires vers **contact@staka.fr**

### 2. Balises SEO (meta tags)
- [ ] **Title :** `Accompagnement Mémoire expertise comptable - mémoire DEC`
- [ ] **Description :** `Accompagnement et coaching mémoire DEC. 12 ans d'expérience. Suivi jusqu'à la réussite. Zéro paiement d'avance.`
- [ ] **Keywords :** `Notice mémoire DEC, mémoire DEC, coaching mémoire DEC, coaching notice DEC, Choix du sujet mémoire DEC.`

### 3. Texte Hero
- [ ] Modifier le texte principal en : `Accompagnement complet pour votre mémoire DEC.`

### 4. Section "Notre service d'accompagnement"
- [ ] Ajouter le texte : `Depuis 2012, Staka met à disposition des experts-comptables stagiaires une équipe d'experts en comptabilité et gestion pour les guider dans leur mémoire de DEC.`

### 5. Suppressions
- [ ] Supprimer **"Réussite garantie"** (partout où il apparaît)
- [ ] Supprimer le mot **"rédaction"** dans le quiz
- [ ] Supprimer **"Rédaction"** dans le point 4

### 6. Modification Point 4
- [ ] Nouveau texte : `Suivi personnalisé : Accompagnement continu tout au long de votre travail.`

### 7. Consent Manager (RGPD)
- [ ] Intégrer le script après le `<head>` :
```html
<script type="text/javascript" data-cmp-ab="1" src="https://cdn.consentmanager.net/delivery/autoblocking/2be9442962741.js" data-cmp-host="c.delivery.consentmanager.net" data-cmp-cdn="cdn.consentmanager.net" data-cmp-codesrc="0"></script>
```

### 8. Nouvelle page
- [ ] Intégrer la page `charte-integrite-coachdec.html` (Charte d'Intégrité Académique)

---

## Structure du projet

```
/coachdec/
├── index.html                      # Page principale
├── charte-integrite-coachdec.html  # Charte d'intégrité académique
├── .htaccess                       # Configuration Apache (redirect)
├── htaccess                        # Configuration Apache complète
└── README.md                       # Ce fichier
```

---

## Stack technique

- HTML5 / CSS3 (inline)
- JavaScript vanilla
- EmailJS (envoi formulaires)
- Google Fonts (Montserrat)
- Apache (OVH)

---

## Contact

**Client :** Staka
**Email :** contact@staka.fr
