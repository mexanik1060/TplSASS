<?php
include_once ('index.php');
###########################################
#                                         #
#                                         #
###########################################
echo __FILE__ . "<br />";
echo PHP_OS . "<br />";
echo PHP_VERSION . "<br />";
echo PHP_VERSION_ID . "<br />";
/*******************************
-- Уроки
-- Переменные 
-- @category мівівміві
-- @package  авмавмвм
-- @author   сівсісісівс
-- @license  сівсівсісівс
-- @link     в файле комментария 
********************************/
#Создаем переменную
$a_var = 50;
$b_var = "string";
$c_var = 5.25;
$d_var = -10;
$t_bool = true;
$f_bool = false;
$ac_var = $a_var / $c_var;
$string = "Строковая Переменная существует";
$link = "http://lesson/peremennie.php";
define  ('LINK', $link);

if(!isset($ac_var)){
  echo $f_bool . "Переменная не существует";

}elseif (LINK) {
  echo 'Переменная $t_bool =' . $t_bool . 'Константа ссылка - ' . LINK  . ' строковая переменная $string -' . $string;
  echo "<br />";
} else {
  echo "переменная - ссылка и переменная '$ac_var' существует.";
}

echo "<br />";
echo is_numeric($a_var) . '-' . "Проверка переменной на число <br />";


$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " - число", PHP_EOL;
    } else {
        echo var_export($element, true) . " - НЕ число", PHP_EOL;
    }
}