<?php

use Illuminate\Foundation\Application;

$app = new Application(
    dirname(__DIR__)
);

$app->useAppPath('app');
$app->useStoragePath(dirname(__DIR__).'/storage');

return $app;
