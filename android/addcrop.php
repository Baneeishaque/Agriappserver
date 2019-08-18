<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$name = $_POST['name'];
$water_availability_high = $_POST['water_availability_high'];
$water_availability_low = $_POST['water_availability_low'];
$soil_type = $_POST['soil_type'];
$Avg_temperature_low = $_POST['Avg_temperature_low'];
$Avg_temperature_high = $_POST['Avg_temperature_high'];
$pH_low = $_POST['pH_low'];
$pH_high = $_POST['pH_high'];
$provider = $_POST['provider'];
$sql = "INSERT INTO `crop`(`name`, `water_availability_low`, `water_availability_high`,`soil_type`, `Avg_temperature_low`, `Avg_temperature_high`,`pH_low`, `pH_high`,`provider`) VALUES ('$name','$water_availability_low','$water_availability_high','$soil_type','$Avg_temperature_low','$Avg_temperature_high','$pH_low','$pH_high','$provider')";
if ($con->query($sql)) {
    echo "0";
} else {
    echo mysqli_error($con);
}

