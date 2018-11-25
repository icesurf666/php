<?php

class Index {

  public static function getHeader() {
    return "Главная";
  }

  public static function getMenu() {
    return DB::getArray();
  }
}


?>
