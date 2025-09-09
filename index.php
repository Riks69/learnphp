<?php

function hello(){
    var_dump('Hello');
}

hello();
hello();
hello();

function helloName($name){
    var_dump('Hello ' . $name);
}

helloName('Riko');
helloName('Arju');
helloName();

function helloNameAndAge($name = 'Unknown', $age){
    var_dump("Hello $name and you are $age years old");
}

helloNameAndAge('Riko', 18);
helloNameAndAge('Arju', 67);

function stuff(...$args) {
    var_dump($args);
}

stuff(1, 2, 3, 4);
stuff(1, 2, 3, 4, 5, 6, 7);

function sum($a, $b){
    return $a+$b;
    var_dump('adasdasdsadas');
}

$answer = sum(1, 5);
var_dump($answer);

function biggerOrSmaller($a){
    if ($a > 10);{
        return 'Bigger';
    }
    return 'Smaller';
}

var_dump(biggerOrSmaller(15));
var_dump(biggerOrSmaller(5));


function recursive($i){
    if($i<10){
        var_dump($i);
        recursive($i+1);
    }
}

recursive(0);