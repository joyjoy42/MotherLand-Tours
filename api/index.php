<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// This file is the entry point for Vercel.
// We proxy the request to the Laravel application.
require __DIR__ . '/../public/index.php';
