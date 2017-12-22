<?php

namespace Router;

function router() {
    return new class {
        private $routes = [];

        public function add($path, $method, $callback) {
            $this->routes = add_route(
                $this->routes,
                build_route($path, $method, $callback)
            );

            return $this->routes;
        }

        public function get_routes()
        {
            return $this->routes;
        }

        public function run()
        {
            $response = dispatch_request($this->routes, build_request());
            echo $response->getBody();
        }
    };
}
