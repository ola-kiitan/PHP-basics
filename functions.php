<?php
// function addition($n1,$n2){
//  return $n1 +$n2;
// }
// echo addition(5,5);

// $addition = fn($n1,$n2) => $n1 +$n2;
// echo $addition(5,3)

// array functions
// $fruits = ["apple", "banana", "orange"];

//length
// echo count($fruits);

//inarray- to check if a value is an array
 // var_dump(in_array("mango", $fruits))

 // add to an array
 // array_push($fruits, "kiwi");

// remove from an array
  // array_shift($fruits);

  // concatenate arrays with merge or spread operators
  // use combine to use the first array as key and other as value
// $arr1 = [1,2,3,4];
// $arr2 = [6,7,8,9];
// $arr_merge = array_merge($arr1, $arr2)

// using array map
$numbers = range(1,20);

// $newNumbers = array_map(function($number){
//  return "Number ${number}";
// }, $numbers);


//using filter
  $lessNumbers = array_filter($numbers,function($number){
 return $number < 10;
});
 print_r($lessNumbers);
?>