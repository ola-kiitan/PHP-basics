<?php
// for loop
// for($x = 0; $x <= 10, $x++){
//  echo $x
// }
//while loop
// $x = 1
// while($x< 15){
//  echo $x
//  $x++
// }

//forEach
$people = [
 [
  "first_name" => "Ola",
  "last_name" => "oginni",
 ],
  [
  "first_name" => "fola",
  "last_name" => "boginni",
 ],
  [
  "first_name" => "sOla",
  "last_name" => "toginni",
 ],
];
foreach($people as $person){
 echo $person["first_name"] ;
};

?>