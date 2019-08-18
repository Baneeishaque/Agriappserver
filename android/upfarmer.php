<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['addres'];
$contact_no=$_POST['contact_no'];
$sql="UPDATE `farmer` SET `name`='$name',`address`='$address',`contact_no.`='$contact_no' WHERE id=$id";
if($con->query($sql))
{
    echo "Update farmer successfully";
}
 else {
      echo "Update farmer failure";
    
    
}

