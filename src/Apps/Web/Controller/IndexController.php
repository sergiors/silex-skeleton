<?php

namespace Sergiors\Acme\Apps\Web\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

final class IndexController
{
    public function indexAction(Application $app)
    {
        return new Response($app['twig']->render('@Web/Index/index.html.twig'));
    }
}
