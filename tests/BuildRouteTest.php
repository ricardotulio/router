<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class BuildRouteTest extends TestCase
{
    public function validRoutesDataProvider()
    {
        return [
            [
                'path' => '/teste',
                'method' => 'GET',
                'callback' => function() {}
            ]
        ];
    }

    /**
     * @test
     * @dataProvider validRoutesDataProvider
     */
    public function mustBuildRoute(
        $path,
        $method,
        $callback
    ) {
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
