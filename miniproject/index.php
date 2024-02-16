<?php include 'inc/header.php'; ?>
<?php 
$name = $email = '';
$nameErr = $emailErr = '';
//form submit
if(isset($_POST['submit'])){
  //Validate name
  if(empty($_POST['name'])){
    $nameErr = 'name is required';
  } else {
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
  } //will do the same thing for email

  if(empty($nameErr) && empty($emailErr)){
    //add to db
    $sql = "INSERT INTO feedback (name,email) VALUES('$name', '$email')";
    if(mysqli_query($conn, $sql)){
      //success if true
      header('Location: feedback.php');
  } else {
    echo 'error: ' .mysqli_error($conn);
  }
}
}
//echo $nameErr; //will occur if i clicked submit and the name space was empty
//echo $name; //will displayy the name that i entered
//but we want it to be more creative so we'll go to the input tag
?>
<img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER('PHP_SELF'))?>" method="post" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr? 'is-invalid' : null //do same for email ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>
<?php include 'inc/footer.php'; ?>