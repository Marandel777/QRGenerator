<?php

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

$text = $_POST["input-text"];

$qrcode = QrCode::create($text);
$writter = new PngWriter;

$result = $writter->write($qrcode);

header("Content-Type: " . $result->getMimeType());

echo $result->getString();