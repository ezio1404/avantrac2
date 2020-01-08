<?php
include_once 'dbhelper.php';
if(isset($_POST['addTruck'])){
    $truck_name = htmlentities(trim($_POST['truck_name']));
    $truck_description = htmlentities(trim($_POST['truck_description']));
    $truck_features = htmlentities(trim($_POST['truck_features']));
    $truck_name = htmlentities(trim($_POST['truck_name']));
    $type_id = htmlentities(trim($_POST['type_id']));
    $brand_id = htmlentities(trim($_POST['brand_id']));
    

    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    //    $pname2 = rand(1000,10000)."-".$_FILES["file"]["name"];

       #temporary file name to store file
       $tname = $_FILES["file"]["tmp_name"];
    //    $tname2 = $_FILES["file"]["tmp_name"];

        #upload directory path
    $uploads_dir = 'images/trucks';
       #TO move the uploaded file to specific location
    //    $uploaddr='../../Capstone102/controller/images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    //    move_uploaded_file($tname2, $uploaddr.'/'.$pname2)
    $truck_image=$pname;


    
    $prefix = rand(1000,10000)."-".$_FILES["truck_brochure"]["name"];
    //    $prefix2 = rand(1000,10000)."-".$_FILES["file"]["name"];

       #temporary file name to store file
       $tname = $_FILES["truck_brochure"]["tmp_name"];
    //    $tname2 = $_FILES["file"]["tmp_name"];

        #upload directory path
    $uploads_dir = 'images/brochure';
       #TO move the uploaded file to specific location
    //    $uploaddr='../../Capstone102/controller/images';
    move_uploaded_file($tname, $uploads_dir.'/'.$prefix);
    //    move_uploaded_file($tname2, $uploaddr.'/'.$prefix2)
    $truck_brochure=$prefix;


    $data=array($truck_name,$truck_description,$truck_features,$truck_brochure,$truck_image,$brand_id,$type_id);

    addTruck($data);
    header("Location:adminDashboard.php");
}