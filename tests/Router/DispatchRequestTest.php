<?php

namespace Router;

use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class DispatchRequest extends TestCase
{
    /**
     * @test
     */
    public function mustDispatchRequest()
    {
        $callback = function(ServerRequestInterface $request,
            ResponseInterface $response) {
            return $response;
        };

        $routes = [
            [
                'path' => '/',
                'method' => 'GET',
                'callback' => $callback
            ]
        ];

        $request = $this->createMock(ServerRequestInterface::class);
        $request->method('getMethod')
            ->willReturn('GET');

        $request->method('getRequestTarget')
            ->willReturn('/');

        $this->assertInstanceOf(
            '\Psr\Http\Message\ResponseInterface',
            dispatch_request($routes)($request)
        );
    }
}
