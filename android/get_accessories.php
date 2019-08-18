<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$type=$_POST['type'];
$key=$_POST['key'];
if($type=="Fertilizers")
{
 
$sql="SELECT * FROM `fertilizer` WHERE `name` LIKE '$key%'";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
}
if($type=="Pesticides")
{
 
$sql="SELECT * FROM `pesticide` WHERE `name` LIKE '$key%'";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
}
if($type=="Seeds")
{
 
$sql="SELECT * FROM `seed` WHERE `name` LIKE '$key%'";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
}

if($type=="Machines")
{
 
$sql="SELECT * FROM `machine` WHERE `name` LIKE '$key%'";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
}
    
