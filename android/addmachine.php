<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$rent=$_POST['rent'];
$rentscheme=$_POST['rentscheme'];
$rentamount=$_POST['rentamount'];
$purchase=$_POST['purchase'];
$purchaseamount=$_POST['purchaseamount'];
$sql="INSERT INTO `machine`( `name`, `category`, `rent`, `rentscheme`,`rentamount`,`purchase`,`purchaseamount`,supplier_id) VALUES ('$name','$category','$rent','$rentscheme','$rentamount','$purchase','$purchaseamount',$id)";
if($con->query($sql))
{
    echo "Add machine successfully";
}
 else {
      echo "Add machine failure".mysqli_error($con);
 }
    
    