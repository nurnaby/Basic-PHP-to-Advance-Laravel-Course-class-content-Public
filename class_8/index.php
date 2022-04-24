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
$string1 = "I love javascript php ,I love laravel and php  ";
echo  "strpos".strrpos($string1,"php")."<br>";

$string2 = "I love javascript php ,I love laravel and php  ";

echo "strpos".strpos($string2,"php")."<br>";

$string3 = "I love javascript php ,I love laravel and php  ";
echo "stripos".stripos($string3,"PHP")."<br>";
// substr function()
$string4 = "I love javascript php ,I love laravel and php";
echo "substr".substr($string4,2,9);
// str_splist()
$string5 = "I love javascript php ";
echo "<pre>";
print_r(str_split($string5))."<br>" ;


// str replsce;

$string6 = "I love javascript php ,I love laravel and php";
echo "str replace".str_replace("javascript","java",$string6)."<br>";

// strtoupper function
echo "shuffle".str_shuffle("Hello World")."<br>";
// html htmlspecialchars
$str = "This is some <b>bold</b> text."."<br>";
echo $str;
echo "htmlspecialchars".htmlspecialchars($str)."<br>";

// strip tags()
echo "strip_tage".strip_tags("Hello <b><i>phpworld!</i></b>","<b>");
// trim function 
echo "<p> trim function</p>";
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!")."<br>";

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


$age= getAge('1988-10-10');


echo"<h1> your age is:$age </h1>";



?>