<?php

namespace TechStore\Classes\Validation;

class Required implements ValidationRule
{
    public function check(string $name, $value)
    {
        if(empty($value))
        {
            return "$name is required";
        }
        return false;
    }
}


?>