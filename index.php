<?php

class  box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public  $hasBeenOpened = false;

    public function __construct($w, $h, $l) {
        $this -> isOpen = true;
    }

    public function __toString() {
        return 'im a box and im open';
    }

    public function __destruct() {
        var_dump('box is being destroyed');
    }

}

function test() {
    $box2 = new box(10, 20, 30);
}
test();

$box1 = new box(10, 20, 30);
$box1 = 10;
var_dump($box1);
echo $box1;
$box1->new = 'lol';
