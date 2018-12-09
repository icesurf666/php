<?php

class Errors
{
  public function run()
  {
      $video = [
          'NspqGM0DbbQ',
          'hRm5zWQWQjI',
          'qjEjHuOU3tw',
          '4CbLXeGSDxg',
      ];

      $randKey = array_rand($video);

      $randomVideo = $video[$randKey];

      $header_error = '404 Page not found';
      require 'Views/ErrorsView.php';
  }
}


?>
