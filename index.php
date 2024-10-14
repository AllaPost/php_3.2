<?php

echo "<strong>1. Определение переменных и констант:</strong> <br>";
// Объявляю переменные с разными типами данных
$stringVar = "Привет, мир!";  // строка
$intVar = 42;                 // число
$boolVar = true;              // булево значение

// Создаю константу для хранения имени сайта
define("SITE_NAME", "Мой Сайт");

// Вывод константы 
echo "Имя сайта: " . SITE_NAME . "<br>";


// Вывод значений 
echo "Строка: " . $stringVar . "<br>";
echo "Число: " . $intVar . "<br>";
echo "Булево значение: " . ($boolVar ? "Истина" : "Ложь") . "<br>";
print "Имя сайта через print: " . SITE_NAME . "<br>";

echo "<strong>2. Преобразование типов:</strong> <br>";
// Строковое представление числа
$stringNumber = "12345";

// Преобразование строки в число
$intNumber = (int)$stringNumber;

// Преобразованное число
echo "Преобразованное значение: " . $intNumber . "<br>";

// Тип переменной
echo "Тип переменной: " . gettype($intNumber) . "<br>";

echo "<strong>3. Использование операторов:</strong> <br>";

// Объявление переменныех с числами
$num1 = 10;
$num2 = 5;
$num3 = 20;

// Арифметические операции
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;

// Вывод результата арифметических операций
echo "Сумма: " . $sum . "<br>";
echo "Разность: " . $difference . "<br>";
echo "Произведение: " . $product . "<br>";
echo "Частное: " . $quotient . "<br>";

// Сравнение переменных с помощью операторов сравнения
$isEqual = $num1 == $num3;
$isGreater = $num1 > $num2;
$isLess = $num2 < $num3;

// Вывод результатов сравнения
echo "Равны ли num1 и num3? " . ($isEqual ? "Да" : "Нет") . "<br>";
echo "num1 больше num2? " . ($isGreater ? "Да" : "Нет") . "<br>";
echo "num2 меньше num3? " . ($isLess ? "Да" : "Нет") . "<br>";

// Логическое выражение с операторами && и ||
$logicalExpression = ($num1 > $num2) && ($num3 > $num1) || ($num2 == 5);

// Вывод результата логического выражения
echo "Результат логического выражения: " . ($logicalExpression ? "Истина" : "Ложь") . "<br>";


echo "<strong>4. Суперглобальная переменная SERVER:</strong> <br>";

// Получение информации о браузере пользователя
$browser = $_SERVER['HTTP_USER_AGENT'];

// Получение IP-адреса пользователя
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Вывод информации
echo "Информация о браузере: " . $browser . "<br>";
echo "IP-адрес пользователя: " . $ipAddress . "<br>";
?>