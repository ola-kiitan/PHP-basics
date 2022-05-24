<?php
$conn = mysqli_connect("localhost", "root", "", "php");
if(!$conn){
 echo "connection failed" . mysqli_error($conn);
}else{
 echo "";
}
?>