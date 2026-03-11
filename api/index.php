<?php

use Illuminate\Http\Request;

// 1. Ensure the Vercel runtime is configured correctly
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Point storage to /tmp since the app directory is read-only on Vercel
$storagePath = '/tmp/storage';
foreach ([
    $storagePath,
    "$storagePath/framework",
    "$storagePath/framework/views",
    "$storagePath/framework/cache",
    "$storagePath/framework/sessions",
    "$storagePath/logs"
] as $path) {
    if (!is_dir($path)) {
        @mkdir($path, 0777, true);
    }
}

// 3. Load Autoloader
require __DIR__ . '/../vendor/autoload.php';

// 4. Create the Application instance
/** @var \Illuminate\Foundation\Application $app */
$app = require __DIR__ . '/../bootstrap/app.php';

// 5. Override paths for Vercel
$app->useStoragePath($storagePath);

// 6. Handle the request
$app->handleRequest(Request::capture());
