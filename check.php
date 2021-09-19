<?php

// use TechStore\Classes\Models\Order;

require_once("app.php");

// use TechStore\Classes\Models\Admin;
use TechStore\Classes\Models\OrderDetail;

$det= new OrderDetail;
$details = $det->selectWithProducts(4);

echo "<pre>";
print_r($orders);
echo "</pre>";

// use TechStore\Classes;
// use TechStore\Classes\Db;
// use TechStore\Classes\Models\Order;
// use TechStore\Classes\Models\Product;

// $prod = new Product;
// $res= $prod->selectAll("id, name, 'desc', price");

// echo "<pre>";
// print_r($res);
// echo "</pre>";

// $ord = new Order;
// $res= $ord->insertAndGetId("name, phone", " 'noha' , '01142434897'");

// echo "<pre>";
// print_r($res);
// echo "</pre>";
// public function insertAndGetId(string $fields , string $values) 
    // {
    //     $sql = "INSERT INTO $this->table ($fields) VALUES ($values)";
    //     mysqli_query($this->conn, $sql);
    //     return mysqli_insert_id($this->conn);

    // }
// $ord = new Order;
// $res= $ord->delete(3);

// echo "<pre>";
// var_dump($res);
// echo "</pre>";

// $adm = new Admin;
// $res = $adm->login('noha@gmail.com', 1234567, $session);

// echo "<pre>";
// var_dump($res);
// echo "</pre>";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// $adm->logout($session);

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";




?>