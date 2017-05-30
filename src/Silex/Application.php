<?php

namespace Sergiors\Acme\Silex;

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Sergiors\Acme\Silex\Provider\TwigTemplatesServiceProvider;

final class Application extends \Silex\Application
{
    public function __construct($debug = false)
    {
        parent::__construct(['debug' => $debug]);

        $this->register(new MonologServiceProvider());
        $this->register(new TwigServiceProvider());
        $this->register(new TwigTemplatesServiceProvider());

        if (true === $debug) {
            $this['monolog.logfile'] = 'php://stdout';
        }
    }
}
