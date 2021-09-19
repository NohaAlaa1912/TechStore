<?php

namespace TechStore\Classes;

class Request
{
    public function get(string $key)
    {
        return $_GET[$key];
    }
    public function post(string $key)
    {
        return $_POST[$key];
    }
    public function files(string $key)
    {
        return $_FILES[$key];
    }
    public function cleanPost(string $key)
    {
        return trim(htmlspecialchars($_POST[$key]));
    }
    // gethas basta3mlha 34an trag3 true aw false fe ba3d ma tt2aked el key mawgowd wla la2  
    public function getHas(string $key) : bool 
    {
        return isset($_GET[$key]);
    }
    public function postHas(string $key) : bool
    {
        return isset($_POST[$key]);
    }
    public function redirect($path)
    {
        header("location: " . URL . $path);
    }
    public function aredirect($path)
    {
        header("location: " . AURL . $path);
    }

}







?>