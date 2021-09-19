<?php

namespace TechStore\Classes\Validation;

interface ValidationRule
{
    public function check(string $name, $value);
}



?>