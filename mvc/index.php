<?php

require_once 'controller.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri) {
    main_page($array_menu, 'main_page');
    
} elseif('/task1' === $uri) {
    task($array_menu, 'task1', $_GET['n']);
} elseif ('/task2' === $uri) {
    task($array_menu, 'task2', $_GET['n']);
} elseif ('/task3' === $uri) {
    task($array_menu, 'task3', '');
} else {
    page_not_found($array_menu);
}
