<?php
include_once 'dbhelper.php';
if(isset($_POST['addType'])){
    $type_name= htmlentities(trim($_POST['type_name']));
    if($type_name != ""){
        addType(array($type_name));
        header("Location:type.php");
    }
}