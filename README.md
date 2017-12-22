# Router

## Usage

```
<?php

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use function Router\{
    router,
    get
};

require_once __DIR__ . '/vendor/autoload.php';

$router = router();

$router->add('/test', get(), function(
    ServerRequestInterface $request,
    ResponseInterface $response): ResponseInterface {
    $body = $response->getBody();
    $body->write("Hello, world!");
    return $response;
});

$router->run();
```
