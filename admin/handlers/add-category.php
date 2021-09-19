<?php

require_once("../../app.php");


use TechStore\Classes\Models\Cat;
use TechStore\Classes\Validation\Validator;



if($request->postHas('submit')) {

    $name= $request->post('name');


// validation
$validator = new Validator;
$validator->validate('name', $name, ['required', 'str', 'max']);



if ($validator->hasErrors()) {
    $session->set("errors", $validator->getErrors());
    $request->aredirect("add-category.php");

} else {
    $c = new Cat;
    $c->insert("name", "'$name'");
    
    $session->set('success', 'category added successfully');
    $request->aredirect("categories.php");
    
    }

} else {
    $request->redirect("add-category.php");

}






?>