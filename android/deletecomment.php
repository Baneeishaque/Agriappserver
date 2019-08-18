<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$datetime=$_POST['datetime'];
$comment=$_POST['comment'];
$commenter=$_POST['commenter'];
$blogid=$_POST['blogid'];
$sql="DELETE FROM `comment` WHERE id=$id";
if($con->query($sql))
{
    echo "Delete comment successfully";
}
 else {
      echo "Delete comment failure";
    
    
}