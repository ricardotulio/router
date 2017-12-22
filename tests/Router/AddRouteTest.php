<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class AddRouteTest extends TestCase
{
    /**
     * @test
     */
    public function mustAddRoute()
    {
        $routes = [];
        $route = build_route('/test', 'GET', function() {});
        $newRoutes = add_route($routes, $route);

        $this->assertCount(0, $routes);
        $this->assertCount(1, $newRoutes);
        $this->assertEquals(
            [
                $route
            ],
            $newRoutes
        );
    }
}
