<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sql="SELECT DISTINCT `soil_type` FROM `crop`";
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

