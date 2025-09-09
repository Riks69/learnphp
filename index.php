<?php

class Box {
    public $width;
    public $heigth;
    public $length;  

    public function __construct($w, $h, $l);
    {
        $this->width = $w;
        $this->heigth = $h;
        $this->length = $l;
    }

    public function volume(){
        return $this->width * $this->heigth * $this->length;
    }
}

$box1 = new Box();
$box1->width = 10;
$box2 = $box1;
$box2->width = 20;
var_dump($box1->width);
var_dump($box1, $box2);
