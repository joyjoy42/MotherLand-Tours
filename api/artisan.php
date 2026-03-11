<?php

use Illuminate\Contracts\Console\Kernel;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\BufferedOutput;

// 1. Diagnostics & Environment Setup
error_reporting(E_ALL);
ini_set('display_errors', 1);

// 2. Storage Setup (Vercel has a read-only filesystem except for /tmp)
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    @mkdir($storagePath, 0777, true);
    @mkdir("$storagePath/framework", 0777, true);
    @mkdir("$storagePath/framework/views", 0777, true);
    @mkdir("$storagePath/framework/cache", 0777, true);
    @mkdir("$storagePath/framework/sessions", 0777, true);
    @mkdir("$storagePath/bootstrap", 0777, true);
    @mkdir("$storagePath/logs", 0777, true);
}

// 3. Set Environment Variables for Path Overrides
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

// 5. Build the Console Kernel
$kernel = $app->make(Kernel::class);

// 6. Security Check (Optional but recommended)
// Usage: /api/artisan?command=migrate&key=YOUR_APP_KEY_FIRST_10
$command = $_GET['command'] ?? 'list';
$providedKey = $_GET['key'] ?? '';
$expectedKey = substr(getenv('APP_KEY'), 0, 10);

if ($providedKey !== $expectedKey) {
    die("Unauthorized. Please provide 'key' matching first 10 chars of APP_KEY.");
}

// 7. Run the command
try {
    $output = new BufferedOutput;
    $status = $kernel->handle(
        new StringInput($command),
        $output
    );

    echo "<h1>Artisan Output ($command)</h1>";
    echo "<pre>" . $output->fetch() . "</pre>";
    echo "<p>Exit Status: $status</p>";

    $kernel->terminate(new StringInput($command), $status);
} catch (\Throwable $e) {
    echo "<h1>Artisan Error</h1>";
    echo "<p><b>[" . get_class($e) . "]</b>: " . $e->getMessage() . "</p>";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}
