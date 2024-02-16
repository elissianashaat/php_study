<?php include 'inc/header.php'; ?>
<?php  //getting data from the db
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC); //instead of the below array
//kda ana gebt elitems elkont htahohom fldatabase w hshofhm flfeedback page
?> 
<?php
 $feedback = [
  [
    'id'=> '1',
    'name'=> 'eliss',
    'email'=> 'eli@email.com',
  ],
  [
    'id'=> '2',
    'name'=> 'kimo',
    'email'=> 'kimo@email.com',
  ],
  [
    'id'=> '3',
    'name'=> 'nada',
    'email'=> 'nada@email.com',
  ]
  ];
?>
    <h2>past Feedback</h2>

    <?php if(empty($feedback)): ?>
    <!--this will happen if the condition happened-->
    <p class="lead mt3">there is no feedback</p>
    <?php endif; ?>
    //?kimo
    <?php foreach($feedback as $item): ?>
<!--we want to loop over the card so with each feedbach A card displayed-->
    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <!--to get the field that we want-->
       <?php echo $item['name']; ?>
     </div>
    </div>
    <?php endforeach; ?>
<?php include 'inc/footer.php'; ?>
