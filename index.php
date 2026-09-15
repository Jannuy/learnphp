<?php

public $isOpen = false;
protected $hasBeenOpened = false;

class Box {
    use Hasmell;
    public bool $isOpen = false;
    public bool $hasBeenOpened = false;
}

public function __construct (private int $width, private $height, private $strength) {

}

public function open() {
    $this->isOpen = true;
}

public function setWidth(int $width) {
    if ($width < 0) {
        $this->width = 0;
    }
    $this->width = $width;
}

public function getWidth() {
    return $this->width;
}

public function volume() {
    return $this->width * $this->height * $this->length;
}

class MetalBox extends Box {
    use HasColor;
    public function __construct($width, $height, $strength) {
        parent::__construct($width, $height, $strength);
    }
}

trait HasColor {
    public $color;
    public function showColor() {
        return $this->color;
    }
}

trait HaSmell {
    public $smell;
    public function sniff() {
        return $this->smell;
    }
}

$metal1 = new MetalBox(10, 20, 30);
$metal1 ->weightPerUnit = 5;
var_dump($metal1->mass(), $metal1);
$metal1 ->isOpen = 'asad';
var_dump($metal1->isOpen);
$metal1->test1();
$metal1->test2();
var_dump($test1)