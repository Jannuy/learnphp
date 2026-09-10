<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpened = false;


    public function open() {
    $this->isOpen = true;
    }
}

$num1 = 1;
$num2 = $num1;
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1 ->width = 1;
$box2 = $box1;
$box1->width = 2;
var_dump($box1->width, $box2->width);

$numbers  = [1, 2, 3];
for ($i = 0; $i < count($numbers); $i++) {
    $numbers[$i] = $numbers[$i] * 2;
}

foreach ($numbers as $n) {
    $n = $n * 2;
}
var_dump($numbers);