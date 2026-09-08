<?php

for($i = 0; $i < 10; $i++) {
    var_dump($i);
}

for($i = 9; $i >= 0; $i--) {
    var_dump($i);
}

for ($i = 2; $i <1_000_000; $i**=2) {
    var_dump($i);
}

$time = time();
$i = 0;
while (time() - $time < 1) {
    $i++;
}
var_dump($i);

while (false) {
    var_dump('This will never be printed');
}

do {
    var_dump('DO');
} while (false);

$array = ['Apple', 'Banana', 'Cherry'];
foreach ($fruits as $fruit) {
    var_dump($fruit);
}

foreach ($fruits as $key => $fruit){
    var_dump($key,$fruit);
    $fruit = 'asdas';
}
var_dump($fruits);
