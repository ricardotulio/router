<?php

namespace Router;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use function Garp\Functional\{
    both,
    find,
    prop,
    prop_equals
};

function dispatch_request($routes, $request = null) {
    $checker = function(ServerRequestInterface $request) 
        use ($routes): ResponseInterface {
        $requestedMethod = prop_equals('method', 'GET');
        $requestedTarget = prop_equals(
            'path',
            $request->getRequestTarget()
        );

        $requestedRoute = both($requestedMethod, $requestedTarget);

        $callback = prop('callback', find($requestedRoute, $routes));

        return $callback($request, new \Router\Http\Response());
    };

    return func_num_args() < 2 ? $checker : $checker($request);
}
