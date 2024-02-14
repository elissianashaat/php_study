<?php

/* file handling:
ability to read and write files on server
php has built in functions for reading and writing files
*/

$file = 'extras/users.txt';
/*if file exist read it's contents and display them and close it
else write on it
*/
if(file_exists($file)) {
    echo readfile($file);
    $handle = fopen($file,'r');
    $contents = fread($handle , filesize($file));   
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file,'w'); //we use w to write and r to read
    $contents = 'brad' .PHP_EOL . 'SARA' .  PHP_EOL .'mike';
    fwrite($handle, $contents);
}
