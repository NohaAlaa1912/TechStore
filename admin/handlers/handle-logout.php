<?php

require_once("../../app.php");

use TechStore\Classes\Models\Admin;

$ad = new Admin;
$ad->logout($session);

$request->aredirect('login.php');


?>