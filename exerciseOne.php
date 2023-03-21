<?php
header("Content-Type: text/plain");
// Это однострочный комментарий
/* Осташев Е.В.
    20.03.2023 */
echo "Hello, world\n";
$teleName = "СТС";
$prodAddres = "Улица пушкина дом колотушкина";
$autoCollor = "Красный";
$waterTemp = "25 градусов";
$phoneModel = "Самсунг";
$three = 3;
$five = 5;
$eight = 8;
echo $three, $five, $eight, "\n";
$a = 10;
$b = 2;
echo $a + $b . "\n";
echo $a - $b . "\n";
echo $a * $b . "\n";
echo $a / $b . "\n";
$c = 15;
$d = 2;
$result = $c + $d;
echo $result . "\n";
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result . "\n";
$result = 2+6+(2/5)-1;
echo $result . "\n";
$text = 'Привет, мир';
echo $text . "\n";
$name = 'Егор';
echo "Привет, $name" . "\n";
$age = 23;
echo 'Мне ' . $age . ' года' . "\n";
$a = 80;
$b = 20;
echo "$b% усилий дают $a% 'результата'" . "\n";
echo $b . ' из ' . $a . 'ти студентов посетили лекцию.' . "\n";
$text = 'abcde';
print_r($text[0]);
print_r($text[2]);
print_r($text[4]);
echo "\n";
$text = str_replace('a','!',$text);
echo $text . "\n";
$num = '12345';
print_r(($num[0]) + ($num[1]) + ($num[2]) + ($num[3]) + ($num[4]));
echo "\n";
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . "\n";
$text = 'Я';
$text .= ' хочу';
$text .= ' знать';
$text .= ' гдэ дэнги?';
echo $text . "\n";
define ("FIRST", 41);
define ("SECOND", 33);
echo FIRST + SECOND . "\n";
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo $arr[0], $arr[1], $arr[2], "\n";
$arr = ['a', 'b', 'c', 'd'];
echo "$arr[0]+$arr[1], $arr[2]+$arr[3]", "\n";
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
$arr = ['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['c'], "\n";
echo $arr['a'] + $arr['b'] + $arr['c'], "\n";
$days = array(
    1 => "понедельник",
    2 => "вторник",
    3 => "среда",
    4 => "четверг",
    5 => "пятница",
    6 => "суббота",
    7 => "воскресенье",
);
echo $days[2], "\n";
$day = 2;
echo $days[$day], "\n";
$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo $arr['cms'][0], ' ', $arr['cms'][2], ' ', $arr['colors']['green'], ' ', $arr['colors']['red'], "\n";
$arr = [
    'ru'=>[1=>'понедельник', 2=>'вторник', 3=>'среда', 4=>'четверг', 5=>'пятница', 6=>'суббота', 7=>'воскресенье',],
    'en'=>[1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday',]
];
echo $arr['ru'][1], ' ', $arr['en'][3], ' ', "\n";
$lang = 'ru';
$day = 3;
echo $arr[$lang][$day];