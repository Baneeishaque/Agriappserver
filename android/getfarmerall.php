<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';

$sql="SELECT `id`, `name`, `address`, `contact` FROM `farmer`";
$result=$con->query($sql);
/*while ($row= mysqli_fetch_assoc($result))
{
    echo $row['id'].$row['name'].$row['address'].$row['contact_no'];
}*/
$emptyarray=array();
while ($row = mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);
    
