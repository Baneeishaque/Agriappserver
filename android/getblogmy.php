<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `id`, `userid`, DATE_FORMAT(`datetime`,'%d.%m.%Y') as `datetime`, `title`, `content` FROM `blog` WHERE userid=$id ";
$result=$con->query($sql);
/*while ($row = mysqli_fetch_assoc($result))
{
    echo $row['id'].$row['username'].$row['datetime'].$row['title'].$row['content'].$row['comment_id'].$row['likes_count'].$row['dislikes_count'];
}*/
$emptyarray=array();
while ($row = mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
    

     
