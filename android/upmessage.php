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
$sql="UPDATE `message` SET `datetime`='$datetime',`content`='$content',`provider`='$provider',`receiver`='$receiver' WHERE id=$id";
if($con->query($sql))
{
    echo "Update message successfully";
}
 else {
      echo "Update message failure";
    
    
}
