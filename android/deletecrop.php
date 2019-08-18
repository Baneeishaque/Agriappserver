<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$water_availability=$_POST['water_availability'];
$soil_type=$_POST['soil_type'];
$Avg_temperature=$_POST['AVG_temperature'];
$pH=$_POST['pH'];
$provider=$_POST['provider'];
$sql="DELETE FROM `crop` WHERE id=$id ";
if($con->query($sql))
{
    echo "Delete crop successfully.";
}
 else {
echo "Delete crop failed.";    
}

