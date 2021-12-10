<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers[0];
echo '<br>';

$count = count($numbers); // выводит длину массива
for ($i = 0; $i < $count; $i++){
    echo "$i $numbers[$i] <br>";
}

echo'<hr>';
foreach ($numbers as $key => $value){
    echo "$key: $value <br>";
}

$new_numbers = [];

for ($i = 0; $i < 10; $i++){
    $new_numbers[] = $i;
}

$new_numbers[3] = 99;
$new_numbers[10] = 100;
$new_numbers[67] = 67*67;

echo '<pre>';
print_r($new_numbers);


$person = [
    'name' => 'Oleg',
    'age' => 33,
    'city' => 'Уренгой',
    'languages' => 'ru'
];

$person['car'] = true;
echo '<pre>';
print_r($person);

unset($person['name']); //удаляет ключ и значения из массива

echo '<hr>';

$colors = ['red', 'green', 'blue'];
$output ='';
foreach($colors as $color) {
    $output = $output . ' ' . $color;
}

echo trim($output);
echo '<hr>';


$sring_colors = implode(', ', $colors); //функция выводит массив в строку в первом параметре указывается разделитель элементов массива во втором массив который необходимо вывести
echo $sring_colors;
echo '<hr>';

$new_str = 'Предложение из 4 слов';
$array = explode(' ', $new_str); //функция преобразует строку в массив

print_r($array);
echo '<hr>';


// -------------------------------- сортировка массивов 

$numbers = [2, 4, 6, 5, 1, 3];
print_r($numbers);

sort($numbers); //функция сортирует массив по значениям изменяя ключи элементов используется только для чисел
print_r($numbers);

print_r($person);
sort($person);
print_r($person);

$person = [
    'name' => 'Oleg',
    'age' => 33,
    'city' => 'Уренгой',
    'languages' => 'ru'
];

asort($person); //соритиовка ассоциативных массивов

print_r($person);

ksort($person); //функция сортирует массив по ключам
print_r($person);

rsort($numbers);
print_r($numbers);

arsort($person);
print_r($person);

krsort($person);
print_r($person);

echo "<hr>";

$persons = [
    [
        'name' => 'Oleg',
        'age' => 33,
        'city' => 'Уренгой',
    ],
    [
        'name' => 'Kristina',
        'age' => 32,
        'city' => 'Уренгой',
    ],
    [
        'name' => 'Eva',
        'age' => 8,
        'city' => 'Уренгой',
    ]
];

function sortByAge ($a, $b) { //функция сотритовки массива $persons по годам
    if ($a['age'] > $b['age']) {
        return 1;
    } else if ($a['age'] < $b['age']) {
        return -1;
    } else {
        return 0;
    }
}

usort($persons,'sortByAge');
print_r($persons);
echo "<hr>";

$nuber_one = 10;
$number_two = 15;

echo $number_one <=> $number_two;

// function sortByAge ($a, $b) { //функция сотритовки массива $persons по годам
//     if ($a['age'] > $b['age']) {
//         return 1;
//     } else if ($a['age'] < $b['age']) {
//         return -1;
//     } else {
//         return 0;
//     }
// }

// фукция <=> заменяет весь код выше
// записывается вот так:

function sortByName ($a, $b) { //функция сотритовки массива $persons по городам
    return $a['name'] <=> $b['name'];
};
print_r($persons);

$names = array_column($persons, 'name');

print_r($names);

array_multisort($names, SORT_DESC, $persons);

print_r($persons);

$keys = array_keys($person);

print_r($keys);

$values = array_values($person);

print_r($values);

print_r($persons[0]['languages'][0][0]);
echo '<br>';
print_r($persons[0]['name']);
echo '<br>';
print_r($persons[1]['age']);