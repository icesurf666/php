<?php

class Index extends Controller
{
    public function run()
    {
        $this->view();
    }

  public static function getHeader() {
    return "Главная";
  }

  public static function getMenu() {
    return DB::getArray();
  }

}
