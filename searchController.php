<?php
include_once 'dbhelper.php';
if(isset($_POST['search'])){
    $_SESSION['search']=searchTruck(array($_POST['search']));
    header("Location:search.php?q=".$_POST['search']);
}
