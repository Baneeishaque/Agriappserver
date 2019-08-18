<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$sender=$_POST['sender'];
$receiver=$_POST['receiver'];
$sql="SELECT `id`, DATE_FORMAT(`chatdate`,'%d.%m.%Y') as `chatdate`, `message`, `sender`, `receiver` FROM `chat` WHERE (receiver=$receiver and sender=$sender) or (receiver=$sender and sender=$receiver)";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);