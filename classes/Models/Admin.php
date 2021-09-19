<?php

namespace TechStore\Classes\Models;
use TechStore\Classes\Db;
use TechStore\Classes\Session;

class Admin extends Db
{
    public function __construct()
    {
        $this->table ="admins";
        $this->connect();
    }
// depency injection for object session
    public function login(string $email, string $password, Session $session)
    { 
        $sql = "SELECT * FROM $this->table WHERE email = '$email' LIMIT 1 ";
        $result = mysqli_query($this->conn, $sql);
        $admin = mysqli_fetch_assoc($result);
        // return $admin;
        if (! empty($admin)) {
            $hashPassword =$admin['password'];
            $isSame = password_verify($password, $hashPassword);
            if ($isSame) {
                $session->set('adminId', $admin['id']);
                $session->set('adminName', $admin['name']);
                $session->set('adminEmail', $admin['email']);

                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }

    }

    public function logout(Session $session) 
    {
        $session->remove('adminId');
        $session->remove('adminName');
        $session->remove('adminEmail');

    }
}
