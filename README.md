I18n Routing Service Provider
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
