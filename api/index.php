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
    "$storagePath/logs"
];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

// 3. Load Autoloader & App
require __DIR__ . '/../vendor/autoload.php';

/** @var \Illuminate\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap/app.php';

// 4. Overrides for Vercel Serverless Environment
// Point storage to the writable /tmp directory
$app->useStoragePath($storagePath);

// IMPORTANT: Force Laravel to ignore the cached services/packages files.
// These are often generated during the build process with absolute paths that
// might not match the runtime path, causing "Target class [view] does not exist".
$app->setCachedServicesPath("$storagePath/framework/services.php");
$app->setCachedPackagesPath("$storagePath/framework/packages.php");
$app->setCachedConfigPath("$storagePath/framework/config.php");
$app->setCachedRoutesPath("$storagePath/framework/routes.php");

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
