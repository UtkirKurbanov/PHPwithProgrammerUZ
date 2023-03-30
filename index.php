<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP lessons with programmerUZ</title>
</head>
<body>
    
</body>
</html>

<?php
// phpinfo();
echo 'Hello, ';
print("ProgrammerUZ team!")
?>
<br />

<?= "Salom dasturchilar"?>
<br />
<?php
// O'zgaruvchilar

// $a = "lorem ipsum";
// echo gettype($a);
// $a = 4561;
// echo gettype($a);
// $a = 5.6;
// echo gettype($a);
// $a = "@";
// echo gettype($a);
// $user = "John Wick";
// $USER = "John Doe";
// echo $user;
// print($USER);

// O'zgarmaslar
// O'zgarmasni const orqali ifoda etish
// const PI = 3.14;
// echo PI;
// PI = 1.7;
// defined("") funksiyasi o'zgarmas ilgari e'lon qilingan yo yo'qligini tekshirib beradi, agar 1 ko'rinishdagi natija ekranga chiqsa bu tegani true oldin e'lon qilingan degani aksincha 0 ekranga chiqsa false avval e'lon qilinmagan degani. 

// define("PI", 3.14) funksiyasi orqali o'zgarmasni e'lon qilish

// define("PI", 3.14);
// echo defined("PI"); 
?>

<?php
// Arifmetik amallar +, -, *, /, %, ., ++, --, =, +=, -=, *=, /=, %=, .=

$a = 5;
$b = 12;

// echo $b % $a;
echo $a.$b ."<br>";

// $a++;
// echo $a; //6
// echo $a++; //5
echo $b++ . "<br />";
echo $b . "<br>"; //13 
echo ++$a . "<br>"; //6
// $a += $b;

echo $a . "<br />"; //19


?>

<?php
// String
$STR = "PHP developer";
echo $STR . "<br />";

$str = 'PHP developer';
echo $str ."<br />";

$name = "John Wick";
echo "Hola, $name" ."<br />";
echo 'Hola, $name' ."<br />";
?>

<?php
// String funksiyalari: strlen, strcmp, strpos

echo strlen("programmer.uz")."<br />"; //13

echo strcmp("welcome", "welcome")."<br />"; //satrlar o'zaro teng va ekranga 0 natija chiqadi
echo strcmp("Welcome", "welcome")."<br />";//-1

echo strcmp("welcome to Programmer.uz", "okay")."<br />"; 

echo strpos("programmer.uz", "u");//strpos funksiyasi index qaytaradi,  "u" 11 qatorda

?>


