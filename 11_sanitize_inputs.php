<?php
if(isset($_POST['submit'])){
//echo $_POST['name']; 
/*if i entered any html here it's gonna be executed,
doing the action for example if 
<script> alert(1) </script>
that will perform an alert
because of the echo and that's not good
to solve this.. 
*/
$name = htmlspecialchars($_POST['name']); //the solutiion
$age = htmlspecialchars($_POST['age']);
/*
if we put alert here this will print alert as a text */
//another solution
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
echo ''.$name.''.$age.''.$email.'';
//function gets an external variable (e.g. from form input) and optionally filters it.
}
?>
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