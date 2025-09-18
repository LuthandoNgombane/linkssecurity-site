<?php
include 'phpqrcode-2010100721_1.1.4/phpqrcode/qrlib.php';

// URL to encode in QR
$url = "https://jarache.reticledev.co.za/index.html";

// Directory to store QR code
$qrDir = __DIR__ . "/qrcodes";
$filename = $qrDir . "/qr_code.png";

// Ensure QR directory exists
if (!file_exists($qrDir)) {
    mkdir($qrDir, 0777, true);
}

// Generate QR code if it doesn't exist
if (!file_exists($filename)) {
    QRcode::png($url, $filename, QR_ECLEVEL_L, 10);
}

// Output the image
header("Content-Type: image/png");
readfile($filename);
exit;
?>
