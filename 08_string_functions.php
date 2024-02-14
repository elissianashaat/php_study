<?php

$string = 'hello world';
//length of string
echo strlen($string);
//find position of first occurence of a substring in a string
echo strpos($string, 'o');
//find position of first occurence of a substring in a string
echo strrpos($string, 'o');
//reverse a string
echo strrev($string);
//convert all chars to lower case
echo strtolower($string);
//convert all chars to upper case
echo strtoupper($string);
//uppercase the first characted of each word
echo ucwords($string);
//string replace 
echo str_replace('world', 'everyone', $string);
//return portion of a string specified by the offset and length
echo substr($string, 0, 5); //hello from first to 5
echo substr($string, 5); //world: from 5 to end

//start with
if(str_starts_with($string, 'hello')){
    echo 'YES';
}
//if string starts with hello it gives yes

//end with
if(str_ends_with($string, 'ld')){
    echo 'YES';
}

$string2 = '<h1>Hello</h1>'; //if used alone may causes lack in security as anyone can use it
echo htmlspecialchars($string2); //this prevents that

printf('%s likes to %s', 'brad', 'code'); //brad likes to code
printf('1+1=%d', 1+1); //1+1=2