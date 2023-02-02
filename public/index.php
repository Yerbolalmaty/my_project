<?php
function userConnect($db){
    return function ($user) use ($db){
        echo $user.'подключился к базе'.$db;
    };
}
$var = userConnect(' Gulzhan');

$var('Yerema ');