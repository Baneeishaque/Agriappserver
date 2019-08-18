<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$comment=$_POST['comment'];
$commenter=$_POST['commenter'];
$blogid=$_POST['blogid'];
$sql="INSERT INTO `comment`( `datetime`, `comment`, `commenter`, `blogid`) VALUES (NOW(),'$comment','$commenter','$blogid')";
if($con->query($sql))
{
    echo "Add comment successfully";
}
 else {
      echo "Add comment failure";
    
    
}
