<?php

use Illuminate\Http\Request;

// 1. Extreme Diagnostics
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<!-- VERCEL BOOTSTRAP START -->\n";
echo "<!-- PHP: " . phpversion() . " -->\n";

// 2. Setup Storage in /tmp
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

// 3. Autoload
require __DIR__ . '/../vendor/autoload.php';

try {
    // 4. App Creation
    /** @var \Illuminate\Foundation\Application $app */
    $app = require __DIR__ . '/../bootstrap/app.php';
    $app->useStoragePath($storagePath);
    
    echo "<!-- App instantiated -->\n";
    
    // Explicitly check for View service
    if (!$app->bound('view')) {
        echo "<!-- WARNING: View service NOT bound. Force registering ViewServiceProvider... -->\n";
        $app->register(\Illuminate\View\ViewServiceProvider::class);
    }
    
    // Ensure APP_KEY is set in config even if env() fails
    if (!$app->make('config')->get('app.key')) {
        $app->make('config')->set('app.key', getenv('APP_KEY'));
    }

    // 5. Handle Request
    $app->handleRequest(Request::capture());
    
} catch (\Throwable $e) {
    echo "<h1>Critical Error</h1>";
    echo "<p><b>[" . get_class($e) . "]</b>: " . $e->getMessage() . "</p>";
    echo "<p>at " . $e->getFile() . ":" . $e->getLine() . "</p>";
    
    $prev = $e;
    while ($prev = $prev->getPrevious()) {
        echo "<hr><p><b>Previous [" . get_class($prev) . "]</b>: " . $prev->getMessage() . "</p>";
        echo "<p>at " . $prev->getFile() . ":" . $prev->getLine() . "</p>";
    }
    
    echo "<h2>Stack Trace</h2><pre>" . $e->getTraceAsString() . "</pre>";
}
