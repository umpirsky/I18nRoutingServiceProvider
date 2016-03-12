<h3 align="center">
    <a href="https://github.com/umpirsky">
        <img src="https://farm2.staticflickr.com/1709/25098526884_ae4d50465f_o_d.png" />
    </a>
</h3>
<p align="center">
  <a href="https://github.com/umpirsky/Symfony-Upgrade-Fixer">symfony upgrade fixer</a> &bull;
  <a href="https://github.com/umpirsky/Twig-Gettext-Extractor">twig gettext extractor</a> &bull;
  <a href="https://github.com/umpirsky/wisdom">wisdom</a> &bull;
  <a href="https://github.com/umpirsky/centipede">centipede</a> &bull;
  <a href="https://github.com/umpirsky/PermissionsHandler">permissions handler</a> &bull;
  <a href="https://github.com/umpirsky/Extraload">extraload</a> &bull;
  <a href="https://github.com/umpirsky/Gravatar">gravatar</a> &bull;
  <a href="https://github.com/umpirsky/locurro">locurro</a> &bull;
  <a href="https://github.com/umpirsky/country-list">country list</a> &bull;
  <a href="https://github.com/umpirsky/Transliterator">transliterator</a>
</p>

I18n Routing Service Provider [![Build Status](https://secure.travis-ci.org/umpirsky/I18nRoutingServiceProvider.png)](http://travis-ci.org/umpirsky/I18nRoutingServiceProvider)
=============================

Silex i18n routing service provider.

# Parameters

* **translator.domains.route**: Translation message domain. The default value is `routes`.

# Usage

To translate route patterns, just register service provider:

```php
<?php

$app->register(new Umpirsky\Silex\I18nRouting\Provider\I18nRoutingServiceProvider());
```

If you use controller providers you can take advantage of using
`Umpirsky\Silex\I18nRouting\Application` which overrides `Application::mount()` method
in order to translate prefixes. Alternatively, you can do this trick outside of the
`Application` class, read more on [dev.umpirsky.com](http://dev.umpirsky.com/silex-i18n-routing/).

In order for this to work, prefixes should be translated separately from patterns.
