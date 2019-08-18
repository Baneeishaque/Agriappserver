<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$unit_cost=$_POST['unit_cost'];
$minimum_quantity=$_POST['minimum_quantity'];

$sql="UPDATE `product` SET `name`='$name',`unit_cost`='$unit_cost',`minimum_quantity`='$minimum_quantity' WHERE id=$id";
if($con->query($sql))
{
    echo "0";
}
 else {
      echo mysqli_error($con);
    
    
}