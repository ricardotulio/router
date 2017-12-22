<?php

namespace Router;

trait BuildRouteDataProvider
{
    public function invalidRoutesDataProvider()
    {
        return [
            [
                'path' => '/te ste',
                'method' => 'GET',
                'callback' => function() {}
            ],
            [
                'path' => '/teste',
                'method' => 'GoT',
                'callback' => function() {}
            ],
            [
                'path' => '/teste',
                'method' => 'GET',
                'callback' => array()
            ]
        ];
    }

    public function validRoutesDataProvider()
    {
        return [
            [
                'path' => '/teste',
                'method' => 'GET',
                'callback' => function() {}
            ],
            [
                'path' => '/teste2',
                'method' => 'POST',
                'callback' => function() {}
            ],
            [
                'path' => '/teste',
                'method' => 'PUT',
                'callback' => function() {}
            ],
        ];
    }

    public function validPathDataProvider()
    {
        return [
            [ '/test' ],
            [ '/test/1234' ],
            [ '/test1/1234' ],
        ];
    }

    public function invalidPathDataProvider()
    {
        return [
            [ '/tes te' ],
            [ '/ teste' ],
            [ '~/teste' ]
        ];
    }

    public function validMethodDataProvider()
    {
        return [
            [ 'GET' ],
            [ 'POST' ],
            [ 'PUT' ],
            [ 'DELETE' ],
            [ 'PATCH' ],
        ];
    }

    public function invalidMethodDataProvider()
    {
        return [
            [ 'GoT' ],
            [ '' ],
            [ null ],
            [ 'Post' ],
            [ 'PUT DELETE' ]
        ];
    }

    public function validCallbackDataProvider()
    {
        return [
            [ 'is_null' ],
            [ function() {} ]
        ];
    }

    public function invalidCallbackDataProvider()
    {
        return [
            [ null ],
            [ 'invalid' ],
            [ new \stdClass ]
        ];
    }
}
