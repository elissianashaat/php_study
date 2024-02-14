<?php
/* php has an exception model similar to 
that of other programmin languages. an exception
can be thrown, and caught within php. 
code maybe surrounded in a try block, 
to facilitate the catching of potential 
exceptions. each try must have at least one
corresponding catch or finally block.
*/

function inverse($x){
    if(!$x){
        throw new Exception("division by 0");
    }
    return 1/$x;
}
echo inverse(0); //uncaught exception:division by 0
//to deal w this:

try{
    echo inverse(1); //0.2
    echo inverse(0); //caught exception divison by 0
}
catch(Exception $e){
    echo 'caught exception',$e->getMessage(),'';
}

//so the script doesn't stop and give fatal error, but we can continue executing