<?php
session_start();
$con=mysqli_connect("localhost","root","","suratcricups");

$var=$_REQUEST['profileviewid'];
$str="select * from playertbl where player_id='$var' ";
$result=mysqli_query($con,$str);
$row=mysqli_fetch_array($result);

?>