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

// echo strlen("programmer.uz")."<br />"; //13

// echo strcmp("welcome", "welcome")."<br />"; //satrlar o'zaro teng va ekranga 0 natija chiqadi
// echo strcmp("Welcome", "welcome")."<br />";//-1

// echo strcmp("welcome to Programmer.uz", "okay")."<br />"; 

// echo strpos("programmer.uz", "u");//strpos funksiyasi index qaytaradi,  "u" 11 qatorda

?>

<?php
// strtolower, strtoupper
echo strtolower("PHP DEVELOPERS")."<br />";
echo strtoupper("php dev tools")."<br />";
echo strtoupper("<p style='text-transform:lowercase'>ProgramMER.UZ</p>"); //tushincha: bu misolda strtoupper funksiyasi orqali katta harflarda qiymatni chiqarishni so'radik lekin style orqali lowercase browserda ekranga chiqmoqda, sababi strtoupper orqali php serverda qiymatni katta harflarda o'zgartirdi css browser bilan ishlaganligi bois ekranda lowercase'li qiymat chiqmoqda 

?>

<?php
// trim, explode, implode
echo trim("         PHP developers  ")."<br />"; //trim orqali old va orqadan probellar tozalanmoqda
echo trim("JavaScript", "Script")."<br />";

$a = "B3124569W"; 
echo trim("B3124569", "BW")."<br />";

print_r (explode(" ", "Welcome to our team"));//array elementlarini print_r orqali ekranga chiqaramiz

$key = "Lorem ipsum, dolor, sit, furla, min, quie de la";
print_r (explode(",", $key));


$company = array("Apple", "Tesla", "Microsoft", "HP", "LG");
print_r ($company);
echo implode(" ", $company);

?>

<?php
//mathimatical functions: abs, ceil, floor, pow, min, max, rand, sin, cos, tan, log, log10
echo abs(-5)."<br />"; //absolyut qiymat 
echo ceil(1.3)."<br />";//kelayotgan qiymatga eng yaqin katta bututn sonni ekranga chiqaradi
echo ceil(-7.9)."<br />"; //eng yaqin katta butun son
echo floor(5.8)."<br />"; //eng yaqin kichik butun son
echo pow(5, 3)."<br />"; //5 ning 3 darajasi yoki kubi = 125 
echo sqrt(81)."<br />"; //kvadrat ildiz
echo min(14, 21, 11, -3, -10)."<br />";// kelayotgan sonlardan eng kichigini ekranga chiqaradi
echo max(14, 21, 11, -3, -10)."<br />"; //eng katta son
echo rand(0, 10)."<br />"; //istalgan son 0 dan 10 gacha
echo round(3.14)."<br />"; //yaxlitlash
echo round(9.8)."<br />"; //yaxlitlash
echo round(9.81115, 3)."<br />"; //yaxlitlash
echo log(243, 3)."<br />"; //5
echo log10(1000000)."<br />";
?>

<?php
//Matematik o'zgarmaslar
echo M_PI ."<br />";
echo round(M_PI, 2)."<br />";

echo M_E ."<br />";
echo round(M_E, 2)."<br />";

echo M_LN2;
?>