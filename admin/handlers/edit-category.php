<?php

require_once("../../app.php");

use TechStore\Classes\Models\Cat;
use TechStore\Classes\Validation\Validator;



if($request->postHas('submit')) {
    $id= $request->post('id');
    $name= $request->post('name');
    


// validation
$validator = new Validator;
$validator->validate('name', $name, ['required', 'str', 'max']);


if ($validator->hasErrors()) {
    $session->set("errors", $validator->getErrors());
    $request->aredirect("edit-category.php");

    } else {
        $c = new Cat;
        $c->selectId($id, "name");
    
    
    
    } 
    
    $c->update("name= '$name'", $id);
    $session->set('success', 'category updated successfully');
    $request->aredirect("categories.php");

    } 


 else {
    $request->redirect("add-category.php");

}






?>