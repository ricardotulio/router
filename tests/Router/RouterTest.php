<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function mustAddRouteAndRetrivieRouteList()
    {
        $path = '/test';
        $method = get();
        $callback = function() {};

        $router = router();
        $router->add($path, $method, $callback);
        $routes = $router->get_routes();

        $this->assertCount(1, $routes);
        $this->assertEquals(
            [
                (object) [
                    'path' => $path,
                    'method' => $method,
                    'callback' => $callback
                ]
            ],
            $routes
        );
    }
}
