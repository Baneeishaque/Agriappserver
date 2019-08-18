<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `id`, DATE_FORMAT(`datetime`,'%d.%m.%Y') as `datetime`, `comment`, `commenter`, `blogid` FROM `comment` WHERE id=$id";
$result=$con->query($sql);
/*while ($row = mysqli_fetch_assoc($result))
{
    echo $row['id'].$row['datetime'].$row['comment'].$row['commenter'].$row['blogid'];
            
}*/
$emptyarray=array();
while ($row = mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
    
