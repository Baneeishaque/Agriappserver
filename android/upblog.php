<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$title=$_POST['title'];
$content=$_POST['content'];
$sql="UPDATE `blog` SET `datetime`=Now(),`title`='$title',`content`='$content' WHERE id=$id";
if($con->query($sql))
{
    echo "0";
}
 else
{
      echo mysqli_error($con);
    
}