<?php

$name = "Олег";
$age = 33;

echo $name;
echo '<br>';
echo $age;

$name2 = 'Kristina';
echo '<br>';
echo $name2;

$lastName = 'Pachevskiy'; //camel case
$last_Name = 'Pachevskiy'; //snake case
/**
 * многострочный комментарий
 * !!!
 */
echo '<br>';
 $fullName = $name .' '. $lastName;
 echo $fullName;
 echo '<br>';

 $word = 'lower_case';
 $word = strtoupper($word); // переводим в верхний регистр
 echo $word;

echo '<br>';
$password = ' qwerty   ';
echo trim($password); //функция trim уберает пробелы в начале и в конце строки
echo '<br>';

$number = 5 * 5;
echo $number * 2;
echo '<br>';


$burger = 4.95;
$coctail = 1.95;
$cola = 0.85;
$summ = $burger * 2 + $coctail + $cola;
$teaProc = 16;
$toTea = $summ / 100 * $teaProc;
$ndsProc = 7.5;
$nds = ($summ + $toTea) / 100 * $ndsProc;

$allPrice = $summ + $toTea + $nds;
echo $allPrice;

