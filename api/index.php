<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Setup writable storage directory in /tmp for serverless environment
$storageDirs = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Copy pre-seeded SQLite database to writable /tmp
$bundledDb = __DIR__ . '/../database/database.sqlite';
$tmpDb = '/tmp/database.sqlite';
if (!file_exists($tmpDb) && file_exists($bundledDb)) {
    copy($bundledDb, $tmpDb);
}

// Register Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel
/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Point storage path to /tmp to avoid read-only filesystem errors
$app->useStoragePath('/tmp/storage');

$app->handleRequest(Request::capture());
