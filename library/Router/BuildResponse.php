<?php

namespace Router;

use Psr\Http\Message\ResponseInterface;
use Router\Http\Response;
use Router\Http\Stream;

function build_response(): ResponseInterface {
    $response = new Response();
    $response->withBody(new Stream());

    return $response;
}
