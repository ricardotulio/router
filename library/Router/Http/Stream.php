<?php

namespace Router\Http;

use Psr\Http\Message\StreamInterface;

class Stream implements StreamInterface
{
    private $content = '';

    public function __toString()
    {
        return $this->content;
    }

    public function close()
    {}

    public function detach()
    {}

    public function getSize()
    {}

    public function tell()
    {}

    public function eof()
    {}

    public function isSeekable()
    {}

    public function seek($offset, $whence = SEEK_SET)
    {}

    public function rewind()
    {}

    public function isWritable()
    {}

    public function write($string)
    {
        $this->content .= $string;
    }

    public function isReadable()
    {}

    public function read($length)
    {}

    public function getContents()
    {}

    public function getMetadata($key = null)
    {}
}
