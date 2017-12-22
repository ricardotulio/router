<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    /**
     * @test
     */
    public function mustBuildRequest()
    {
        $this->assertInstanceOf(
            'Psr\Http\Message\ServerRequestInterface',
            build_request()
        );
    }
}
