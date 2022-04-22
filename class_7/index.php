<?php
// array_rand function 
// $name= ["korim","rohim","manik","jabad","sumit"];
// $newAarray = array_rand($name,2);

//  print_r($newAarray)."<br>";

 
//  //array shuffle function

// $colors = ["red","green","blue",];
// echo "<pre>";
// shuffle($colors);
// echo $colors[0];


// $citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
// $new = array_chunk($citylist,4);
// print_r($new);

// $qusestionSet = [
//     ["question" =>"Q1) For preserving key sequences in array_chunk() you have to use", "option"=>[]]
// ]
$languages = array(
    "first_release" => "1991", 
    "latest_release" => "3.8.0", 
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py", 
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);


  
 
$languages = array();
  
$languages['php'] = array(
    "first_release" => "1991", 
    "latest_release" => "3.8.0", 
    "designed_by" => "Guido van Rossum",
    "description" => array(
        "extension" => ".py", 
        "typing_discipline" => "Duck, dynamic, gradual",
        "license" => "Python Software Foundation License"
    )
);
  
foreach ($languages as $key => $value) {
    echo $key ;
    foreach ($value as $sub_key => $sub_val) {
                  
        // If sub_val is an array then again
        // iterate through each element of it
        // else simply print the value of sub_key
        // and sub_val
        if (is_array($sub_val)) {
            echo $sub_key . " : \n";
            foreach ($sub_val as $k => $v) {
                echo "\t" .$k . " = " . $v . "\n";
            }
        } else {
            echo $sub_key . " = " . $sub_val ;
        }
    }
}
  
?>