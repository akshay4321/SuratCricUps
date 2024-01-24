
<?php
include('connection.php');
$d_id=$_REQUEST['did'];
$str="delete from selectiontbl where player_id='$d_id'";
$res=mysqli_query($con,$str);

$str1="update playertbl set status=0 where player_id='$d_id'";
$result1=mysqli_query($con,$str1);

header("location:manage_select.php");
?>