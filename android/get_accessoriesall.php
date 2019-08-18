<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';

$id=$_POST['id'];
$sql="SELECT * FROM `fertilizer` WHERE `supplierid`=$id";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}


$sql="SELECT * FROM `pesticide` WHERE `supplierid`=$id";
$result=$con->query($sql);

while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}

 
$sql="SELECT * FROM `seed` WHERE `supplierid`=$id";
$result=$con->query($sql);

while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}

 
$sql="SELECT * FROM `machine` WHERE `supplier_id`=$id";
$result=$con->query($sql);

while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);

    
