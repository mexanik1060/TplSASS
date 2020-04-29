<?php

/**
 *-- Уроки
 *-- class
 *-- @category мівівміві
 *-- @package  авмавмвм
 *-- @author   сівсісісівс
 *-- @license  сівсівсісівс
 *-- @link     в файле комментария.
 **/
include_once 'index.php';

echo __FILE__.'<br />';
echo PHP_OS.'<br />';
echo PHP_VERSION.'<br />';
echo PHP_VERSION_ID.'<br />';
echo '<hr>';
/*

class userPerson {
    public $name;
    public $ferst;
    public $data_r;
    */
/*

    public function __construct( $nameOrder ) {
        $this -> name = $nameOrder;
        $this -> ferst = $nameOrder;
        $this -> data_r = $nameOrder;
    }
    */
/*

    public function FunctionName() {
        echo $name;
        echo $ferst;
        echo $data_r;
    }

}

$misha = new userPerson();
$misha -> name = 'Міша';
$misha -> ferst = 'Пупкин';
$misha -> data_r = '01.01.1900';
//FunctionName();
//var_dump();
var_dump( userPerson );
//var_dump( user_error );
*/

class ClassName
{
}
$misha = new ClassName();

var_dump($misha);
var_dump($misha instanceof ClassName);
