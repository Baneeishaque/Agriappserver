<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$water_availability=$_POST['water_availability'];
$Avg_temperature=$_POST['Avg_temperature'];
$pH=$_POST['pH'];
$soil_type=$_POST['soil_type'];
$sql="SELECT `crop`.`id`, `crop`.`name`, `water_availability_low`, `water_availability_high`, `Avg_temperature_low`, `Avg_temperature_high`, `pH_low`, `pH_high` FROM `crop` WHERE (`Avg_temperature_low`<=$Avg_temperature AND `Avg_temperature_high`>=$Avg_temperature) AND (`water_availability_low`<=$water_availability AND `water_availability_high`>=$water_availability) AND (`pH_low`<=$pH AND `pH_high`>=$pH) AND `soil_type`='$soil_type'";
$result=$con->query($sql);
/*while ($row= mysqli_fetch_assoc($result))
{
    echo $row['id'].$row['name'].$row['water_availability'].$row['soil_type'].$row['pH'].$row['provider'];
}*/
$emptyarray=array();
while ($row = mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);

    
