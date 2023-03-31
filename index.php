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
//Array
$car = array(2, "Opel", 4, "BMW", "#");
print_r($car);

$subject = ['var', 'oop', 'dynamic', 'java', 'math'];
print_r($subject);

$car[0] = "Kia";
$car[2] = "Nissan";
$car[4] = "Porsche";
$car[] = "Tayota";
print_r($car);

// echo $car[1];
// echo $subject[2];

echo count($car);
?>
<?php
//pop, push, shift, unshift

$letter = array('q', 'w', 'e', 'r', 't');
print_r($letter);
// array_pop($letter);
// print_r($letter);//t deleted

// array_push($letter, 'y');
// print_r($letter);

// array_shift($letter);
// print_r($letter);

// array_unshift($letter, 'z');
// print_r($letter);

// $letter = array('q'=>"Quebec City", 'w'=>"Washington", 'e'=>"Edinburgh", 'r'=>"Rome", 't'=>"Tijuana");
// print_r($letter);
// echo $letter['t']."<br/>";

// $user = [
//     "name" => "John",
//     "surname" => "Doe",
//     "age" => 23
// ];

// echo $user["name"];


//Izohlash va tartiblash
//in_array, array_search, array_reverse, sort, rsort, shuffle

$colors =array('b'=>"black", 'r'=>"red", 'y'=>"yellow", 'g'=>"green", 'w'=>"white");

// if (in_array('pink', $colors)){
//     echo "Found";
// } else {
//     echo "Not found";
// }

// echo array_search("yellow", $colors);

array_reverse($colors);
print_r($colors);

print_r(array_reverse($colors));

sort($colors); //Alfabet harflari bo'yicha ekranga chiqarib beradi
print_r($colors);

rsort($colors);
print_r($colors);

shuffle($colors);//rendom ko'rinishida tartiblab ekranga chiqaradi
print_r($colors);

// array_fill, array_merge, array_intersect, array_diff, array_slice, range

$number = array_fill(0, 5, "p");// sharh: 0'linchi indexdan boshlab 5 ta element hosil qilinsin va u/= barcha qiymnati p'ga teng bo'lsin
print_r($number);

$color1 = ["red", "green", "blue"];
$color2 = ["white", "black", "yellow"];

$colors = array_merge($color1, $color2);// massivlar birlashtirildi
print_r($colors);

$cars1 = ["Kia", "Reno", "Nissan"];
$cars2 = ["BMW", "Tayota", "Chevrolet", "Reno", "Nissan"];
$newCars = array_intersect($cars1, $cars2);// ikkita massiv kesishmasidagi ikkalasida ham bor bo'lgan bir hil moshinalar ekranga uzatilmoqda 
print_r($newCars);

$newCars = array_diff($cars1, $cars2); //Kia 2 massivda mavjud emas
print_r($newCars);

$newCars = array_diff($cars2, $cars1); //BMW, Tayota, Chevrolet 1 massivda mavjud emas
print_r($newCars);

$name = ["Nick", "John", "Emma", "Trinity"];
print_r(array_slice($name, 2));//0 va 1 index'lardagi Nick va John qiymatlari olib tashlanmoqda 2 va 3 index'lardagi Emma va Trinity qiymatlari ekranga uzatiladi

$number = range(0, 10);// 0'dan 10'gacha bo'lgan sonlar 1 oshib borish bilan ekranga chiqaradi
print_r($number);

$num = range(10, 35, 5); // 10'dan 35'gacha bo'lgan sonlar 5 oshib borish bilan ekranga chiqariladi
print_r($num);

$letters = range('a', 'o');
print_r($letters);

?>