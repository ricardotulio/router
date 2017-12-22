<?php

namespace Router;

function build_route($path, $method = null, $callback = null) {
    $checker1 = function($method, $callback = null) use ($path) {
        $checker2 = function($callback) use ($path, $method) {
            return (object) [
                'path' => $path,
                'method' => $method,
                'callback' => $callback
            ];
        };

        return func_num_args() < 2 ? $checker2 : $checker2($callback);
    };

    return func_num_args() < 3 ? $checker1 : $checker1($method, $callback);
}
