<?php
/*
we can pass data through urls and forms 
using the $GET & $POST superglobals
*/
if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}
?>
<a href = "<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=30">CLICK</a>

//action = "file we want to submit this form to"
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit">

</form>
//the problem wiith forms get request is everything is displayed in the url
//post request is more secure
//get form used if it's for searching only and not submitting any data
//get used for urls and forms but post is for forms only
