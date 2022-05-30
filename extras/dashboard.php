<?php
session_start();
if(isset($_SESSION["username"])){
echo $_SESSION["username"];
echo "<a href='logout.php'>Log-out</a>";
}else{
 echo "welcome guest";
}


?>