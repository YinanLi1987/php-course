<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
/*$fruits=['apple','banana','orange'];
//get length of array
//echo count($fruits);
//search array
//var_dump(in_array('red',$fruits));
//add to array
$fruits[]='grape';

array_push($fruits,'strawberry','blueberry');
array_unshift($fruits,'mango');

// remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);
$chunked_array=array_chunk($fruits,2);
print_r($chunked_array);*/

$arr1=[1,2,2];
$arr2=[4,1,8];

$arr3=array_merge($arr1,$arr2);
$arr4=[...$arr1];

//print_r($arr4);

$a=['green','red','blue'];
$b=['apple','strawberry','sky'];
$c=array_combine($a,$b);

$keys =array_keys($c);
$flipped=array_flip($c);
$numbers=range(1,20);
$newNumbers=array_map(function($number){
    return "Number $number";
},$numbers);
$lessThan10=array_filter($numbers,fn($number)=>$number<=10);
$sum=array_reduce($numbers,fn($carry,$number)=>$carry+$number);
print_r($sum);
