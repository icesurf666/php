<?php


# Загрузка нужных классов

spl_autoload_register(function ($class_name) {

  if (file_exists('classes/'. $class_name . '.php')) {
    require_once 'classes/'. $class_name . '.php';
  }
  elseif (file_exists('Controllers/'. $class_name . '.php')) {
    require_once 'Controllers/'. $class_name . '.php';
  }

});

# Отвечает за пути
require_once ('Routes/Routes.php');

# точка входа
$main = new Main();
$main->run();

?>
