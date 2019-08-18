<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$POST['id'];
$name=$_POST['name'];
$water_availability=$_POST['water_availability'];
$soil_type=$_POST['soil_type'];
$Avg_temperature=$_POST['Avg_temperature'];
$pH=$_POST['pH'];
$provider=$_POST['provider'];
$sql="UPDATE `crop` SET `name`='$name',`water_availability`='$water_availability',`soil_type`='$soil_type',`Avg_temperature`='$Avg_temperature',`pH`='$pH',`provider`='$provider' WHERE id=$id";
if($con->query($sql))
{
    echo "Update crop successfully";
}
 else {
      echo "Update crop failure";
    
    
}
