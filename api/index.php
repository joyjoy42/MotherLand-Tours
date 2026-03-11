<?php
// This file is the entry point for Vercel.
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!getenv('APP_KEY')) {
    die("Error: APP_KEY is missing in Vercel environment variables.");
}

echo "DEBUG: base_path=" . realpath(__DIR__ . '/..') . "<br>";
echo "DEBUG: APP_KEY length=" . strlen(getenv('APP_KEY')) . "<br>";

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    die("UNCAUGHT: " . $e->getMessage() . " in " . $e->getFile());
}
