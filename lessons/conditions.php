<?php

$number = 4;

if ($number > 5) {
    echo '10>5';
    echo '<br>';
}

echo '<br>';
echo 'Эта строка выводится всегда';


if ($number > 5) {
    echo '<br>';
    echo '10 больше 5';
    } else {
    echo '<br>'; 
    echo 'Число меньше или равно 5';
}


if ($number > 5) {
    echo '<br>';
    echo '10 больше 5';
} else if ($number > 3) {
    echo '<br>'; 
    echo 'Число меньше или равно 5, но больше 3';
} else if ($number > 0) {
    echo '<br>'; 
    echo 'либо 1, либо 2, либо 3';
} else {
    echo '<br>'; 
    echo '0 либо отрицательное';
}

echo '<hr>';

$second_number = 1;

if ($number > 0 and $second_number == 0) { // == оператор сравнения, and логическое и
    echo '$number > 0 и $second_number равно 0'; 
}

if ($number > 0 or $second_number == 0) { // or логическое или
    echo '$number > 0 или $second_number равно 0'; 
}

if ($number > 0){
    if ($number >2) {
        echo 'Число >2';
    }
}

if ($number != 0) { // != не равно
    echo 'Число не 0';
}

echo '<hr>';
$age = 18;

if ($age < 7) {
    echo 'Вы дошкольник';
} else if ($age > 6 and $age < 19) {
    echo 'Вы в школе';
} else {
    echo 'Закончили школу';
}

echo '<hr>';

