<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__.'/../vendor/autoload.php';

echo "<!-- DIAGNOSTIC START -->\n";
try {
    $app = require_once __DIR__.'/../bootstrap/app.php';
    echo "<!-- App instantiated. Version: " . $app->version() . " -->\n";
    echo "<!-- View bound: " . ($app->bound('view') ? 'YES' : 'NO') . " -->\n";
    
    // Check if we can resolve the view factory
    if ($app->bound('view')) {
        $view = $app->make('view');
        echo "<!-- View Factory resolved -->\n";
    }
} catch (\Throwable $e) {
    echo "<!-- Error: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine() . " -->\n";
    echo "<!-- Stack trace: " . $e->getTraceAsString() . " -->\n";
}

$publicIndex = __DIR__ . '/../public/index.php';
require $publicIndex;
