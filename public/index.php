<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {

    ini_set('log_errors', '1');
    ini_set('error_log', dirname(__DIR__).'/logs/error.log');

    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
