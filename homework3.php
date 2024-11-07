<?php
// Your code here!
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

// посчитать длину массива
$length = count($arr);
var_dump('посчитать длину массива', $length);

//переместить первые 4 элемента массива в конец массива

for ($i = 0; $i < 4; $i++) {
    $firstElement = array_shift($arr);
    array_push($arr, $firstElement);
}
var_dump('переместить первые 4 элемента массива в конец массива', $arr);

//получить сумму 4,5,6 элемента
var_dump ($sum = $arr[3] + $arr[4] + $arr[5]);

$sumOther = array_sum(array_slice($arr, 3, 3));
var_dump ('получить сумму 4,5,6 элемента', $sumOther);


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

// найти все элементы которые присутствую в первом и отсутствуют во втором

$differentArr2 = array_diff_key($firstArr, $secondArr);
var_dump ('найти все элементы которые присутствую в первом и отсутствуют во втором', $differentArr2);

// найти все элементы значения которых совпадают

$array_intersect = array_intersect($firstArr, $secondArr);
var_dump ('найти все элементы значения которых совпадают', $array_intersect);

// найти все элементы значения которых отличается


$array_diff = array_diff($firstArr, $secondArr);
$array_diff2 = array_diff($secondArr, $firstArr);
$array_merge = array_merge($array_diff, $array_diff2);
var_dump($array_merge);

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

$secondElements = [];

foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
    $secondValue = array_values($value)[1];
    $secondElements[$key] = $secondValue;
    }
}

var_dump($secondElements);

?>
