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
define('EMAIL_TO', 'contact@staka.fr');
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

// Composition de l'email HTML avec CSS inline (compatible Gmail/Outlook)
$emailBody = "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>
<body style='margin: 0; padding: 20px; font-family: Arial, Helvetica, sans-serif; background-color: #f5f5f5;'>
    <table cellpadding='0' cellspacing='0' border='0' width='100%' style='max-width: 600px; margin: 0 auto;'>
        <tr>
            <td>
                <!-- Container -->
                <table cellpadding='0' cellspacing='0' border='0' width='100%' style='background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.1);'>
                    <!-- Header -->
                    <tr>
                        <td style='background-color: #1a365d; padding: 30px 20px; text-align: center;'>
                            <h1 style='margin: 0; color: #ffffff; font-size: 24px; font-weight: 600;'>📋 Nouvelle Demande CoachDEC</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style='padding: 30px 20px;'>
                            <p style='margin: 0 0 15px 0; color: #333333; font-size: 16px;'>Bonjour,</p>
                            <p style='margin: 0 0 20px 0; color: #333333; font-size: 16px;'>Une nouvelle demande d'accompagnement a été soumise via le formulaire de contact.</p>

                            <!-- Info Table -->
                            <table cellpadding='0' cellspacing='0' border='0' width='100%' style='background-color: #f8f9fa; border-radius: 6px; margin: 20px 0;'>
                                <tr>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #1a365d; font-weight: 600; width: 40%;'>Nom</td>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #333333;'><strong>{$nom}</strong></td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #1a365d; font-weight: 600;'>Email</td>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0;'><a href='mailto:{$email}' style='color: #1a365d; text-decoration: none;'>{$email}</a></td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #1a365d; font-weight: 600;'>Téléphone</td>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0;'>" . ($telephone ? "<a href='tel:{$telephone}' style='color: #1a365d; text-decoration: none;'>{$telephone}</a>" : "Non renseigné") . "</td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #1a365d; font-weight: 600;'>Session DEC</td>
                                    <td style='padding: 12px 15px; border-bottom: 1px solid #e0e0e0; color: #333333;'>{$session_label}</td>
                                </tr>
                                <tr>
                                    <td style='padding: 12px 15px; color: #1a365d; font-weight: 600;'>Formule</td>
                                    <td style='padding: 12px 15px; color: #333333;'><strong>{$formule_label}</strong></td>
                                </tr>
                            </table>

                            <!-- Message Box -->
                            <table cellpadding='0' cellspacing='0' border='0' width='100%' style='margin: 20px 0;'>
                                <tr>
                                    <td style='background-color: #f8f9fa; border-left: 4px solid #1a365d; padding: 15px; border-radius: 4px;'>
                                        <strong style='color: #1a365d;'>Message :</strong><br><br>
                                        <span style='color: #333333; line-height: 1.6;'>" . nl2br($message) . "</span>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style='background-color: #f8f9fa; padding: 20px; text-align: center; border-top: 1px solid #e0e0e0;'>
                            <p style='margin: 0 0 5px 0; color: #666666; font-size: 14px;'><strong>CoachDEC</strong> - Accompagnement Mémoire DEC</p>
                            <p style='margin: 0 0 10px 0; color: #666666; font-size: 14px;'>📞 06 15 07 81 52 | 📧 contact@staka.fr</p>
                            <p style='margin: 0; color: #999999; font-size: 12px;'>Email généré le " . date('d/m/Y à H:i') . "</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
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
