<?php
require_once ('../vendor/autoload.php');


$worker = new \App\Worker();
//$worker->work();
$visitor = new \App\Visitor();
var_dump($visitor->visit());