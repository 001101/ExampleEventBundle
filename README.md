# ExampleEventBundle

[![CircleCI](https://circleci.com/gh/sulu/ExampleEventBundle/tree/master.svg?style=svg)](https://circleci.com/gh/sulu/ExampleEventBundle/tree/master)

## Installation

Install the dependency:

```
composer require sulu/example-event-bundle dev-master
```

Activate the bundle in `config/bundles.php`:

```php
<?php

return [
    // ... other bundles
    Sulu\Bundle\ExampleEventBundle\ExampleEventBundle::class => ['all' => true, 'admin' => true],
];
```

Add the bundle routes to `config/routes/sulu_admin.yaml`:

```yaml
# ... other routes

example_event_api:
    type: rest
    resource: "@ExampleEventBundle/Resources/config/routing_api.xml"
    prefix: /admin/api
```
