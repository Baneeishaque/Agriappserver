<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$title=$_POST['title'];
$content=$_POST['content'];
$provider=$_POST['provider'];
$sql="INSERT INTO `notification`( `title`, `datetime`, `content`, `provider`) VALUES ('$title',NOW(),'$content','$provider')";
if($con->query($sql))
{
    echo "Add nontification successfully";
}
 else {
      echo "Add notification failure";
    
    
}