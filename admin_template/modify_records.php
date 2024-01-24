<?php
session_start();
$host="localhost";
$username="root";
$password="";
$databasename="suratcricups";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['edit_row']))
{
 $row=$_POST['row_id'];
 $runs=$_POST['run_val'];
 $status=$_POST['status_val'];
 $runs1=$_POST['runs_val'];
  $ball=$_POST['ball_val'];
 $four=$_POST['fr_val'];
 $six=$_POST['sx_val'];
 $sr=$_POST['sr_val'];

 mysql_query("update battinglivetbl set batsman='$runs',status='$status',runs='$runs1',balls='$ball',4s='$four',6s='$six',sr='$sr' where bat_id='$row'");
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from battinglivetbl where bat_id='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert_row']))
{
  $matchid=$_SESSION["mid"];
  $team1id=$_SESSION["t1id"];	
	
 $runs=$_POST['run_val'];
 $status=$_POST['status_val'];
 $runs1=$_POST['runs_val'];
 $ball=$_POST['ball_val'];
 $four=$_POST['fr_val'];
 $six=$_POST['sx_val'];
 $sr=$_POST['sr_val'];
 mysql_query("insert into battinglivetbl(match_id,team_id,batsman,status,runs,balls,4s,6s,sr) values('$matchid','$team1id','$runs','$status','$runs1','$ball','$four','$six','$sr')");
 echo mysql_insert_id();
 exit();
}
?>