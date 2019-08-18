<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$datetime=$_POST['datetime'];
$content=$_POST['content'];
$provider=$_POST['provider'];
$receiver=$_POST['receiver'];
$sql="DELETE FROM `message` WHERE id=$id ";
if($con->query($sql))
{
    echo "Delete message successfully";
}
 else {
      echo "Delete message failure";
    
    
}