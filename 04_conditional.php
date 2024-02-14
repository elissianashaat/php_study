<?php
$age = 20;
if($age >= 18){
    //echo 'gamed';
}
else{
  //  echo ' underage';
}
/*
$t = date("F");
echo $t; //month name
$h = date("H");
if($h < 12){
    echo 'good morning';
}
elseif($h<17){
    echo 'good after noon';
}
else{
    echo 'good night';
}
*/
//$posts = ['first post'];
/*
if(!empty($posts)){
    echo $posts[0];
}
else{
    echo 'No Posts';
}
*/
///simplier syntax
//echo !empty($posts) ? $posts[0] : 'no posts';

//switch case:
$favcolor = 'red';
switch($favcolor){
    case 'red':
        echo 'your favorite color is red';
        break;
    case 'blue':
        echo 'your favorite color is blue';
        break;
    case 'green':
        echo 'green';
        break;
    default:
    echo 'black';
}
