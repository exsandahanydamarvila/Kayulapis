<?php
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function respond(int $status, bool $success, string $message): void {
  http_response_code($status);
  echo json_encode(['success' => $success, 'message' => $message], JSON_UNESCAPED_UNICODE);
  exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  respond(405, false, 'Metode pengiriman tidak diizinkan.');
}

$name = trim((string)($_POST['name'] ?? ''));
$email = trim((string)($_POST['email'] ?? ''));
$phone = trim((string)($_POST['phone'] ?? ''));
$topic = trim((string)($_POST['topic'] ?? ''));
$message = trim((string)($_POST['message'] ?? ''));

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $topic === '' || $message === '') {
  respond(422, false, 'Mohon periksa kembali nama, email, keperluan, dan pesan.');
}
if (strlen($name) > 120 || strlen($email) > 180 || strlen($phone) > 40 || strlen($topic) > 100 || strlen($message) > 5000) {
  respond(422, false, 'Ada isian yang terlalu panjang. Silakan ringkas pesan Anda.');
}

$to = 'kayulapisindonesiap@gmail.com';
$subject = 'Pesan Baru dari Website PT Kayu Lapis Indonesia';
$host = preg_replace('/[^a-z0-9.-]/i', '', (string)($_SERVER['HTTP_HOST'] ?? 'localhost'));
$fromAddress = 'no-reply@' . ($host !== '' ? $host : 'localhost');

$body = "Pesan baru dari formulir website PT Kayu Lapis Indonesia\n\n" .
        "Nama: {$name}\n" .
        "Email: {$email}\n" .
        "Telepon: " . ($phone !== '' ? $phone : '-') . "\n" .
        "Keperluan: {$topic}\n\n" .
        "Pesan:\n{$message}\n";

$headers = [
  'MIME-Version: 1.0',
  'Content-Type: text/plain; charset=UTF-8',
  'From: Website PT Kayu Lapis Indonesia <' . $fromAddress . '>',
  'Reply-To: ' . $email,
  'X-Mailer: PHP/' . phpversion()
];

$sent = @mail($to, $subject, $body, implode("\r\n", $headers));
if (!$sent) {
  respond(500, false, 'Server belum dapat mengirim email. Pastikan layanan email/SMTP hosting sudah diaktifkan.');
}
respond(200, true, 'Pesan berhasil diteruskan.');
