<?php

namespace TechStore\Classes\Validation;

class RequiredFile implements ValidationRule
{
    public function check(string $name, $value)
    {
        if($value['error'] != 0)
        {
            return "$name is required";
        }
        return false;
    }
}


?>