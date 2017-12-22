<?php

namespace Router;

use Psr\Http\Message\ServerRequestInterface;
use Router\Http\Request;

function build_request(): ServerRequestInterface {
    $request = new Request();
    $request->withMethod($_SERVER['REQUEST_METHOD'])
        ->withRequestTarget($_SERVER['REQUEST_URI']);

    return $request;
}
