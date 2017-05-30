<?php

namespace Sergiors\Acme\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

final class TwigTemplatesServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        if (!isset($app['twig'])) {
            throw new \LogicException(
                'You must register the TwigServiceProvider to use the TwigBridgeServiceProvider.'
            );
        }

        $app['twig.loader.filesystem'] = $app->extend('twig.loader.filesystem',
            function (\Twig_Loader_Filesystem $loader) use ($app) {
                $loader->addPath(__DIR__.'/../../Apps/Web/Resources/views', 'Web');
                return $loader;
            }
        );
    }
}
