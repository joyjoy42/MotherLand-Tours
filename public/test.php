<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>PHP is working on Render!</h1>";
echo "<p>PHP Version: " . phpversion() . "</p>";

try {
    require __DIR__.'/../vendor/autoload.php';
    echo "<p>Vendor autoload loaded successfully.</p>";
    
    $app = require_once __DIR__.'/../bootstrap/app.php';
    echo "<p>Laravel app bootstrapped successfully.</p>";
    
    echo "<p>Environment variables check:</p>";
    echo "<pre>";
    echo "APP_ENV: " . env('APP_ENV', 'Not set') . "\n";
    echo "APP_DEBUG: " . env('APP_DEBUG', 'Not set') . "\n";
    echo "APP_KEY: " . (env('APP_KEY') ? 'Set' : 'Not set') . "\n";
    echo "</pre>";

} catch (\Throwable $e) {
    echo "<h2>Fatal Laravel Boot Error:</h2>";
    echo "<pre>" . (string) $e . "</pre>";
}
