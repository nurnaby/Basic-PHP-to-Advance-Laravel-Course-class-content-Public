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
echo  strrpos($string1,"php")."<br>";

$string2 = "I love javascript php ,I love laravel and php  ";

echo strpos($string2,"php")."<br>";

$string3 = "I love javascript php ,I love laravel and php  ";
echo stripos($string3,"PHP")."<br>";
// substr function()
$string4 = "I love javascript php ,I love laravel and php";
echo substr($string4,2,9);
// str_splist()
$string5 = "I love javascript php ";
echo "<pre>";
print_r(str_split($string5))."<br>" ;


// str replsce;

$string6 = "I love javascript php ,I love laravel and php";
echo str_replace("javascript","java",$string6)."<br>";

// strtoupper function
echo str_shuffle("Hello World")."<br>";
// html htmlspecialchars
$str = "This is some <b>bold</b> text."."<br>";
echo $str;
echo htmlspecialchars($str);

// strip tags()
echo strip_tags("Hello <b><i>phpworld!</i></b>","<b>");
// trim function 
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");



?>