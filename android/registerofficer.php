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
$address=$_POST['address'];
$contact=$_POST['contact'];
$sql="INSERT INTO `engineer`(`username`,`password`,`name`, `address`, `contact`) VALUES ('$username','$password','$name','$address','$contact')";
if($con->query($sql))
{
        $userid = $con->insert_id;

    $sql="INSERT INTO `login`(`username`, `password`, `role`,`userid`) VALUES ('$username','$password','officer','$userid')";
if($con->query($sql))
{
    
    echo "Officer registered successfully.";
}
 else {
echo "Officer registration failed.";    
}
}
 else {
echo "Officer registration failed.";    
}

