<?php
header("Content-Type: text/plain");
$a = 0;
if ($a == 0) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a > 0) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a < 0) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a <= 0) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a != 0) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a == 'test') {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if ($a === '1') {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";

echo "\n";
$a = null;
if (empty($a)) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if (!empty($a)) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if (isset($a)) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";
if (!isset($a)) {
    echo "верно";
} else {
    echo "не верно";
};
echo "\n";

echo "\n";
$var = true;
if ($var === true) {
    echo 'верно';
} else {
    echo 'не верно';
};
echo "\n";
if ($var !== true) {
    echo 'верно';
} else {
    echo 'не верно';
};
echo "\n";

echo "\n";
$a = 2;
if (($a > 0) and ($a < 5)) {
    echo 'верно';
} else {
    echo 'не верно';
};
echo "\n";
if (($a === 0) or ($a === 2)) {
    echo $a += 7;
} else {
    echo $a /= 10;
};
echo "\n";
$a = 1;
$b = 5;
if (($a <= 1) and ($b >= 3)) {
    echo $a + $b;
} else {
    echo $a - $b;
};
echo "\n";
if ((($a > 2) and ($a < 11)) or (($b >= 6) and ($b < 14))) {
    echo 'верно';
} else {
    echo 'не верно';
};
echo "\n";

echo "\n";
$num = 1;
switch ($num) {
    case 1:
        $result = 'зима';
        break;
    case 2:
        $result = 'весна';
        break;
    case 3:
        $result = 'лето';
        break;
    case 4:
        $result = 'осень';
        break;
};
echo $result, "\n";

echo "\n", 'задача 1', "\n";
$day = 12;
if (($day >= 1) and ($day < 11)) {
    echo 'первая декада';
} elseif (($day >= 11) and ($day < 21)) {
    echo 'вторая декада';
} elseif (($day >= 21) and ($day <= 31)) {
    echo 'третья декада';
} else {
    echo 'каво?';
};
echo "\n";

echo "\n", 'задача 2', "\n";
$month = 1;
if (($month >= 1) and ($month < 3)) {
    echo 'первая';
} elseif (($month >= 3) and ($month < 6)) {
    echo 'вторая';
} elseif (($month >= 6) and ($month < 9)) {
    echo 'третья';
} elseif (($month >= 9) and ($month <= 12)) {
    echo 'четвёртая';
} else {
    echo 'каво?';
};
echo "\n";

echo "\n", 'задача 3', "\n";
$year = 2024;
if (((($year % 4) === 0) and (($year % 100) !== 0)) or (($year % 400) === 0)) {
    echo 'високосный';
} else {
    echo 'не';
};
echo "\n";

echo "\n", 'задача 4', "\n";
$str = 'abcde';
if ($str[0] == 'a') {
    echo 'да';
} else {
    echo 'нет';
};
echo "\n";

echo "\n", 'задача 5', "\n";
$str = '123';
echo($str[0] + $str[1] + $str[2]);
echo "\n";

echo "\n", 'задача 6', "\n";
$str = '123321';
if (($str[0] + $str[1] + $str[2]) === ($str[3] + $str[4] + $str[5])) {
    echo 'верно';
} else {
    echo 'не верно';
};
echo "\n";

echo "\n";
$array = [
    'html',
    'css',
    'php',
    'js',
    'jq',
];
foreach ($array as $value) {
    echo $value, "\n";
};

echo "\n";
$array = [
    1,
    2,
    3,
    4,
    5,
];
$result = 0;
foreach ($array as $value) {
    $result += $value;
};
echo $result;
echo "\n";

echo "\n";
$result = 0;
foreach ($array as $value) {
    $result = $result + $value ** 2;
};
echo $result;
echo "\n";

echo "\n";
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key => $value) {
    echo "$key - $value\n";
};

echo "\n";
$arr = ['Коля'=>'200', 'Вася'=>'300','Егор'=>'7050'];
foreach ($arr as $key => $value) {
    echo "$key - заплата $value долларов\n";
};
echo "\n";

//цикл while
echo "while";
echo "\n";
$i = 1;
while ($i <= 100) {
    echo $i++, "\n";
};
echo "\n";
$i = 11;
while ($i <= 33) {
    echo $i++, "\n";
};
$i = 2;
while ($i < 100) {
    echo $i += 2, "\n";
};
echo "\n";
$i = 1;
$summ = 0;
while ($i <= 100) {
    $summ += $i++;
};
echo $summ;
echo "\n";
$i = 1;
$str = '';
while ($i < 10) {
    $str = $str . "$i";
    $i++;
};
echo $str;
echo "\n";
$i = 9;
$str = '';
while ($i >= 1) {
    $str = $str . "$i";
    $i--;
};
echo $str;
echo "\n";
$i = '1';
$str = '-';
while ($i < 10) {
    $str = $str . ($i . '-');
    $i++;
};
echo $str;
echo "\n";
$i = 'x';
$a = 1;
while ($a <= 20) {
    echo $i, "\n";
    $i = $i . 'x';
    $a++;
};
echo "\n";
$i = 'xx';
$a = 1;
while ($a <= 5) {
    echo $i, "\n";
    $i = $i . 'xx';
    $a++;
};
echo "\n";

echo "\n";
//цикл for
echo "for";
echo "\n";
for ($i = 1; $i <= 100; $i++) {
    echo $i, "\n";
};
echo "\n";
for ($i = 11; $i <= 33; $i++) {
    echo $i, "\n";
};
echo "\n";
for ($i = 2; $i <= 100; $i += 2) {
    echo $i, "\n";
};
echo "\n";
for ($i = 1, $sum = 0; $i <= 100; $i++) {
    $sum += $i;
};
echo $sum;
echo "\n";
for ($i = 1, $str = ''; $i < 10; $i++) {
    $str .= $i;
};
echo $str, "\n";
echo "\n";
for ($i = 9, $str = ''; $i >= 1; $i--) {
    $str .= $i;
};
echo $str, "\n";
echo "\n";
for ($i = 1, $str = '-'; $i < 10; $i++) {
    $str .= $i . "-";
};
echo $str, "\n";
echo "\n";
for ($i = 'x', $a = 1; $a <= 20; $i .= 'x', $a++) {
    echo $i, "\n";
};
echo "\n";
for ($i = 'xx', $a = 1; $a <= 5; $i .= 'xx', $a++) {
    echo $i, "\n";
};
echo "\n";
//доп задачи
echo "доп задачи";
echo "\n";
$array = [2, 5, 9, 15, 0, 4];
foreach ($array as $value) {
    if (($value > 3) and ($value < 10)) {
        echo $value, "\n";
    }
}
echo "\n";
$array = [1, 2, 3, -3, -2, -1];
$summ = 0;
foreach ($array as $value) {
    if ($value > 0) {
        $summ += $value;
    }
}
echo $summ;
echo "\n";
echo "\n";
$array = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($array as $value) {
    if ($value == 4) {
        echo 'есть!';
        break;
    }
}
echo "\n";
echo "\n";
$array = ['10', '20', '30', '50', '235', '3000'];
foreach ($array as $value) {
    if (($value[0] == '1') or ($value[0] == '2') or ($value[0] == '5')) {
        echo $value, "\n";
    }
}
echo "\n";
echo "\n";
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($array as $value) {
    echo '-' . $value;
    if ($value == end($array)){
        echo '-';
    }
}
echo "\n";
echo "\n";
$array = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
foreach ($array as $key => $value) {
    if (($key == 5) or ($key == 6)){
        echo $value . ' жирный', "\n";
    } else {
        echo $value, "\n";
    }
}
echo "\n";
echo "\n";
$day = 2;
foreach ($array as $key => $value) {
    if (($key == $day)){
        echo $value . ' курсивный', "\n";
    } else {
        echo $value, "\n";
    }
}
echo "\n";
echo "\n";
for ($array = [], $i = 1; $i <= 100; $i++) {
    $array[] = $i;
}
var_dump($array);
echo "\n";
echo "\n";
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key => $value) {
    $en[] = $key;
    $ru[] = $value;
}
var_dump($en);
var_dump($ru);
echo "\n";
echo "\n";
$num = 1000;
$i = 0;
while ($num >= 50) {
    $num /= 2;
    $i++;
}
echo $num, "\n";
echo $i . ' операций';
echo "\n";
echo "\n";
for ($i=0, $num = 1000; $num >= 50 ; $i++, $num /= 2) { 

}
echo $num, "\n";
echo $i . ' операций';
echo "\n";
echo "\n";
$array = [1, 2, 3, 4, 5, 6, 7, 8];
$summ = 0;
$i = 0;
foreach ($array as $key => $value) {
   $summ += $value;
   $i++;
   if ($summ == 10) {
        echo $summ, "\n";
        echo $i . ' операции';
   }
}