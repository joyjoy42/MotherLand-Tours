<?php
// This file is the entry point for Vercel.
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!getenv('APP_KEY')) {
    die("Error: APP_KEY is missing in Vercel environment variables.");
}

echo "<!-- VERCEL BOOTSTRAP DIAGNOSTICS -->\n";
echo "<!-- PHP Version: " . phpversion() . " -->\n";
echo "<!-- Base Path: " . realpath(__DIR__ . '/..') . " -->\n";
echo "<!-- Storage Path Writeable: " . (is_writable(__DIR__ . '/../storage') ? 'YES' : 'NO') . " -->\n";
echo "<!-- Tmp Path Writeable: " . (is_writable('/tmp') ? 'YES' : 'NO') . " -->\n";

try {
    // Manually bootstrap the app to control the lifecycle
    require __DIR__ . '/../vendor/autoload.php';
    $app = require_once __DIR__ . '/../bootstrap/app.php';
    
    echo "<!-- App Loaded. Resolving core services... -->\n";
    
    $services = ['events', 'router', 'view', 'db', 'log'];
    foreach ($services as $service) {
        $bound = $app->bound($service) ? 'YES' : 'NO';
        echo "<!-- Service [$service] bound: $bound -->\n";
    }

    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    echo "<h1>Critical Bootstrap Error</h1>";
    do {
        echo "<div style='border:1px solid red; padding:10px; margin-bottom:10px;'>";
        echo "<b>Exception:</b> " . get_class($e) . "<br>";
        echo "<b>Message:</b> " . $e->getMessage() . "<br>";
        echo "<b>File:</b> " . $e->getFile() . ":" . $e->getLine() . "<br>";
        echo "</div>";
    } while ($e = $e->getPrevious());
    
    echo "<h2>Stack Trace</h2><pre>" . (new Exception())->getTraceAsString() . "</pre>";
    exit;
}
