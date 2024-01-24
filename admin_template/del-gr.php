
<?php
include('connection.php');
$del_id=$_REQUEST['delid'];
$str="delete from groundtbl where ground_id='$del_id'";
$res=mysqli_query($con,$str);
header('location:ground.php');
?>