<?php


require("../../app.php");

use TechStore\Classes\Models\Order;

if ($request->getHas('id')) {
    $id = $request->get('id');
    $ord = new Order;
    $ord->update("status = 'canceled'", $id);

    $session->set('success', 'order canceled');
    $request->aredirect("order.php?id=" . $id);
}  




?>