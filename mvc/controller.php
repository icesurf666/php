<?php

$array_menu = [
    'task1' => ['Задание 1','Генерация случайного массива заданной длины, не более 10 элементов и вывод
                    максимального и минимального элемента<br><br>
                    <b>Для получения массива, перейдите по ссылке:</b><br>
                    <a href="/task1?n=7">Получить массив</a>'],
    'task2' => ['Задание 2','Вывод таблицы умножения<br>
                                <a href="task2?n=7">Создать таблицу умножения</a> '],
    'task3' => ['Задание 3','Уже реализовано на этом сайте'],
];

function main_page($menu) {
    require 'template/main-page.php';
}

function page_not_found($menu) {
    require 'template/404.php';
}

function task1($menu, $param) {
    $array_task1 = [];
    if (!empty($param)) {

        for ($i = 0; $i < $param; $i++) {
            $array_task1[$i] = rand(-20, 30);
        }
    }

    require 'template/task.php';
}

function task2($menu, $param){
    require 'template/tabl.php';
}
function task3($menu, $param){
    require 'template/task.php';
}
