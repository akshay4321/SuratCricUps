
<?php
include('connection.php');
$del_id=$_REQUEST['delid'];
$str="delete from matchtbl where match_id='$del_id'";
$res=mysqli_query($con,$str);
header('location:matches.php');
?>