<?php

class Cat {
    public function __construct()
    {
        var_dump('Class was created!');
    }

    public function __call($name, $args) {
        var_dump($name, $args);
    }

    public function __invoke($value)
    {
        var_dump($value);
    }

    public function __get($name){
        var_dump($name);
        return 'Cool shit!';
    }

    public function __set($name, $value){
        var_dump($name, $value);
    }

    public function __toString()
    {
        return 'Mjäu';
    }

    public function __destruct()
    {
        var_dump('Class was destroyed!');
    }
}

function makeCat(){
    $cat = new cat();
}

makeCat();
$kitty = new Cat();
var_dump($kitty);
var_dump($kitty->mood);
$kitty->color = 'Rainbow';
$kitty->throwShit('Many', 'Smelly', 'poop', 1, 2, 3);
$kitty('Something');
echo $kitty;
$kitty = 1;
var_dump('Something...');