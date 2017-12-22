<?php

namespace Router;

use Psr\Http\Message\ResponseInterface;
use Router\Http\Response;

function build_response(): ResponseInterface {
    return new Response();
}
