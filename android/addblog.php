<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$userid=$_POST['userid'];
$title=$_POST['title'];
$content=$_POST['content'];
$sql="INSERT INTO `blog`( `userid`, `datetime`, `title`, `content`) VALUES ('$userid',NOW(),'$title','$content')";
if($con->query($sql))
{
    echo "Add blog successfully";
}
 else {
      echo "Add blog faiure";
    
    
}
