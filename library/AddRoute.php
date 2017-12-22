<?php

namespace Router;

function add_route($routes, $route = null) {
    $checker = function($route) use ($routes) {
        return array_merge($routes, [ $route ]);
    };

    return func_num_args() < 2 ? $checker : $checker($route);
}
