<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$category=$_POST['category'];
$address=$_POST['address'];
$contact_no=$_POST['contact_no'];
$sql="DELETE FROM `labour` WHERE id=$id ";
if($con->query($sql))
{
    echo "Delete labour successfully";
}
 else {
      echo "Delete labour failure";
    
    
}
 
