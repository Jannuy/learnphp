<?php
$num = 10;
if(num > 10) {
    var_dump("bigger")
}

if(num > 10) {
    var_dump("Bigger")
} else {
    var_dump("Equal or Smaller")
}

if (num > 10) {
    var_dump("Bigger")
} elseif (num < 10) {
    var_dump("Smaller")
} else {
    var_dump("Equal or Smaller")
}

$day = (int)(date("W"));
$day = intval(date("W"));
var_dump($day);
if($day == 0) {
    var_dump("Sunday");
} elseif($day == 1) {
    var_dump("Monday");
} elseif($day == 2) {
    var_dump("Tuesday");
} elseif($day == 3) {
    var_dump("Wednesday");
} elseif($day == 4) {
    var_dump("Thursday");
} elseif($day == 5) {
    var_dump("Friday");
} elseif($day == 6) {
    var_dump("Saturday");
} else {
    var_dump("Weirdday");
}

switch($day) {
    case 0:
        var_dump("Sunday");
        break;
    case 1:
        var_dump("Monday");
        break;
    case 2:
        var_dump("Tuesday");
        break;
    case 3:
        var_dump("Wednesday");
        break;
    case 4:
        var_dump("Thursday");
        break;
    case 5:
        var_dump("Friday");
        break;
    case 6:
        var_dump("Saturday");
        break;
    default:
        var_dump("Weirdday");
}