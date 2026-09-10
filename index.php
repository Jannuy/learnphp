<?php

function hello(): void {
    var_dump("Hello, World!");
}

hello();

function helloName($name="Nameless") {
    var_dump("Hello, " . $name . "!");
}

helloName("Alice, 66");
helloName();

function square(int $a): int {
    if ($a < 0) {
        return null;
    } else {
        return $a * $a;
    }
}

$answer = square(5);
var_dump($answer);
var_dump(square(10));

function recursion($i) {
    if ($i < 0) {
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);