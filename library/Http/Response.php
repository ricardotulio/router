<?php

namespace Router\Http;

use Psr\Http\Message\ResponseInterface;

class Response extends Message implements ResponseInterface
{
    public function getStatusCode()
    {}

    public function withStatus($code, $reasonPhrase = '')
    {}

    public function getReasonPhrase()
    {}
}
