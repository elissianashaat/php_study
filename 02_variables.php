<?php
/*strings,integers,float,boolean,array,object,null
*/
/*variable rules
- must start with $ sign
-can't start with a number
- can only contain alfa numeric chars&underscores
-case sensitive
*/
$name = 'brad';
echo $name;
$bol = true; 
echo $bol; //1
var_dump($bol); //type and true
//to print many vars same time
echo $name . 'hi' . $bol; //with single quotes
echo "$name hi $bol"; //easier
echo "${name} is ${bol}";
echo '5'+'5'; //10

define('host', 'localhost');
echo host; //localhost


