<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$message=$_POST['message'];
$sql="INSERT INTO `chat`( `sender`, `chatdate`, `receiver`, `message`) VALUES ('$sender',NOW(),'$receiver','$message')";
if($con->query($sql))
{
    echo "Message send successfully";
}
 else {
      echo mysqli_error($con);
    
    
}