<?php


require_once("../../app.php");

use TechStore\Classes\Models\Product;


if($request->getHas('id')) {
    $id = $request->get('id');


    $pr = new Product;
    $imgName = $pr->selectId($id, "img")['img'];
    unlink(PATH. "uploads/$imgName");
    $pr->delete($id);


    $session->set('success','product deleted succes');
    $request->aredirect("products.php");
}




?>