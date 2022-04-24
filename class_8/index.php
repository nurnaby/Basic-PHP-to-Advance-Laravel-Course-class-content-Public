<?php
// user define function
// Buit in string function
// ------------------------
// strlen()
// str_word_count()
// strpos()
// sub_str()
// str_splist()
// str_replsce()
// str_toupper()
// stsr_tolower()
// str_shuffle()
// md5()
// number_formate()
// htmlspecalchars()
// strip_tags()
// trim()

// strpos( ) function
// $string1 = "I love javascript php ,I love laravel and php  ";
// echo  "strpos".strrpos($string1,"php")."<br>";

// $string2 = "I love javascript php ,I love laravel and php  ";

// echo "strpos".strpos($string2,"php")."<br>";

// $string3 = "I love javascript php ,I love laravel and php  ";
// echo "stripos".stripos($string3,"PHP")."<br>";
// // substr function()
// $string4 = "I love javascript php ,I love laravel and php";
// echo "substr".substr($string4,2,9);
// // str_splist()
// $string5 = "I love javascript php ";
// echo "<pre>";
// print_r(str_split($string5))."<br>" ;


// // str replsce;

// $string6 = "I love javascript php ,I love laravel and php";
// echo "str replace".str_replace("javascript","java",$string6)."<br>";

// // strtoupper function
// echo "shuffle".str_shuffle("Hello World")."<br>";
// // html htmlspecialchars
// $str = "This is some <b>bold</b> text."."<br>";
// echo $str;
// echo "htmlspecialchars".htmlspecialchars($str)."<br>";

// // strip tags()
// echo "strip_tage".strip_tags("Hello <b><i>phpworld!</i></b>","<b>");
// // trim function 
// echo "<p> trim function</p>";
// $str = "Hello World!";
// echo $str . "<br>";
// echo trim($str,"Hed!")."<br>";

function getAge($date) { // Y-m-d format
    $now = explode("-", date('Y-m-d'));
    $dob = explode("-", $date);
    $dif = $now[0] - $dob[0];
    if ($dob[1] > $now[1]) { // birthday month has not hit this year
        $dif -= 1;
    }
    elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
        if ($dob[2] > $now[2]) {
            $dif -= 1;
        }
        elseif ($dob[2] == $now[2]) { // Happy Birthday!
            $dif = $dif." Happy Birthday!";
        };
    };
    return $dif;
    
}


 


if(isset($_POST['submit'])){
    $age =$_POST['age'];
   $newAge= getAge($age);
   
    
}


// echo"<h1> your age is:$age </h1>";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="haeding">
                <h2>Check Your BMI</h2>
            </div>
            <div class="section1">
                <span>Enter Date of bath:</span>
                <input type="date" placeholder="Date of batch" name="age">
            </div>

            <div class="section3">
                <input type="submit" name="submit" value="Check BMI">
                <input type="reset" value="clear">
            </div>
            <div class="show">
                <h2>your age is:<?php echo $newAge;?></h2>
            </div>
        </form>
    </div>


</body>

</html>