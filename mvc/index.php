<?php

require_once 'controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$param = !empty($_GET['n']) ? $_GET['n'] : '';
if ('/' === $uri) {
    main_page($array_menu);
    
} elseif('/task1' === $uri) {
    task1($array_menu, $param);
} elseif ('/task2' === $uri) {
    task2($array_menu, $param);
} elseif ('/task3' === $uri) {
    task3($array_menu, $param);
} else {
    page_not_found($array_menu);
}
