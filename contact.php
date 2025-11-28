<?php
/**
 * CoachDEC - Formulaire de Contact
 * Envoi des emails via mail() PHP natif
 */

// Configuration
header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');

// Autoriser uniquement les requêtes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Méthode non autorisée.'
    ]);
    exit;
}

// Configuration email
define('EMAIL_TO', 'c.mostefaoui@yahoo.fr'); // TODO: Changer pour contact@staka.fr en production
define('EMAIL_SUBJECT', '📋 Nouvelle demande CoachDEC');
define('EMAIL_FROM', 'noreply@coachdec.fr');

// Rate limiting : 1 envoi par minute par IP
$ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$rateLimitFile = sys_get_temp_dir() . '/coachdec_ratelimit_' . md5($ipAddress) . '.txt';

if (file_exists($rateLimitFile)) {
    $lastSubmit = (int)file_get_contents($rateLimitFile);
    if (time() - $lastSubmit < 60) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Trop de tentatives. Veuillez patienter 1 minute.'
        ]);
        exit;
    }
}

// Récupération et sanitization des données
$nom = isset($_POST['nom']) ? trim(htmlspecialchars($_POST['nom'], ENT_QUOTES, 'UTF-8')) : '';
$email = isset($_POST['email']) ? trim(htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8')) : '';
$telephone = isset($_POST['telephone']) ? trim(htmlspecialchars($_POST['telephone'], ENT_QUOTES, 'UTF-8')) : '';
$session = isset($_POST['session']) ? trim(htmlspecialchars($_POST['session'], ENT_QUOTES, 'UTF-8')) : '';
$formule = isset($_POST['formule']) ? trim(htmlspecialchars($_POST['formule'], ENT_QUOTES, 'UTF-8')) : '';
$message = isset($_POST['message']) ? trim(htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8')) : '';
$honeypot = isset($_POST['website']) ? trim($_POST['website']) : '';

// Protection honeypot (anti-bots)
if (!empty($honeypot)) {
    echo json_encode([
        'success' => true,
        'message' => 'Merci ! Nous vous contactons sous 24h.'
    ]);
    exit;
}

// Validation des champs requis
$errors = [];

if (empty($nom) || strlen($nom) < 2) {
    $errors[] = 'Le nom est requis.';
}

if (empty($email)) {
    $errors[] = 'L\'email est requis.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'L\'email n\'est pas valide.';
}

if (empty($session)) {
    $errors[] = 'La session DEC est requise.';
}

if (empty($formule)) {
    $errors[] = 'La formule est requise.';
}

if (empty($message)) {
    $errors[] = 'Le message est requis.';
}

// Si erreurs, retourner
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => implode(' ', $errors)
    ]);
    exit;
}

// Formatage des labels
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

// Composition de l'email HTML
$emailBody = "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .content {
            padding: 30px 20px;
        }
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        .info-table td {
            padding: 12px;
            border-bottom: 1px solid #e0e0e0;
        }
        .info-table td:first-child {
            font-weight: 600;
            color: #1a365d;
            width: 40%;
        }
        .info-table tr:last-child td {
            border-bottom: none;
        }
        .message-box {
            background: #f8f9fa;
            border-left: 4px solid #1a365d;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #666;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #1a365d 0%, #2c5282 100%);
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>📋 Nouvelle Demande CoachDEC</h1>
        </div>
        <div class='content'>
            <p>Bonjour,</p>
            <p>Une nouvelle demande d'accompagnement a été soumise via le formulaire de contact.</p>

            <table class='info-table'>
                <tr>
                    <td>Nom</td>
                    <td><strong>{$nom}</strong></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><a href='mailto:{$email}'>{$email}</a></td>
                </tr>
                <tr>
                    <td>Téléphone</td>
                    <td>" . ($telephone ? "<a href='tel:{$telephone}'>{$telephone}</a>" : "Non renseigné") . "</td>
                </tr>
                <tr>
                    <td>Session DEC</td>
                    <td>{$session_label}</td>
                </tr>
                <tr>
                    <td>Formule</td>
                    <td><strong>{$formule_label}</strong></td>
                </tr>
            </table>

            <div class='message-box'>
                <strong>Message :</strong><br>
                " . nl2br($message) . "
            </div>

            <center>
                <a href='mailto:{$email}' class='btn'>Répondre au Candidat</a>
            </center>
        </div>
        <div class='footer'>
            <p><strong>CoachDEC</strong> - Accompagnement Mémoire DEC</p>
            <p>📞 06 15 07 81 52 | 📧 contact@staka.fr</p>
            <p style='font-size: 12px; color: #999;'>Email généré le " . date('d/m/Y à H:i') . "</p>
        </div>
    </div>
</body>
</html>
";

// Headers pour email HTML (même structure que MasterMentor)
$headers = [
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'From: CoachDEC <' . EMAIL_FROM . '>',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
    'Message-ID: <' . md5(uniqid(time())) . '@coachdec.fr>',
    'List-Unsubscribe: <mailto:' . EMAIL_FROM . '?subject=unsubscribe>',
    'Precedence: bulk',
    'X-Auto-Response-Suppress: All'
];

// Envoi de l'email
$mailSent = mail(
    EMAIL_TO,
    EMAIL_SUBJECT,
    $emailBody,
    implode("\r\n", $headers)
);

if ($mailSent) {
    // Enregistrer le timestamp pour rate limiting
    file_put_contents($rateLimitFile, time());

    echo json_encode([
        'success' => true,
        'message' => 'Votre demande a été envoyée avec succès ! Notre équipe vous contactera sous 24h.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Erreur lors de l\'envoi. Veuillez nous contacter directement au 06 15 07 81 52.'
    ]);
}
