<?php

namespace TechStore\Classes;

class Session
{
    public function __construct()
    {
        // PHP_SESSION_NONE m3nah en lsa mafe4 session mafto7a aw mafe4 session_start() mawgoda
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function set(string $key, $value)
    {
        $_SESSION[$key]= $value;
    }
    public function get(string $key)
    {
        return $_SESSION[$key];
    }
    public function has(string $key) : bool
    {
        return isset($_SESSION[$key]);
    }
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
    public function destroy()
    {
        $_SESSION=[];
        session_destroy();
    }
}







?>