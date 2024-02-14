<?php
/*
sessions are a way to store info (in vars) to 
be used across multiple pages.
unlike cookies, session're stored on the server in sessions
*/
//to use session we have to have session started 
session_start();
$name = htmlspecialchars($_POST['username']); //the solutiion
$password = $_POST['password'];
if($username == 'john' && $password == 'password') {
$_SESSION['username'] = $username;
header('location: /php-crash/extras/dashboard.php');
}
else{
    echo 'incorrect login';
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="username">userName: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="submit" name="submit">

</form>

<?php
//so now we login here if our user name matches
//the username'll be put into a session "line 12"
//we'll be directed to the dashboard
//it'll check for the session username and 'll output welcome name
//else will display incorrect login