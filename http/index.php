<?php

$countRows = 7;
$countCols = $countRows;

for ($i = 1; $i <= $countRows; $i++)
{
    print_lighn($i, $countCols);
}

function print_lighn (int $i, int $countCols)
{
    for ($j = 1; $j <= $countCols; $j++)
    {
        echo str_pad($i * $j, 3, " ", STR_PAD_LEFT);
    }
    echo "\n";
}



echo 'GET<br>';
var_dump($_GET);
echo '<br>';
echo 'POST<br>';
var_dump($_POST);
echo 'SERVER<br>';
var_dump($_SERVER);

?>


