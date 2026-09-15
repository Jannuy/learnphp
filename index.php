<?php

public $isOpen = false;
publis $hasBeenOpened = false;

public function __construct (public $width, public $height, public $strength) {

}

public function open() {
    $this->isOpen = true;
}

public function volume() {
    return $this->width * $this->height * $this->length;
}

class MetalBox extends Box {
    public function __construct($width, $height, $strength) {
        parent::__construct($width, $height, $strength);
    }
}

$metal1 = new MetalBox(10, 20, 30);
$metal1 ->weightPerUnit = 5;
var_dump($metal1->mass(), $metal1);