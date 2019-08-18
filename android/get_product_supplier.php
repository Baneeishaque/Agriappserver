<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$sql="SELECT `id`, `name`, `unit_cost`, `minimum_quantity`, `pic1`, `pic2`, `pic3`, `seller_id` FROM `product` WHERE id=$id ";
$result=$con->query($sql);
$emptyarray=array();
while ($row= mysqli_fetch_assoc($result))
{
    $emptyarray[]=$row;
}
echo json_encode($emptyarray);