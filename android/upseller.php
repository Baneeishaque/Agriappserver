<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$name=$_POST['name'];
$office_address=$_POST['office_address'];
$godown_address=$_POST['godown_address'];
$contact_no=$_POST['contact_no'];
$sql="UPDATE `seller` SET `name`='$name',`office_address`='$office_address',`godown_address`='$godown_address',`contact`='$contact_no' WHERE id=$id";
if($con->query($sql))
{
    echo "Update seller successfully";
}
 else {
      echo mysqli_error($con);
    
    
}
