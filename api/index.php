<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$publicIndex = __DIR__ . '/../public/index.php';

if (!file_exists($publicIndex)) {
    die("Error: public/index.php not found at " . $publicIndex);
}

require $publicIndex;
