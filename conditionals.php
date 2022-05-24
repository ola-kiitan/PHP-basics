<?php

$t = date("H");

// if($t < 12){
//  echo "good morning";
// }else{
//  echo "good evening";
// }
echo $t < 12 ? "good morning" : "good evening";
?>