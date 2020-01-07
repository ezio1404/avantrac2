<?php
include_once 'dbhelper.php';

if(isset($_POST['addBrand'])){
    $brand_name = htmlentities(trim($_POST['brand_name']));
}