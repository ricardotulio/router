<?php

namespace Router;

use Router\Exception\InvalidRouteException;
use function Garp\Functional\{
    equals,
    either,
    find,
    match,
    pipe,
    gte
};

function build_route($path, $method = null, $callback = null) {
    $checker1 = function($method, $callback = null) use ($path) {
        $checker2 = function($callback) use ($path, $method) {
            return (object) [
                'path' => path($path),
                'method' => method($method),
                'callback' => callback($callback)
            ];
        };

        return func_num_args() < 2 ? $checker2 : $checker2($callback);
    };

    return func_num_args() < 3 ? $checker1 : $checker1($method, $callback);
}

function path($path) {
    $regexp = '/^(\/([\w#!:.?+=&%@!\-\/])+)$/i';

    $isValidPath = pipe(
        match($regexp),
        gte(1)
    );

    if ($isValidPath($path)) {
		return $path;
	}

    throw new InvalidRouteException();
}

function get() {
    return 'GET';
}

function post() {
    return 'POST';
}

function put() {
    return 'PUT';
}

function patch() {
    return 'PATCH';
}

function delete() {
    return 'DELETE';
}

function options() {
    return 'OPTIOINS';
}

function valid_methods() {
    return [
        get(),
        post(),
        put(),
        patch(),
        delete(),
        options()
    ];
}

function method($method) {
    $findMethod = function($method) {
        return find(equals($method), valid_methods());
    };

    $isValidMethod = pipe(
        $findMethod,
        'Garp\Functional\truthy'
    );

    if ($isValidMethod($method)) {
        return $method;
    }

    throw new InvalidRouteException();
}

function callback($callback) {
    $isValidCallback = function($callback) {
        return !is_null($callback) && is_callable($callback);
    };

    if ($isValidCallback($callback)) {
        return $callback;
    }

    throw new InvalidRouteException();
}
