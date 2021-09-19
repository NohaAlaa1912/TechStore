<?php

namespace TechStore\Classes\Models;
use TechStore\Classes\Db;

class Cat extends Db
{
    public function __construct()
    {
        $this->table ="cats";
        $this->connect();
    }
}







?>