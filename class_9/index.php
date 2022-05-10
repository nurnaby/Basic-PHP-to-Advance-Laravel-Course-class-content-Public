<?php
// isset function
$name=4;

if(isset($name)){
    echo "yes variable value alrady set"."<br>";
}else{
    echo "variable value not set"."<br>";
}
// empty function
$name="";
if(empty($name)){
    echo "valriable value is empty";
}else{
    echo "variable value is not empty";


}

// empty/flag varialble
$list = "";

$list .="<li> list number 1</li>";
$list .="<li> list number 2</li>";
$list .="<li> list number 3</li>";
$list .="<li> list number 4</li>";
echo $list;




$email=$_post['email'];
$pas=$_post['pas'];
$namae=$_post['namae'];





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="one">
        <h1>class 9</h1>
    </div>


</body>

</html>