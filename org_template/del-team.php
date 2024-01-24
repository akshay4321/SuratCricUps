
<?php
include('connection.php');
$del_id=$_REQUEST['delid'];
$str="delete from teamtbl where team_id='$del_id'";
$res=mysqli_query($con,$str);
if(!$res)
{
echo "error in delete record";
}
else
{
  header('location:manage_teams.php');
}
?>