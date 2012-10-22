<?php

/**
 * This file is part of I18nRoutingServiceProvider.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Silex\I18nRouting\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Prvides i18n routing.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class I18nRoutingServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['route_class'] = 'Umpirsky\Silex\I18nRouting\Route';

        $app['route_factory'] = function () use ($app) {
            $route = new $app['route_class']();
            $route->setTranslator($app['translator']);
            if (isset($app['translator.domains.route'])) {
                $route->setTranslatorDomain($app['translator.domains.route']);
            }

            return $route;
        };
    }

    public function boot(Application $app)
    {
    }
}
