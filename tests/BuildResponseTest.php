<?php

namespace Router;

use PHPUnit\Framework\TestCase;

class BuildResponseTest extends TestCase
{
    /**
     * @test
     */
    public function mustBuildResponse()
    {
        $this->assertInstanceOf(
            '\Router\Http\Response',
            build_response()
        );
    }
}
