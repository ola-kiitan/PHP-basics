<?php
if(isset($_POST["submit"])){
 $allowed_ext = array("png", "gif", "jpg");
 if(!empty($_FILES["upload"]["name"])){
$name = $_FILES["upload"]["name"];
$size = $_FILES["upload"]["size"];
$tmp = $_FILES["upload"]["tmp_name"];
$target_dir = "uploads/${name}";

// get file ext
$file_ext = explode(".", $name);
$file_ext = strtolower(end($file_ext));
//validate file ext
if(in_array($file_ext, $allowed_ext)){
 move_uploaded_file($tmp,$target_dir);
  echo "file uploaded";
}
 }else{
  echo "please uplaod a file";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST" enctype="multipart/form-data">
<input type="file" name="upload">

<input type="submit" name="submit">
</form>
</body>
</html>