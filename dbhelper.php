<?php


function dbconn(){
    try{
        return new PDO("mysql:hostname=localhost;dbname=avantrac_db","root","");
    }catch(PDOExecption $e){
        echo $e->getMessage();
    } 
}//end dbconn()


function destroy(){
    return null;
}//end of destroy()

// add

function addBrand($data){
    $db=dbconn();
    $sql="INSERT INTO tbl_brand(brand_name,brand_desc,brand_image) values(?,?,?)";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();  
}// end of addBrand

function addType($data){
    $db=dbconn();
    $sql="INSERT INTO tbl_type(type_name) values(?)";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();  
}// end of addType

function addTruck($data){
    $db=dbconn();
    $sql="INSERT INTO tbl_truck(truck_name,truck_description,truck_features,truck_brochure,truck_image,brand_id,type_id) values(?,?,?,?,?,?,?)";
    $stmt=$db->prepare($sql);
    $stmt->execute($data);
    $db=destroy();  
}// end of addTruck



function getAllType(){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_type";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllType


function getAllBrand(){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_brand";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllBrand

