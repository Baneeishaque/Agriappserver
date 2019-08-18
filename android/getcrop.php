<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `crop`.`id`, `crop`.`name`, `water_availability_low`, `water_availability_high`, `Avg_temperature_low`, `Avg_temperature_high`, `soil_type`, `pH_low`, `pH_high`, `provider`,`engineer`.`name` AS `enigineer_name` FROM `crop`,`engineer` WHERE `crop`.`id`=$id AND `crop`.`provider`=`engineer`.`id`";
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

