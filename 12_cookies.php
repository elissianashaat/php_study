<?php
/*cookies are a mechanism for storing data in the remote
browser and thus tracking or identifying return users.
you can set specific data to be stored in the browser,
and then retrieve it when the user visits the site again
*/
//cookies store light info like name w kda elhagat elhst5dmha lma eluser ydkhol tany msln esmo 3shan a2olo hello w kda

//set cookie
setcookie("name","elissia", time() + 86400);
//this will set a cookie for one day "86400sec"
//the value "elissia" comes from a form or db

//to get this cookie and use it
if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

//to unset cookie
setcookie('name','',time()-86400);
