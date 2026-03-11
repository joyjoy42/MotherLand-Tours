<?php

use Illuminate\Http\Request;

// 1. Diagnostics & Environment Setup
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Storage Setup (Vercel has a read-only filesystem except for /tmp)
$storagePath = '/tmp/storage';
$dirs = [
    $storagePath,
    "$storagePath/framework",
    "$storagePath/framework/views",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/bootstrap", // For cached bootstrap files
    "$storagePath/logs"
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// 3. Set Environment Variables for Path Overrides
// These are used by Illuminate\Foundation\Application::normalizeCachePath
$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_ENV['APP_SERVICES_CACHE'] = "$storagePath/bootstrap/services.php";
$_ENV['APP_PACKAGES_CACHE'] = "$storagePath/bootstrap/packages.php";
$_ENV['APP_CONFIG_CACHE'] = "$storagePath/bootstrap/config.php";
$_ENV['APP_ROUTES_CACHE'] = "$storagePath/bootstrap/routes.php";
$_ENV['APP_EVENTS_CACHE'] = "$storagePath/bootstrap/events.php";

// 4. Load Autoloader & App
require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Handle the request
try {
    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    // Reveal the true root cause if it still fails
    echo "<h1>Critical Error during Request</h1>";
    echo "<p><b>[" . get_class($e) . "]</b>: " . $e->getMessage() . "</p>";
    echo "<p>at " . $e->getFile() . ":" . $e->getLine() . "</p>";
    if ($prev = $e->getPrevious()) {
        echo "<hr><p><b>Previous</b>: " . $prev->getMessage() . "</p>";
    }
    echo "<h2>Stack Trace</h2><pre>" . $e->getTraceAsString() . "</pre>";
}
