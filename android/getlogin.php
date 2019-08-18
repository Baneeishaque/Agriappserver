<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT COUNT(`username`) AS `count`,`role`, `userid` FROM `login` WHERE username='$username' and password='$password'";
$result = $con->query($sql);
/* $emptyarray=array();
  while ($row= mysqli_fetch_assoc($result))
  {
  $emptyarray[]=$row;
  }
  echo json_encode($emptyarray);
 */
$count = mysqli_num_rows($result);
$emptyarray = array();
$emptyarray[] = mysqli_fetch_assoc($result);
echo json_encode($emptyarray);

