<?php

echo "Hello World!\n";
echo ("Hello World!\n");

$var = 1;
echo $var;
echo 'Var is $var';
echo "\nVar is $var\n";
echo $var . "\n";
$num = 1;
$num = $num + 1;
$num++;
$num--;
$num += 1;
$num -= 1;
$num *= 2;
$num /= 3;
$num = 13;
$num %= 5;
$num = 1.3;
$num = 3;
$num **= 2;
$num = true;
$num = false;
$bar;
$bar = NULL;

var_dump($bar);

$array = array(1, 2, 3, 4);
$array = [1, 2, 3, 4];
$array = [
        1, 
        'hello',
        true,
        NULL,
        [1, 2, 3]
];
$array = [
    1,
    2,
    3,
    'name' => 'Riks',
    'age' => 18,
    1000 => 67,
    'Hello World!',
    'gender' => 'sigma male',
    'isSigma' => true,
    4,
    5

];
var_dump($array[6]);
$array = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
];
var_dump($array[2][1]);
$array = [1, 2, 3];
array_push($array , 4);
array_push($array, 5, 6, 7);
$array[] = 8;
var_dump($array);
$array