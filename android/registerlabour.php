<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$name=$_POST['name'];
$category=$_POST['category'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$sql="INSERT INTO `labour`( `username`,`password`,`name`, `category`, `address`, `contact`) VALUES ('$username','$password','$name','$category','$address','$contact')";
if($con->query($sql))
{
     $userid = $con->insert_id;
    $sql="INSERT INTO `login`(`username`, `password`, `role`,`userid`) VALUES ('$username','$password','labour','$userid')";
if($con->query($sql))
{
    
    echo "labour registered successfully.";
}
 else {
echo "labour registration failed.";    
}
}
 else {
      echo "labour registration failure";
    
    
}
 
