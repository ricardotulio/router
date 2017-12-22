<?php

namespace Router\Http;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

class Message implements MessageInterface
{
    protected $body;

    public function getProtocolVersion()
    {}

    public function withProtocolVersion($version)
    {}

    public function getHeaders()
    {}

    public function hasHeader($name)
    {}

    public function getHeader($name)
    {}

    public function getHeaderLine($name)
    {}

    public function withHeader($name, $value)
    {}

    public function withAddedHeader($name, $value)
    {}

    public function withoutHeader($name)
    {}

    public function getBody()
    {
        return $this->body;
    }

    public function withBody(StreamInterface $body)
    {
        $this->body = $body;
        return $body;
    }
}
