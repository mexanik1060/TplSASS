<?php
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
  ]
];
$sum = 0;
foreach ($ar as  $value) {
  foreach ($value as $key => $val) {

   
  } 
  echo "<pre>";
  echo 'Зредний возраст сотрудников --' . array_sum($ar[1])/count($ar);
  echo "</pre>";
}


  $arr = [];
    for ($i = 0; $i < 10; $i++) {
        $arr[] = $i * 5;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';
    
    foreach ($arr as $key => $value) {
        $arr[$key] = $value * 2;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';
    
    foreach ($arr as &$value) {
        $value *= 2;
    }
    
    foreach ($arr as $value) {
        echo $value.', ';
    }
    echo '<br />';

echo "<pre>";
print_r (get_defined_vars());
echo "</pre>";
