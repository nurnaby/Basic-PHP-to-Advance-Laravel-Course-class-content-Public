<?php

// count function 
$product =["orange","bananna","mango"];

$number=[1,3,4,5,];


$newArray1 = count($number);
echo $newArray1."<br>";



// max function 
$price = [330,220,20,29,80,20];

$newArray = max($price);
echo $newArray."<br>";
$newArray = min($price);
echo "min number ". $newArray."<br>";

// in array function 
$price = [330,220,20,29,80,20];
 $newArray = in_array(29,$price);

if($newArray){
    echo "Number fine "."<br>";
}else{
    echo "Number not now". "<br>";
}

$product =["orange","bananna","mango"];
$new_array = array_search("mango",$product);

if($new_array) {
    echo "product ase "."<br>";
}else{
    echo "product nai";
}

// array_pop function

$product =["orange","bananna","mango"];

$new_array = array_pop ($product);

print_r($product); 

$a= [1,5,8,3,];
$b = [5,33,8,];
$newArray =array_merge($a,$b);
echo "<pre>";
print_r($newArray);

// arrey_slice 
$a= [1,5,8,3,];
echo "<pre>";
print_r (array_slice($a,2,2));

// array_splice() 
$a= [1,5,8,3,];
echo "<pre>";
print_r (array_splice($a,2,1));

// array_deff( ) 
$a= [1,5,8,3,];
$b = [5,33,8,];

echo "<pre>";
print_r (array_diff($a,$b));

// array_sum() 

$a= [1,5,8,3,];

$new_array = array_sum($a);
echo $new_array;


// array_uniqe 

$a= [1,5,8,3,1];
$new_array = array_unique($a);

print_r($new_array) 
















?>