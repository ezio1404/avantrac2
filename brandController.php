<?php
include_once 'dbhelper.php';

if(isset($_POST['addBrand'])){
    $brand_name = htmlentities(trim($_POST['brand_name']));
    $brand_desc = htmlentities(trim($_POST['brand_desc']));

    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    //    $pname2 = rand(1000,10000)."-".$_FILES["file"]["name"];

       #temporary file name to store file
       $tname = $_FILES["file"]["tmp_name"];
    //    $tname2 = $_FILES["file"]["tmp_name"];

        #upload directory path
    $uploads_dir = 'images/brand';
       #TO move the uploaded file to specific location
    //    $uploaddr='../../Capstone102/controller/images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    //    move_uploaded_file($tname2, $uploaddr.'/'.$pname2)
    $brand_image=$pname;
    $data = array($brand_name,$brand_desc,$brand_image);
    addBrand($data );
    header("Location:brand.php");
}