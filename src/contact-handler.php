<?php

const CONTACT_RECIPIENT = 'birmoho@gmail.com';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php');
    exit;
}

// Piège à robots : si ce champ caché est rempli, on ignore silencieusement l'envoi.
if (!empty($_POST['website'])) {
    header('Location: /index.php?status=success#contact');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$isValid = $name !== ''
    && $message !== ''
    && filter_var($email, FILTER_VALIDATE_EMAIL);

if (!$isValid) {
    header('Location: /index.php?status=error#contact');
    exit;
}

$mailSubject = $subject !== '' ? $subject : 'Nouveau message depuis le portfolio';
$mailBody = "Nom : {$name}\nEmail : {$email}\n\nMessage :\n{$message}";
$headers = "From: no-reply@" . ($_SERVER['SERVER_NAME'] ?? 'localhost') . "\r\n"
    . "Reply-To: {$email}\r\n";

$sent = @mail(CONTACT_RECIPIENT, $mailSubject, $mailBody, $headers);

header('Location: /index.php?status=' . ($sent ? 'success' : 'error') . '#contact');
exit;
