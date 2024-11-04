<?php
// Your code here!

// Добавляем все на гит - Урок 2

//Отримати залишок від ділення 7 на 3
$a1 = 7;
$b1 = 3;
$ResultOfDivision1 = $a1/$b1;
var_dump($ResultOfDivision1);

$ResultOfDivision = 7/3;
var_dump($ResultOfDivision);



//Отримати цілу частину ділення 7 и 7,15
$a2= 7;
$b2 = 7.15;
$ResultOfDivision2 = $a2/$b2;
var_dump((int) ($ResultOfDivision2));

var_dump((int) ($ResultOfDivision3 = 7/7.15));



//Отримати корінь из 25
$a3= 25;
$sqrtOfNumber = sqrt($a3);
var_dump((int) ($sqrtOfNumber));



// Работа со строками

//Отримати 4-е слово з фрази - Десять негритят пошли купаться в море - не обрабатывает русскую раскладку
$PhraseOnEnglish = 'Ten children went swimming in the sea';
$WordNumberFour = str_word_count($PhraseOnEnglish, 1);
var_dump($WordNumberFour[3]);

// пробуем другой вариант решения этого задания
$Phrase = 'Десять негритят пошли купаться в море';
$CountOfWord = explode(" ", $Phrase);
var_dump($CountOfWord[3]);



//Отримати 17-й символ із фрази - Десять негритят пошли купаться в море
$CountOfSymbol = mb_substr($Phrase, 16, 1);
var_dump($CountOfSymbol);



//Зробити великою кожну першу букву слів фрази - Десять негритят пошли купаться в море - не обрабатывает русскую раскладку
$PhraseLargeRegister = ucwords($PhraseOnEnglish);
var_dump($PhraseLargeRegister);

//пробуем другой вариант решения этого же задания
$PhraseLargeRegisterSecondVariant = mb_convert_case($Phrase, MB_CASE_TITLE);
var_dump($PhraseLargeRegisterSecondVariant);



//Порахувати длину строки - Десять негритят пошли купаться в море
$CountOfLenghth = iconv_strlen($Phrase);
var_dump($CountOfLenghth);

$CountOfLenghth2 = mb_strlen($Phrase);
var_dump($CountOfLenghth2);


//Дії з логіческими даними

//Чи вірно твердження true дорівнює 1
$Equality = (true == 1);
var_dump($Equality);


//Чи вірно твердження false тождественно 0
$Equality2 = (false === 0);
var_dump($Equality2);


//Яка строка більше three - три
$stringEng = 'three';
$stringRU = 'три';
$Equality3 = $stringEng > $stringRU;
echo 'Three больше три?:';
var_dump($Equality3);


// Яке число більше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$NumericExpression1 = (125*13+7);
$NumericExpression2 = (223+28*2);
$ResultComprassion = ($NumericExpression1 > $NumericExpression2);
echo 'Первое выражение больше второго?:';
var_dump($ResultComprassion);

//Отримати залишок від ділення 7 на 3
$ResultOfDivision4 = 7%3;
var_dump($ResultOfDivision4);

echo 'Three больше три?:';
var_dump(strcmp("three", "три") > 0);
echo 'Three больше три? при -1 - ложь, при 1 - правда, при 0 равны:';
var_dump(strcmp("three", "три"));

// с использованием mb_strlen
$stringEng1 = 'three';
$stringRU1 = 'три';
$lengthEng2 = mb_strlen($stringEng1, 'UTF-8');
$lengthRU2 = mb_strlen($stringRU1, 'UTF-8');
echo 'Three больше три?: ';
var_dump($lengthEng2 > $lengthRU2);

?>
