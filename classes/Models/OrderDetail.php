<?php

namespace TechStore\Classes\Models;
use TechStore\Classes\Db;

class OrderDetail extends Db
{
    public function __construct()
    {
        $this->table ="order_details";
        $this->connect();
    }
    public function selectWithProducts($orderId)
    {
        $sql = "SELECT qty,`name`, price FROM $this->table JOIN products
        ON $this->table.product_id = products.id
        WHERE order_id = $orderId";
        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
}







?>