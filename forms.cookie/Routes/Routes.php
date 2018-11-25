<?php

Route::set('/', function () {
  View::make('Index');
});

Route::set('/login', function () {
    Access::SessionExit();
  View::make('Login');
});

Route::set('/balance', function () {
    View::make('Balance');
});
Route::set('/out', function () {
  Access::SessionExit();
  header('Location: /');
});

?>
