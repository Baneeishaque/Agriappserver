<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$title=$_POST['title'];
$datetime=$_POST['datetime'];
$content=$_POST['content'];
$provider=$_POST['provider'];
$sql="DELETE FROM `notification` WHERE id=$id ";
if($con->query($sql))
{
    echo "Delete nontification successfully";
}
 else {
      echo "Delete notification failure";
    
    
}