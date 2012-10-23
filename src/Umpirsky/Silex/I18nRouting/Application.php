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

use Silex\Application as BaseApplication;

/**
 * Overrides mount in order to translate prefixes.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class Application extends BaseApplication
{
    public function mount($prefix, $app)
    {
        parent::mount(
            $this['translator']->trans(
                $prefix,
                array(),
                isset($this['translator.domains.route']) ? $this['translator.domains.route'] : 'routes'
            ),
            $app
        );
    }
}
