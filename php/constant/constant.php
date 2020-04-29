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

#endregion
  #color: #333;
  


define('COLOR', '#2985');
echo COLOR . "<br />";

    $host = 'localhost';
    $data =  `date`; // Обратные кавычки - это выполнение системной команды из ОС виндовс линокс и т.д.
    echo `ping -n 3 {$host}` . "<br/>";
    echo iconv("CP866","UTF-8",`ping -n 3 {$host}`) . "<br/>";//перекодировка
    echo iconv("CP866","UTF-8", $data) . "<br/>";//перекодировка
    echo $data . "<br/>";

echo "<h3>Постфиксный инкремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a++ . "<br />\n";//Возвращает значение $a, 
echo "Должно быть 6: " . $a . "<br />\n";//затем увеличивает $a на единицу.

echo "<h3>Префиксный инкремент</h3>";
$a = 5;
echo "Должно быть 6: " . ++$a . "<br />\n";//Увеличивает $a на единицу, 
echo "Должно быть 6: " . $a . "<br />\n";//затем возвращает значение $a.

echo "<h3>Постфиксный декремент</h3>";
$a = 5;
echo "Должно быть 5: " . $a-- . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";

echo "<h3>Префиксный декремент</h3>";
$a = 5;
echo "Должно быть 4: " . --$a . "<br />\n";
echo "Должно быть 4: " . $a . "<br />\n";
?>
<div style="background:<?=COLOR?>;">
  <!--Вывод константы -->
  <div>
    <Ul>
      <li><a style="background: #578EBE; color: #fff; border: none; border-bottom: 1px solid #578EBE;" href="">Вывод
          цвета константой</a></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </Ul>
  </div>
</div>
</div>