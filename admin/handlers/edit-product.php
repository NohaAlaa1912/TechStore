<?php

require_once("../../app.php");

use TechStore\Classes\File;
use TechStore\Classes\Models\Product;
use TechStore\Classes\Validation\Validator;



if($request->postHas('submit')) {
    $id= $request->post('id');
    $name= $request->post('name');
    $cat_id= $request->post('cat_id');
    $price= $request->post('price');
    $pieces_no= $request->post('pieces_no');
    $desc= $request->post('desc');
    $img= $request->files('img');


// validation
$validator = new Validator;
$validator->validate('name', $name, ['required', 'str', 'max']);
$validator->validate('cat_id', $cat_id, ['required', 'numeric']);
$validator->validate('price', $price, ['required', 'numeric']);
$validator->validate('pieces number',$pieces_no, ['required', 'numeric']);
$validator->validate('description', $desc, ['required', 'str']);
if($img['error'] == 0) {
    $validator->validate('image', $img, ['image']);
}


// echo "<pre>";
// print_r($img);
// echo "</pre>";
// die();

if ($validator->hasErrors()) {
    $session->set("errors", $validator->getErrors());
    $request->aredirect("add-product.php");

} else {
    $pr = new Product;
    $imgName = $pr->selectId($id, "img")['img'];
    
    if($img['error'] == 0) {
        unlink(PATH . "uploads/$imgName");
        $file = new File($img);
        $imgName= $file->rename()->upload();
    } 

    $pr->update("name= '$name' , price = '$price', pieces_no = '$pieces_no', 
    `desc` = '$desc', cat_id = '$cat_id', img= '$imgName' ", $id);
    $session->set('success', 'product updated successfully');
    $request->aredirect("products.php");

    }

} else {
    $request->redirect("add-product.php");

}






?>