<?php

if (!$loader = require_once __DIR__.'/vendor/autoload.php') {
    throw new \RuntimeException('You need to install dependencies using Composer.');
}

date_default_timezone_set('America/Sao_Paulo');
