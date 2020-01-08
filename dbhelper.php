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
    $sql="INSERT INTO tbl_type(type_name,type_image) values(?,?)";
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


function getAllTruck(){
    $dbconn=dbconn();
    $sql="SELECT truck_id,truck_name,truck_description,truck_features,truck_brochure,b.brand_name,ty.type_name FROM tbl_truck tr,tbl_brand b,tbl_type ty WHERE tr.brand_id=b.brand_id AND tr.type_id = ty.type_id
    ";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute();
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllTruck

////////////////////////////////////


function getTruck($data){
    $dbconn=dbconn();
    $sql="SELECT truck_id,truck_name,truck_description,truck_features,truck_brochure,truck_image,b.brand_name,ty.type_name FROM tbl_truck tr,tbl_brand b,tbl_type ty WHERE tr.brand_id=b.brand_id AND tr.type_id = ty.type_id AND tr.truck_id =?
    ";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute($data);
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllTruck

function getBrand($data){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_brand WHERE brand_id =?";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute($data);
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getBrand


function getTypeOfTruck($data){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_type WHERE type_id =?";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute($data);
    $rows=$stmt->fetch(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getTypeOfTruck

/////////////



function getAllTruckByBrand($data){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_truck tr,tbl_brand br WHERE tr.brand_id = br.brand_id AND br.brand_id =?";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute($data);
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllTruckByBrand



function getAllTruckByType($data){
    $dbconn=dbconn();
    $sql="SELECT * FROM tbl_truck tr,tbl_type ty WHERE tr.type_id = ty.type_id AND ty.type_id =?";
    $stmt=$dbconn->prepare($sql);
    $stmt->execute($data);
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbconn=destroy();
    return $rows;
}// end of getAllTruckByType