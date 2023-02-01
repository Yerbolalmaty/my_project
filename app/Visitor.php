<?php

namespace App;

class Visitor
{
    public string $name;
    public int $age;
    public int $hours;

    public function visit()
    {
        return 'im visitor';
    }
}