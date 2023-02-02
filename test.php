<?php
//$greet = function($name) {
//    printf("Привет, %s\r\n", $name);
//};
//
//$greet('Мир');
//$greet('PHP');

//
//
//$message = 'привет';
//
//// Наследование по ссылке
//$example = function () use (&$message) {
//    var_dump($message);
//};
//$example();

function userConnect($name, $age, $callback)
{
    $c = $name.' будет '.$age.' лет, поздравляем!';
    $res = $callback($c);
    echo $res;
}
userConnect('Yerema', '35', function ($answer){
    return 'Кутты болсын '.$answer;
});
userConnect('Aizhan', '28', function ($tell){
    return 'Класс '. $tell;
});
