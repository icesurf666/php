<?php

class Routes
{
  public $routes = [
      '/' => 'Index',
      '/login' => 'Login',
      '/out' => 'Out',
      '/balance' => 'Balance',
  ];

  public function run()
  {
      $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

      $showErrorController = true;

      foreach ($this->routes as $rout => $name) {
        if ($rout == $uri) {

            $controller = new $name($name);
            $controller->run();

            $showErrorController = false;
        }
      }

      if ($showErrorController) {
          (new Errors())->run();
      }
  }
}
