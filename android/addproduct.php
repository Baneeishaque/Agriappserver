<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$name=$_POST['name'];
$unit_cost=$_POST['unit_cost'];
$minimum_quantity=$_POST['minimum_quantity'];
$pic1=$_POST['pic1'];
$pic2=$_POST['pic2'];
$pic3=$_POST['pic3'];
$seller_id=$_POST['seller_id'];
$sql="INSERT INTO `product`( `name`, `unit_cost`, `minimum_quantity`, `pic1`, `pic2`, `pic3`, `seller_id`) VALUES ('$name','$unit_cost','$minimum_quantity','$pic1','$pic2','$pic3','$seller_id')";
if($con->query($sql))
{
    echo "0";
}
 else {
      echo mydsqli_error($con);
    
    
}