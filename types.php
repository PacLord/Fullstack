<?php
$name = 'Rail';
echo $name . ' - ' . gettype($name);
echo '<hr>';
$age = 28;
echo $age . ' - ' . gettype($age);
echo '<hr>';
$money = 999.9;
echo $money . ' - ' . gettype($money);
echo '<hr>';
$isRain = true;
echo $isRain . ' - ' . gettype($isRain);
echo '<hr>';
echo $notExist . ' - ' . gettype($notExist);


echo '<hr>';
if ($name) {
    echo '$name true <br>';
} else {
    echo 'false <br>';
}

$emptyString ='';
if ($emptyString) {
    echo '$emptyString true <br>';
} else {
    echo '$emptyString false <br>';
}

$zeroString ='0';
if ($zeroString) {
    echo '$zeroString true <br>';
} else {
    echo '$zeroString false <br>';
}

$number = 99;
if ($number) {
    echo '$number true <br>';
} else {
    echo '$number false <br>';
}

$zero = 0;
if ($zero) {
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

$false = false;
if ($false) {
    echo '$false true <br>';
} else {
    echo '$false false <br>';
}

$null = NULL;
if ($null) {
    echo '$null true <br>';
} else {
    echo '$null false <br>';
}


if ($null == $false) {
    echo '$null == $false - true <br>';
} else {
    echo '$$null == $false - false <br>';
}

if ($null === $false) { // === строгое сравнение со сравнением типов данных
    echo '$null === $false - true <br>';
} else {
    echo '$$null === $false - false <br>';
}


echo '<hr>';

$message = "Значение переменной name = $name"; //текст внутри "двойных кавычек" позволяет использовать переменные внутри строк
echo $message;