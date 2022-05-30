<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
<?php
if(isset($_POST["submit"])){
echo $_POST["name"];
echo $_POST["age"];
}

?>
<form action="<?php echo $_SERVER["PHP_SELF"];  ?>" method="POST">
<div>
 <label for="name">Name</label>
 <input type="text" name="name">
</div>

<div>
 <label for="name">Age</label>
 <input type="text" name="age">
</div>
<input type="submit" value="submit" name="submit">
</form>

</body>
</html>


