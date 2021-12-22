<?php
//1. Создать переменную $name и задать ей значение с именем,
// результат вывести на страницу с помощью echo;
$name = "Vlad";
echo $name;

//2. Создать две переменные $а = 8 и $b = 1, вывести на страницу результаты
// основных математических операций (+ - / * и остаток от деления (%));
$a = 8;
$b = 1;
echo "<br/>a + b = ", $a + $b;
echo "<br/>a - b = ", $a - $b;
echo "<br/>a * b = ", $a * $b;
echo "<br/>a / b = ", $a / $b;
echo "<br/>a % b = ", $a % $b;

//3. Создайте переменную $number = 5, в переменную $result запишите
// значение $number в 3 степени. Результат выведите на экран.
$number = 5;
$result = $number ** 3;
echo "<br/>", $result;

//4. Внесите в переменную $age ваш возраст. Если возраст в пределах от
// 18 до 60 лет, то выведите на экран сообщение "Вам ещё работать и работать";
$age = 18;

if((int)$age >= 18 && (int)$age <= 60) {
    echo "<br/>", "Вам ещё работать и работать";
}

//5. Расширьте задачу 4. Если возраст меньше 18 или больше 60,
// то вывести сообщения "Вам ещё рано работать" и "Пора на отдых" соответственно;
if((int)$age >= 18 && (int)$age <= 60) {
    echo "<br/>", "Вам ещё работать и работать";
} elseif ((int)$age < 18) {
    echo "<br/>", "Вам ещё рано работать";
} else {
    echo "<br/>", "Пора на отдых";
}

//6. Создайте переменную $dayNumber с номером дня недели. Если номер дня в пределах
// от 1 до 5 - вывести сообщение "Это рабочий день", если 6-7 то "Это выходной",
// если значение $dayNumber не в пределах 1-7 то вывести сообщение об ошибке;
$dayNumber = 3;
if((int)$dayNumber >= 1 && (int)$dayNumber <= 5) {
    echo "Это рабочий день";
} elseif((int)$dayNumber >= 6 && (int)$dayNumber <= 7) {
    echo "Это выходной";
} else {
    echo "Ошибка";
}

//7. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12
// двумя разными способами объявления констант. Выведите значение констант на страницу;
const DAYS_COUNT = 7;
define("MONTH_COUNT", 12);
echo "<br/>", DAYS_COUNT;
echo "<br/>", MONTH_COUNT;

//8. Создайте две переменные с целыми числами. Если переменные равны друг другу,
// то вывести сообщение "Сумма чисел равна" и сумму чисел, если нет, то
// "Разница чисел равна" и разницу соответственно;
$firstNumber = 3;
$secondNumber = 6;

if($firstNumber === $secondNumber) {
    echo "<br/>", "Сумма чисел равна ", $firstNumber + $secondNumber;
} else {
    echo "<br/>", "Разница чисел равна ", $firstNumber - $secondNumber;
}

//9. Создайте переменную со случайным числом от 1 до 100. Выведите число на
// страницу и сделайте проверку его на кратность, результат проверки так
// же вывести на экран;
$randomNumber = (int)rand(1, 100);
echo "<br/>", $randomNumber;

if($randomNumber % 2 === 0) {
    echo "<br/>Число кратное";
} else {
    echo "<br/>Число не кратное";
}