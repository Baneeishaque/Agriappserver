<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$officeaddress=$_POST['officeaddress'];
$godown_address=$_POST['godownaddress'];
$contact_no=$_POST['contact_no'];
$sql="DELETE FROM `supplier` id=$id ";
if($con->query($sql))
{
    echo "Delete supplier successfully";
}
 else {
      echo "Delete supplier failure";
    
    
}