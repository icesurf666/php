<?php

class Route {
  # Запись путей
  private static $validRoutes = [];

  public static function set($route, $function) {

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    self::$validRoutes[] = $route;

    if ($uri == $route)
    {
      $function->__invoke();
    }
  }


  # При создании view будет запускаться функция на проверку правильности путей
  public static function isRouteValid() {
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if (!in_array($uri, self::$validRoutes)) {
      return 0;
    }
    else {
      return 1;
    }
  }
  public static function getValidRoutes(){
    return self::$validRoutes;
  }



}

?>
