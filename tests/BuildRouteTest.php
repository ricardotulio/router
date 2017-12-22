<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class BuildRouteTest extends TestCase
{
    /**
     * @test
     */
    public function mustBuildRoute()
    {
        $path = '/test';
        $method = 'GET';
        $callback = function() {};

        $expectedRoute = (object) [
            'path' => $path,
            'method' => $method,
            'callback' => $callback
        ];

        $this->assertEquals(
            $expectedRoute,
            build_route($path, $method, $callback)
        );
    }
}
