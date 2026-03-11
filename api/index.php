<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// This file is the entry point for Vercel.
if (!getenv('APP_KEY')) {
    die("Error: APP_KEY is not set in Vercel Environment Variables. Please set it in the Vercel Dashboard.");
}

try {
    // We proxy the request to the Laravel application.
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1>Critical Bootstrap Error</h1>";
    echo "<p><b>Message:</b> " . $e->getMessage() . "</p>";
    echo "<p><b>File:</b> " . $e->getFile() . ":" . $e->getLine() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
