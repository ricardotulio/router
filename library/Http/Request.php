<?php

namespace Router\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\UriInterface;

class Request extends Message implements ServerRequestInterface
{
    private $requestTarget;

    private $method;

    public function getRequestTarget()
    {
        return $this->requestTarget;
    }

    public function withRequestTarget($requestTarget)
    {
        $this->requestTarget = $requestTarget;
        return $this;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function withMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function getUri()
    {}

    public function withUri(UriInterface $uri, $preserveHost = false)
    {}

    public function getServerParams()
    {}

    public function getCookieParams()
    {}

    public function withCookieParams(array $cookies)
    {}

    public function getQueryParams()
    {}

    public function withQueryParams(array $query)
    {}

    public function getUploadedFiles()
    {}

    public function withUploadedFiles(array $uploadedFiles)
    {}

    public function getParsedBody()
    {}

    public function withParsedBody($data)
    {}

    public function getAttributes()
    {}

    public function getAttribute($name, $default = null)
    {}

    public function withAttribute($name, $value)
    {}

    public function withoutAttribute($name)
    {}
}
