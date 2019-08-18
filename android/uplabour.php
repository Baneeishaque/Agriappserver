<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$sql="UPDATE `labour` SET `name`='$name',`category`='$category',`address`='$address',`contact`='$contact' WHERE id=$id";
if($con->query($sql))
{
    echo "Update labour successfully";
}
 else {
      echo "Update labour failure";
    
 }