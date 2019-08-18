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
$address = $_POST['address'];
$contact = $_POST['contact'];
$sql = "INSERT INTO `farmer`(`username`,`password`,`name`, `address`, `contact`) VALUES ('$username','$password','$name','$address','$contact')";
if ($con->query($sql)) {
    $userid = $con->insert_id;
    $sql = "INSERT INTO `login`(`username`, `password`, `role`,`userid`) VALUES ('$username','$password','farmer','$userid')";
    if ($con->query($sql)) {

        echo "Farmer registered successfully.";
    } else {
        echo "Farmer registration failed.";
    }
} else {
    echo "Farmer registration failed.";
}
