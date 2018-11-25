<?php
class View {
  public static function make($view) {

    if (Route::isRouteValid()) {
      require 'Controllers/'.$view.'.php';
      require 'Views/'.$view.'View.php';
    }
  }

}
?>
