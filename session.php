<?php
session_start();
if(isset($_POST["submit"])){
// $name= htmlspecialchars($_POST["name"]) ;
// $age= htmlspecialchars($_POST["age"]) ;
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS );
$password = $_POST["password"];
if($username== "ola" && $password== "password"){
 $_SESSION["username"]= $username;
 header('Location: /php-masterclass/extras/dashboard.php');
}else{
 echo "INVALID LOGIN";
}
}

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
<div>
 <label for="username">Name</label>
 <input type="text" name="username">
</div>

<div>
 <label for="password">password</label>
 <input type="password" name="password">
</div>
<input type="submit" value="submit" name="submit">
</form>