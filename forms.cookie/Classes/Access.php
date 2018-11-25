<?php

class Access
{

  public static function Session(){
    session_start();
    $name = $_POST['username'] ?? $_SESSION['username'] ?? null;
    $password = $_POST['password'] ?? $_SESSION['password'] ?? null;
    if (empty($name) && empty($password)) {
      return 0;
    }
    else {
      if (DB::getPass($name) === $password) {
        $_SESSION['username'] = $name;
        $_SESSION['password'] = $password;
        return $name;
      }
    }
  }

  public static function SessionExit() {
      session_start();
    session_destroy();
  }
}

?>
