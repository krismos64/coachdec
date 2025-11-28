<?php
/**
 * Traitement du formulaire de contact CoachDEC
 * Envoi des emails via mail() PHP natif
 */

// Configuration
$destinataire = 'c.mostefaoui@yahoo.fr'; // TODO: Changer pour contact@staka.fr en production
$sujet_prefix = '[CoachDEC] ';

// Headers CORS pour les requêtes AJAX
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Réponse par défaut
$response = [
    'success' => false,
    'message' => ''
];

// Vérifier que c'est une requête POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $response['message'] = 'Méthode non autorisée';
    echo json_encode($response);
    exit;
}

// Protection anti-spam : honeypot (champ caché qui doit rester vide)
if (!empty($_POST['website'])) {
    // Si ce champ est rempli, c'est probablement un bot
    $response['success'] = true; // On fait croire que ça a marché
    $response['message'] = 'Message envoyé avec succès !';
    echo json_encode($response);
    exit;
}

// Protection anti-spam : vérifier le temps de soumission (minimum 3 secondes)
session_start();
if (isset($_SESSION['form_time']) && (time() - $_SESSION['form_time']) < 3) {
    $response['message'] = 'Veuillez patienter quelques secondes avant de soumettre.';
    echo json_encode($response);
    exit;
}

// Récupération et nettoyage des données
$nom = isset($_POST['nom']) ? trim(strip_tags($_POST['nom'])) : '';
$email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : '';
$telephone = isset($_POST['telephone']) ? trim(strip_tags($_POST['telephone'])) : '';
$session = isset($_POST['session']) ? trim(strip_tags($_POST['session'])) : '';
$formule = isset($_POST['formule']) ? trim(strip_tags($_POST['formule'])) : '';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';

// Validation des champs obligatoires
$erreurs = [];

if (empty($nom)) {
    $erreurs[] = 'Le nom est obligatoire';
}

if (empty($email)) {
    $erreurs[] = 'L\'email est obligatoire';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $erreurs[] = 'L\'email n\'est pas valide';
}

if (empty($session)) {
    $erreurs[] = 'La session DEC est obligatoire';
}

if (empty($formule)) {
    $erreurs[] = 'La formule souhaitée est obligatoire';
}

if (empty($message)) {
    $erreurs[] = 'Le message est obligatoire';
}

// S'il y a des erreurs, on les retourne
if (!empty($erreurs)) {
    $response['message'] = implode(', ', $erreurs);
    echo json_encode($response);
    exit;
}

// Formatage des valeurs pour l'affichage
$sessions_labels = [
    'mai-2025' => 'Mai 2025',
    'novembre-2025' => 'Novembre 2025',
    'mai-2026' => 'Mai 2026',
    'novembre-2026' => 'Novembre 2026'
];

$formules_labels = [
    'complet' => 'Accompagnement Complet',
    'partiel' => 'Accompagnement Partiel',
    'coaching' => 'Coaching Soutenance'
];

$session_label = $sessions_labels[$session] ?? $session;
$formule_label = $formules_labels[$formule] ?? $formule;

// Construction du sujet
$sujet = $sujet_prefix . 'Nouvelle demande de ' . $nom . ' - ' . $formule_label;

// Construction du corps du message
$corps = "
═══════════════════════════════════════════════════════
              NOUVELLE DEMANDE COACHDEC
═══════════════════════════════════════════════════════

INFORMATIONS DU CANDIDAT
─────────────────────────────────────────────────────
Nom :           $nom
Email :         $email
Téléphone :     " . ($telephone ?: 'Non renseigné') . "

PROJET DEC
─────────────────────────────────────────────────────
Session visée : $session_label
Formule :       $formule_label

MESSAGE
─────────────────────────────────────────────────────
$message

═══════════════════════════════════════════════════════
Email envoyé depuis le formulaire de contact CoachDEC.fr
Date : " . date('d/m/Y à H:i') . "
═══════════════════════════════════════════════════════
";

// Headers de l'email
$headers = [
    'From: CoachDEC <noreply@coachdec.fr>',
    'Reply-To: ' . $nom . ' <' . $email . '>',
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
    'X-Mailer: PHP/' . phpversion()
];

// Envoi de l'email (avec -f pour OVH)
$envoi = mail($destinataire, $sujet, $corps, implode("\r\n", $headers), '-f noreply@coachdec.fr');

if ($envoi) {
    $response['success'] = true;
    $response['message'] = 'Votre demande a été envoyée avec succès ! Notre équipe vous contactera sous 24h.';

    // Enregistrer le timestamp pour la protection anti-spam
    $_SESSION['form_time'] = time();
} else {
    $response['message'] = 'Une erreur est survenue lors de l\'envoi. Veuillez nous contacter directement au 06 15 07 81 52.';
}

echo json_encode($response);
exit;
