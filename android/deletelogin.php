<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
$userid=$_POST['userid'];
$sql="DELETE FROM `login` WHERE username='$username'";
if($con->query($sql))
{
    echo "Delete login successfully";
}
 else {
      echo "Delete login failed";
    
    
}