<?php 
/*
for loop syntax:
    for(initialize; condition; increment){
        //code to be executed
    }

*/
for($x = 0; $x <= 10; $x++){
    echo 'Number' . $x . '<br>';
}

/*while (condition){
    //code to be executed
}
*/

$x = 1;
while($x <= 15){
    echo 'number' .$x. '<br>';
    $x++;
}

/* for each:
    foreach($array as $value){
        //code to be executed
    }
*/
$posts = ['first post', 'second post', '3rd post'];
//count gets length of the array
/*
for($x = 0; $x < count($posts); $x++){
    echo $posts[$x];
}
*/
foreach($posts as $post){
    echo $post;
}

$person = [
    'firstname' => 'brad',
    'lastname' => 'travs',
    'email' => 'brad@gmail',
];
foreach($person as $key => $value){
    echo "$key - $value <br>";
}