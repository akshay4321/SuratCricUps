
<?php
include('connection.php');
$del_id=$_REQUEST['delid'];
$str="delete from totalscoretbl where ground_id='$del_id'";
$res=mysqli_query($con,$str);
header('location:result.php');
?>