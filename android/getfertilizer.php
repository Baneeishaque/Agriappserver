<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `id`, `name`, `cropid`, `supplierid` FROM `fertilizer` WHERE id=$id";
$result=$con->query($sql);
/*while ($row = mysqli_fetch_assoc($result))
{
    echo $row['id'].$row['name'].$row['cropid'].$row['supplierid'];
}*/
$emptyarray=array();
while ($row = mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
    
