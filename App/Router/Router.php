<?php

namespace App\Router;

class Router {
  private $routables;

  function __construct($cf) {
    $this->routables = $cf;
    //$this->debugRoutes();
  }

  public function route() {
    // Get current request path
    $before_route_path = $_SERVER['REQUEST_URI'];
    $flipped_routables = array_flip($this->routables);

    if (array_key_exists($before_route_path, $flipped_routables)) {
      // Routable exists
      $controller_name = '\App\Controller\\' . $flipped_routables[$before_route_path] . 'Controller';
      $this->routeToController($controller_name);
    }
  }

  private function routeToController($controller_name) {
    $instantiate = new $controller_name();

    if ($_SERVER['REQUEST_METHOD'] === "GET") {
      $instantiate->index();
    } elseif ($_SERVER['REQUEST_METHOD'] === "POST") {
      $instantiate->post();
    }
  }

  public function debugRoutes() {
    echo '<h1>Routes</h1>';
    echo '<br><br><br>';
    var_dump($this->routables);
    echo '<br><br><br>';
    echo '<h1>END Routes</h1>';
  }
}