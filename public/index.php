<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Some shared hosts expose a non-writable system temp directory. Keep PHP's
// runtime temporary files inside Laravel's writable storage tree instead.
$applicationTempPath = __DIR__.'/../storage/app/tmp';
if (! is_dir($applicationTempPath)) {
    @mkdir($applicationTempPath, 0755, true);
}

foreach ([
    __DIR__.'/../bootstrap/cache',
    __DIR__.'/../storage/framework/cache',
    __DIR__.'/../storage/framework/sessions',
    __DIR__.'/../storage/framework/views',
    __DIR__.'/../storage/logs',
    $applicationTempPath,
] as $writablePath) {
    if (! is_dir($writablePath)) {
        @mkdir($writablePath, 0755, true);
    }
    if (is_dir($writablePath) && ! is_writable($writablePath)) {
        @chmod($writablePath, 0775);
    }
}

if (is_dir($applicationTempPath) && is_writable($applicationTempPath)) {
    @ini_set('sys_temp_dir', $applicationTempPath);
    @ini_set('upload_tmp_dir', $applicationTempPath);
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
