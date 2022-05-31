<?php include "inc/header.php" ?>
<?php
if(isset($_POST["submit"])){
$name = $text = $email = "";
if(empty($_POST["name"])){
  $nameErr = "name is required";
}else{
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
}
if(empty($_POST["text"])){
 $textErr = "text is required";
}else{
  $text = filter_input(INPUT_POST, "text", FILTER_SANITIZE_FULL_SPECIAL_CHARS );
}
if(empty($_POST["email"])){
  $emailErr= "email is required";
}else{
  $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL );
}
if(empty($emailErr) && empty($nameErr) && empty($textErr) ){
  $sql = "INSERT INTO Feedback (Name, Email, Text) VALUES('$name', '$email', '$text')";
}
if(mysqli_query($conn, $sql)){
  //success
  header("Location: feedback.php");
}else{
  echo "Error: " . mysqli_error($conn);
}
}



?>
    <img src="/php-masterclass/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="text" class="form-label">Feedback</label>
        <textarea class="form-control" id="text" name="text" placeholder="Enter your feedback"></textarea>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

<?php include "inc/footer.php" ?>