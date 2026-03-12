<?php

// 1. Diagnostics & Environment Setup
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Security Check
$providedKey = $_GET['key'] ?? '';
$expectedKey = substr(getenv('APP_KEY'), 0, 10);

if ($providedKey !== $expectedKey) {
    die("Unauthorized.");
}

$path = $_GET['path'] ?? '.';

echo "<h1>Listing Path: $path</h1>";
echo "<pre>";

if (is_dir($path)) {
    $files = @scandir($path);
    if ($files === false) {
        echo "Failed to scan directory: $path";
    } else {
        print_r($files);
    }
} else {
    echo "Path is not a directory: $path\n";
    if (file_exists($path)) {
        echo "Path exists but is a file. Size: " . filesize($path) . " bytes\n";
    } else {
        echo "Path does not exist.";
    }
}
echo "</pre>";
