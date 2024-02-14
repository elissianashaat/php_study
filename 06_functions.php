<?php
/*
$y = 12;
function registerUser($email){ //argument
    global $y;
    echo 'User registration';
}
registerUser('elissia'); //parameter
*/
function sum($n1, $n2){
    return $n1 + $n2;
}
$res = sum(5, 5);
echo $res;

//arrow function
$mult = fn($n1,$n2) => $n1 * $n2;
echo $mult(9,9);