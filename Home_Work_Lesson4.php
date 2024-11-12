<?php

// 1.Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.


function ElementPosition($array, $position) {
    $result = [];

    foreach ($array as $element) {
        if (is_array($element)) {
            $result = array_merge($result, ElementPosition($element, $position));
        } elseif (array_key_exists($position, $array)) {
            $result[] = $array[$position];
            break;
        }
    }

    return $result;
}

$Test = [
    1,
    [2, 3, 4],
    [5, [6, 7, 8, 9], 10],
    [11, [12, 13, [14, 15]], 16],
];

// пример вывода

$position = 3;
$ElementPosition = ElementPosition($Test, $position);
var_dump($ElementPosition);
echo ("</br>");


// 2,Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false

function countLettersB($input) {
    if (!is_string($input)) {
        return false;
    }
    $count = 0;
    $input = strtolower($input);
    foreach (str_split($input) as $char) {
        if ($char === 'b') {
            $count++;
        }
    }

    return $count;
}


// Пример вывода

var_dump(countLettersB("Home Work nubmer 4"));
var_dump(countLettersB("blue Bubble gum"));
echo ("</br>");

// 3, Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

function sumArray($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumArray($value);
        } else {
            $sum += $value;
        }
    }

    return $sum;
}

// Пример вывода

$array = [0, 11, [22, 33, [4, 17]], 112, [241, [2, 155]]];
var_dump(sumArray($array));
echo ("</br>");

// 4. Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float

function countSquares($bigSize, $smallSize) {
    if ($smallSize <= 0 || $bigSize <= 0) {
        return false;
    }

    $numSquares = ($bigSize / $smallSize) ** 2;

    return (float) $numSquares;
}

// Пример выаода

$bigSize = 45;
$smallSize = 12;
var_dump(countSquares($bigSize, $smallSize));
echo ("</br>");

?>
