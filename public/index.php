<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {


    $kernel = new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    ini_set('log_errors', 0);
    ini_set('error_log', dirname(__DIR__).'/logs/error.log');

    return $kernel;
};
