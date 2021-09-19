<?php


require("../../app.php");

use TechStore\Classes\Models\Order;

if ($request->getHas('id')) {
    $id = $request->get('id');
    $ord = new Order;
    $ord->update("status = 'approved'", $id);

    $session->set('success', 'order approved');
    $request->aredirect("order.php?id=" . $id);
}  




?>