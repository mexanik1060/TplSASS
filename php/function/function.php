<?php
/**
*-- Уроки
*-- class
*-- @category мівівміві
*-- @package  авмавмвм
*-- @author   сівсісісівс
*-- @license  сівсівсісівс
*-- @link     в файле комментария 
**/
include_once ('index.php');

echo __FILE__ . "<br />";
echo PHP_OS . "<br />";
echo PHP_VERSION . "<br />";
echo PHP_VERSION_ID . "<br />";
echo "<hr>";


$x = 5;

function MuFunc($x)
{
  $x++;
}

function FuncGlobal()
{  //Глобальная переменная
  global $x;
  //global $i;
  for ($i = 0; $i <= 20; $i++);
  global $i;
  $x++;
}
MuFunc(10);
echo $x;
echo "<br />";
FuncGlobal();
echo $x;
echo "<br />";
echo $i;
echo "<br />";

function FunctionGLOBALS()
{  //Глобальный массив
  $GLOBALS ['x'];
}
$a = 15;
$b = 25;
$c = 'string';

foreach ($GLOBALS as $key => $value)
{
  //Находит, is_array является ли переменная массивом
  if (is_array($value)) continue;//посчитать массив
    echo "$key => $value; <br />";
}

echo "<br />";
echo "<hr>";
//Статические переменніе

function getCount()
{
  static $count = 0; //объявляем статическую переменную
  $count ++; // Увеличиваем на еденицу
  return $count; //Вазвращаем переменную
}

echo getCount() . "<br />";
echo getCount() . "<br />";
echo getCount() . "<br />";
echo getCount() . "<br />";
echo getCount() . "<br />";

echo "<br />";
echo "<hr>";
echo "Домашняя работа";
echo "<br />";
/*Создайте две числовые переменные.
Напишите функцию, которая будет брать две переменные из 1-го пункта и выводить их сумму.
Вызовите эту функцию.*/

$chislo_1 = 22;
$chislo_2 = 32;

function FunctionChislo()
{
 
  global $chislo_1;
  global $chislo_2;
  $summ = $chislo_1 +  $chislo_2;
  echo $summ; 

}
echo "<br />";
FunctionChislo();
echo "<hr>";
function getSum($x, $y)
{
    return $x + $y;
}

$x = 3;
$y = 5;

echo getSum($x, $y);
echo "<hr>";
function getSumm($n, $m)
{
  return $n + $m;
}

$a = 5;
$b = 10;

echo getSumm($a, $b) . '<br>';
echo getSumm(-3, 4);


?>