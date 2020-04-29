<?php

include_once 'index.php';
//##########################################
//                                         #
//                                         #
//##########################################
echo __FILE__ . '<br />';
echo PHP_OS . '<br />';
echo PHP_VERSION . '<br />';
echo PHP_VERSION_ID . '<br />';
echo '<hr>';
/*******************************
-- Уроки
-- Переменные
-- @category мівівміві
-- @package  авмавмвм
-- @author   сівсісісівс
-- @license  сівсівсісівс
-- @link     в файле комментария
 ********************************/

$array = array(1, 10, 2.5, 'string', true, -76.6);

$arr = ['строка' => '123456', 'число' => 25.5, 'Имя' => 'Alexandr', 'Будевская переменная' => true];
//Запись после версии PHP 5.4

for (
  $i = 0;
  $i < count($array);
  ++$i
) {
  echo $array[$i] . '<br />';
}
echo '<br />';

//Двумерній ассоциативній массив
$arr =
  [
    [
      'Логин' => 'admin',
      'Пароль' => 'qwerty',
      'Возраст' => 22,
    ],
    [
      'Логин' => 'user',
      'Пароль' => 'userpass',
      'Возраст' => 26,
    ],
    [
      'Логин' => 'moderator',
      'Пароль' => 22 . 'mod23',
      'Возраст' => 45,
    ],
  ];

foreach ($arr as  $value) {
  foreach ($value as $key => $v) {
    echo $key . ' = ' . $v;
    echo '<br />';
  }
  //echo $key = $v;
  echo '<br />';
  //print_r ( $v ) ;
}
echo 'Зредний возраст сотрудников --' . array_sum($arr[2]) / count($arr);

// Массивы

$arr = array(1, 0, -12, 1.5, -2.85, true, 4, 'String');
for (
  $i = 0;
  $i < count($arr);
  ++$i
) {
  echo '<hr>';
  print_r($i);
  echo '=>' . $arr[$i] . '<br />';
}
echo '<br />';

//многомерный массив
//сдесь нужен цикл foreach ( $variable as $key => $value ) {
// code...
//}
$arr2 =
  [
    [
      'Имя' => 'Александр',
      'Возраст' => 47,
    ],
    [
      'Лет',
      'Я люблю свою страну',
    ],
    [1, 25, 109],
  ];

foreach ($arr2 as $v) {
  foreach ($v as $key => $val) {
    // code...
    print_r($v);
    echo '<hr>';
    //print_r( $v );
    echo $key . ' = ' . $val . '<br />';
    echo '<hr><br /><hr>';
  }
}

/*
1. Создайте ассоциативный массив с сотрудниками,
где каждый сотрудник будет представлять из себя массив
со следующими ключами: name и age.
Фактически, это будет двумерный массив.

2. Найдите средний возраст сотрудников и выведите его.

Примечание:
Для поиска среднего надо найти
сумму возрастов всех сотрудников,
а потом разделить эту сумму на их количество.
*/

$ar =
  [
    [
      'name' => 'Антон',
      'age' => '20',
    ],
    [
      'name' => 'Егор',
      'age' => '22',
    ],
    [
      'name' => 'Вася',
      'age' => '33',
    ],
    [
      'name' => 'Петя',
      'age' => '41',
    ],
  ];

foreach ($ar as  $value) {
  foreach ($value as $key => $val) {
  }
}
echo '<pre>';
echo 'Зредний возраст сотрудников --' . array_sum($ar[1]) / count($ar);
echo '</pre>';

$arr = [];
for ($i = 0; $i < 10; ++$i) {
  $arr[] = $i * 5;
}

foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br />';

foreach ($arr as $key => $value) {
  $arr[$key] = $value * 2;
}

foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br />';

foreach ($arr as &$value) {
  $value *= 2;
}

foreach ($arr as $value) {
  echo $value . ', ';
}
echo '<br />';

echo '<hr>';
echo '<br />';
echo '<pre>';
print_r(get_defined_vars());
echo '<pre>';

//Рекурсия -фізов функции в самой функции

function factorial($n)
{
  if ($n <= 1) {
    return 1;
  }

  return $n * factorial($n - 1);
}
echo factorial(3);
