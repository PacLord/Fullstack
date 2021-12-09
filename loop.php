<?php

$number = 0;
while ($number < 10){ //цикл до тех пор пока number < 10
    echo $number . '<hr>';
    $number++;
} 
echo '<select>';
echo '<option selected disabled>-- Выберите значение --</option>';
for ($i = 1; $i<10; $i++){
    echo "<option>$i</option>";
}
echo '</select>';

echo '<br><br>Шкала температур<br><br>';
$farenheit = -50;

while ($farenheit <= 50) {
    $celsium = round(($farenheit - 32) * 5 / 9, 2); // функция round округление, в скобкаъ после запятой указывается на до скольки цифр округлять
    echo "температура $farenheit °F равна $celsium °C <br>";
    $farenheit++;

}