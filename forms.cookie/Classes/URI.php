<?php
class URI {
  public static function getURI() {
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
?>
