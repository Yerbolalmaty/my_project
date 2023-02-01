<?php
namespace App;
class Worker
{
    public string $name;
    public int $age;
    public int $hours;

    public function work()
    {
        print_r('im working');
    }
}