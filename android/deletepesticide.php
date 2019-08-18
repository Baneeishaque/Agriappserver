<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$cropid=$_POST['cropid'];
$supplierid=$_POST['supplierid'];
$sql="DELETE FROM `pesticide` WHERE id=$id ";
if($con->query($sql))
{
    echo "pesticide delete successfully.";
}
 else {
echo "pesticide delete   failed.";    
}
