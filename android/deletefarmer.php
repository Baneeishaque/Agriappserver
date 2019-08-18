<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$address=['address'];
$contact_no=['contact_no'];
$sql="DELETE FROM `farmer` WHERE id=$id ";
if($con->query($sql))
{
    echo "Delete farmer successfully";
}
 else {
      echo "Delete farmer failure";
    
    
}