<?php
// Your code here!
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
$length = count($arr);
var_dump('посчитать длину массива', $length);
echo '<br/>';

//переместить первые 4 элемента массива в конец массива

for ($i = 0; $i < 4; $i++) {
    $firstElement = array_shift($arr);
    array_push($arr, $firstElement);
}
var_dump('переместить первые 4 элемента массива в конец массива', $arr);
echo '<br/>';

//получить сумму 4,5,6 элемента
var_dump ($sum = $arr[3] + $arr[4] + $arr[5]);
echo '<br/>';

$sumOther = array_sum(array_slice($arr, 3, 3));
var_dump ('получить сумму 4,5,6 элемента', $sumOther);
echo '<br/>';


// Второй этап задач


$firstArr = [

    'one' => 1,

    'two' => 2,

    'three' => 3,

    'foure' => 5,

    'five' => 12,

];

$secondArr = [

    'one' => 1,

    'seven' => 22,

    'three' => 32,

    'foure' => 5,

    'five' => 13,

    'six' => 37,

];

// найти все элементы которые отсутствуют в первом массиве и присутствуют во втором

$differentArr = array_diff_key($secondArr, $firstArr);
var_dump ('найти все элементы которые отсутствуют в первом массиве и присутствуют во втором', $differentArr);
echo '<br/>';

// найти все элементы которые присутствую в первом и отсутствуют во втором

$differentArr2 = array_diff_key($firstArr, $secondArr);
var_dump ('найти все элементы которые присутствую в первом и отсутствуют во втором', $differentArr2);
echo '<br/>';

// найти все элементы значения которых совпадают

$array_intersect = array_intersect($firstArr, $secondArr);
var_dump ('найти все элементы значения которых совпадают', $array_intersect);
echo '<br/>';

// найти все элементы значения которых отличается


$array_diff = array_diff($firstArr, $secondArr);
$array_diff2 = array_diff($secondArr, $firstArr);
$array_merge = array_merge($array_diff, $array_diff2);
var_dump('найти все элементы значения которых отличается', $array_merge);
echo '<br/>';



// третий этап задач

$firstArr = [

    'one' => 1,

    'two' => [

        'one' => 1,

        'seven' => 22,

        'three' => 32,

    ],

    'three' => [

        'one' => 1,

        'two' => 2,

    ],

    'foure' => 5,

    'five' => [

        'three' => 32,

        'foure' => 5,

        'five' => 12,

    ],

];


//получить все вторые элементы вложенных массивов

$secondElement = [];

foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $secondValue = array_values($value)[1] ?? NULL;
        $secondElement[$key] = $secondValue;
    }
}

var_dump('получить все вторые элементы вложенных массивов', $secondElement);
echo '<br/>';


//получить общее количество элементов в массиве

$allElements = 0;
foreach ($firstArr as $element) {
    if (is_array($element)) {
        $allElements += count($element);
    } else {
        $allElements++;
    }
}
var_dump('получить общее количество элементов в массиве', $allElements);
echo '<br/>';


//получить сумму всех значений в массиве

$allSum = 0;
foreach ($firstArr as $value) {
    if (is_array($value)) {
        foreach ($value as $secValue) {
            $allSum += $secValue;
        }
    } else {
        $allSum += $value;
    }
}
var_dump('получить сумму всех значений в массиве', $allSum);
echo '<br/>';


?>