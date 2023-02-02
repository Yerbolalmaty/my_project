<?php
//$greet = function($name) {
//    printf("Привет, %s\r\n", $name);
//};
//
//$greet('Мир');
//$greet('PHP');

//

$message = 'привет';

// Наследование по ссылке
$example = function () use (&$message) {
    var_dump($message);
};
$example();