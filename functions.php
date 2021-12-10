<?php

function sayHello (){
    echo'Hello<br>';
}

sayHello();

function plusOne ($a){
    echo ++$a . '<br>';
}

plusOne(55);

$number = 18;
plusOne($number);

function multiply (int $a, $b){ //int указывает что входной параметр должен быть число
    echo $a * $b . '<br>';
};

multiply(5,5);

function sumNumbers ($a,$b,$c = 0){ //$c необязательный параметр, все не обязательные параметры должны идти после обязательных
    echo $a + $b + $c . '<br>';
};

sumNumbers(1,2,3);

sumNumbers(1,2);

function returnPlusOne ($a) {
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
    echo 'lalala'; // поле return ничего внутри функции не выполняется
}

$number = 9;
$result = returnPlusOne($number);
echo "Старое число: {$result ['oldValue']} <br> Новое число: {$result['newValue']}<br>";

$numbers = [1, 5, 3, 7, 2, 4]; ///ищем максимальное число массива

function maxNumber (array $numbers) {
    $max = $numbers[0]; // предположим что первое число максимальное
    foreach ($numbers as $number) { 
        if ($number > $max) { //сравниваем все числа с певым
            $max = $number; // если число больше присваиваем это значение $max
        }
    }
    return $max; // методом перебора всех чисел узнаём самое большое
}

function sumArray (array $numbers) {
    $res = 0;
    foreach ($numbers as $number) {
        $res += $number;
    }
    return $res;
}

function positive_sum ($arr) {
    $res = 0;
    foreach ($arr as $number) {
        if ($number > 0) {
            $res += $number;
        }
    }
    return $res;
  }

echo maxNumber($numbers) . '<br>';

echo max($numbers) . '<br>'; //функция макс ищет самое большое число автоматически