<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `notification`.`id`, `title`, DATE_FORMAT(`datetime`,'%d.%m.%Y') as `datetime` , `content`, `provider`,`engineer`.`name` AS `enigineer_name` FROM `notification`,`engineer` WHERE `notification`.`id`=$id AND `notification`.`provider`=`engineer`.`id`";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);