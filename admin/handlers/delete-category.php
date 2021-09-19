<?php


require_once("../../app.php");

use TechStore\Classes\Models\Cat;



if($request->getHas('id')) {
    $id = $request->get('id');


    $c = new Cat;
    $c->delete($id);


    $session->set('success','category deleted succes');
    $request->aredirect("categories.php");
}




?>