<?php

/**
 * This file is part of I18nRoutingServiceProvider.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Silex\I18nRouting;

use Silex\Application;
use Silex\Provider\TranslationServiceProvider;
use Umpirsky\Silex\I18nRouting\Provider\I18nRoutingServiceProvider;

/**
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class I18nRoutingServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    protected $app;

    protected function setUp()
    {
        $this->app = new Application();
        $this->app->register(new TranslationServiceProvider());
        $this->app['translator.domains'] = array('routes' => array('/route', '/ruta'));
    }

    public function testRegister()
    {
        $this->app->register(new I18nRoutingServiceProvider());

        $this->assertSame('Umpirsky\Silex\I18nRouting\Route', $this->app['route_class']);
    }

    public function testI18nRoutes()
    {
        $this->app->register(new I18nRoutingServiceProvider());
        $this->app->get('/foo', function() {});
    }
}
