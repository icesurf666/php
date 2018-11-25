<?php

class Main {

  # Проверка на валидность пути
  public function getRoute() {
    $route = Route::getValidRoutes();
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (!in_array($uri, $route)) {
      Errors::View();
      die();
    }

    return $uri;
  }


  public function run() {
    $this->getRoute();
  }
}

?>
