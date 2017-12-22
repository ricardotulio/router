<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class BuildRouteTest extends TestCase
{
    use BuildRouteDataProvider;

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

	/**
	 * @test
     * @dataProvider validPathDataProvider
     */
	public function mustValidatePath($path)
	{
		$this->assertEquals($path, path($path));
	}

    /**
     * @test
     * @dataProvider invalidPathDataProvider
     * @expectedException \Router\Exception\InvalidRouteException
     */
    public function mustThrowExceptionWhenPathIsInvalid($path)
    {
        path($path);
    }

    /**
     * @test
     * @dataProvider validMethodDataProvider
     */
    public function mustValidateMethod($method)
    {
        $this->assertEquals($method, method($method));
    }

    /**
     * @test
     * @dataProvider invalidMethodDataProvider
     * @expectedException \Router\Exception\InvalidRouteException
     */
    public function mustThrowExceptionWhenMethodIsInvalid($method)
    {
        method($method);
    }

    /**
     * @test
     * @dataProvider validCallbackDataProvider
     */
    public function mustValidateCallback($callback)
    {
        $this->assertEquals($callback, callback($callback));
    }

    /**
     * @test
     * @dataProvider invalidCallbackDataProvider
     * @expectedException \Router\Exception\InvalidRouteException
     */
    public function mustThrowExceptionWhenCallbackIsInvalid($callback)
    {
        callback($callback);
    }

    /**
     * @test
     * @dataProvider invalidRoutesDataProvider
     * @expectedException \Router\Exception\InvalidRouteException
     */
    public function mustThrowExceptionWithInvalidRoute(
        $path,
        $method,
        $callback
    ) {
        build_route($path, $method, $callback);
    }
}
