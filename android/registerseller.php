<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$office_address = $_POST['office_address'];
$godown_address = $_POST['godown_address'];
$contact = $_POST['contact'];
$sql = "INSERT INTO `seller`( `username`,`password`,`name`, `office_address`, `godown_address`, `contact`) VALUES ('$username','$password','$name','$office_address','$godown_address','$contact')";
if ($con->query($sql)) {
    $userid = $con->insert_id;

    $sql = "INSERT INTO `login`(`username`, `password`, `role`,`userid`) VALUES ('$username','$password','seller','$userid')";
    if ($con->query($sql)) {

        echo "Seller registered successfully.";
    } else {
//        echo $sql;
//        echo mysqli_error($con);
        echo "Seller registration failed.";
    }
} else {
//    echo $sql;
//    echo mysqli_error($con);
    echo "seller registration  error";
}
 
 
    