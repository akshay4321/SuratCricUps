
<?php
include('connection.php');
$del_id=$_REQUEST['delid'];
$str="delete from orgtbl where org_id='$del_id'";
$res=mysqli_query($con,$str);
if(!$res)
{
echo "error in delete record";
}
else
{
  header('location:new1.php');
}
?>