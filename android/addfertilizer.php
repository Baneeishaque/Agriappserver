<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$name=$_POST['name'];
$cropid=$_POST['cropid'];
$supplierid=$_POST['supplierid'];
$sql="INSERT INTO `fertilizer`(`name`, `cropid`, `supplierid`) VALUES ('$name','$cropid','$supplierid')";
if($con->query($sql))
{
    echo "0";
}
 else {
echo mysqli_error($con);  
}

