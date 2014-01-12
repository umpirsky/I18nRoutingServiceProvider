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

use Symfony\Component\Translation\TranslatorInterface;
use Silex\Route as BaseRoute;

/**
 * I18n Route.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
class Route extends BaseRoute
{
    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * @var string
     */
    private $translatorDomain = 'routes';

    public function setTranslator(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function setTranslatorDomain($domain)
    {
        $this->translatorDomain = $domain;
    }

    public function setPath($pattern)
    {
        if (null !== $this->translator) {
            $pattern = $this->translator->trans($pattern, array(), $this->translatorDomain);
        }

        return parent::setPath($pattern);
    }
}
