<?php

namespace TechStore\Classes\Validation;

class Image implements ValidationRule
{
    public function check(string $name, $value)
    {
        $alloewdExt=['png', 'jpg', 'jpeg', 'gif'];
        $ext = pathinfo($value['name'], PATHINFO_EXTENSION);

        if(! in_array($ext, $alloewdExt))
        {
            return "$name extinsion not allowed, please upload png,jpeg,jpg,gif";
        }
        return false;
    }
}


?>