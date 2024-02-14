<?php

$fruits = ['apple', 'orange', 'pear'];
//get length
///echo count($fruits);
//search array
///var_dump(in_array('apple', $fruits)); //bool
//add to array
$fruits[] = 'grape'; //will add it to new index
///print_r($fruits);

///array_push($fruits, 'blueberry'); //add to end
///array_unshift($fruits, 'mango'); //add to begin

//remove from array
/*
array_pop($fruits);
print_r($fruits); //remove the last element
array_shift($fruits); //remove from beginning
unset($fruits[2]); //specific index
*/
//split into 2 chuncks
$chunked_array = array_chunk($fruits, 2);
print_r($chunked_array); //asemhom l etnenat


//concatenate arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];
print_r($arr3);
print_r($arr4);

//array 1 keys .. array 2 values
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
print_r($c);
/*
green: "avocado,
red: "apple",
yellow: "banana"
*/
$keys = array_keys($c);
print_r($keys);
/*
0: "green",
1: "red",
2: "yellow"
*/
$flipped = array_flip($c);
print_r($flipped);
/*
avocado: "green",
apple: "red",
banana: "yellow"
*/

$numbers = range(1, 20);
print_r($numbers);
/*
0:1
1:2..
*/
//array map
$newNumbers = array_map(function($number){
    return "Number ${number}";
}, $numbers);
print_r($newNumbers);
/*
0 : "number 1",
1: "number 2", ..
*/
//filter array

$lessThan10 = array_filter($numbers, fn($number) => $number <= 10);
print_r($lessThan10);

//sum of array values
$sum = array_reduce($numbers, fn($carry, $number) =>
$carry + $number);
var_dump($sum);



