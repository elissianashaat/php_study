<?php
$numbers = [1,2,3,4];
$fruits = array('apple', 'orange', 'pear');
//print_r($numbers);
//var_dump($numbers);
//echo $fruits[1];

//associative array
$color =[
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];

//echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue' => '#ofo',
    'green' => '#00f'
];

//echo $hex['blue'];

$person = [
    'first_name' => 'brad',
    'last_name' => 'travs',
    'email' => 'brad@gmail'
];
//echo $person['firstname'];

//multidimentional arrays
$people = [
[   'first_name' => 'brad',
    'last_name' => 'travs',
    'email' => 'brad@gmail'
],
[
    'first_name' => 'brad',
    'last_name' => 'travs',
    'email' => 'brad@gmail'
],
[
    'first_name' => 'brad',
    'last_name' => 'travs',
    'email' => 'brad@gmail'
]
];

//echo $people[1]['email'];
//can use this to work with json
var_dump(json_encode($people));

?>
