<?php
include_once 'dbhelper.php';
if(isset($_POST['addType'])){
    $type_name= htmlentities(trim($_POST['type_name']));
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    //    $pname2 = rand(1000,10000)."-".$_FILES["file"]["name"];

       #temporary file name to store file
       $tname = $_FILES["file"]["tmp_name"];
    //    $tname2 = $_FILES["file"]["tmp_name"];

        #upload directory path
    $uploads_dir = 'images/type';
       #TO move the uploaded file to specific location
    //    $uploaddr='../../Capstone102/controller/images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    //    move_uploaded_file($tname2, $uploaddr.'/'.$pname2)
    $type_image=$pname;




    if($type_name != ""){
        addType(array($type_name,$type_image));
        header("Location:type.php");
    }
}