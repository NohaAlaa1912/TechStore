<?php

namespace TechStore\Classes\Validation;

class Max implements ValidationRule
{
    public function check(string $name, $value)
    {
        if(strlen($value) > 255)
        {
            return "$name must not exceed 255 characters";
        }
        return false;
    }
}
?>