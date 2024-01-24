<?php
session_start();
$host="localhost";
$username="root";
$password="";
$databasename="suratcricups";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['edit1_row']))
{
 $row=$_POST['row_id'];
 
 $bowl1=$_POST['bowl_val'];
 $over1=$_POST['over_val'];
 $madien1=$_POST['madien_val'];
 $runs11=$_POST['rn_val'];
 $wicket1=$_POST['wicket_val'];
 $nb1=$_POST['nb_val'];
 $wd1=$_POST['wd_val'];
 $eco1=$_POST['eco_val'];

 mysql_query("update bowlinglivetbl set bowler='$bowl1',over='$over1',maiden='$madien1',runs='$runs11',wicket='$wicket1',nb='$nb1',wd='$wd1',eco='$eco1' where bowl_id='$row'");
 echo "success";
 exit();
}


if(isset($_POST['delete1_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from bowlinglivetbl where bowl_id='$row_no'");
 echo "success";
 exit();
}

if(isset($_POST['insert1_row']))
{
 $matchid=$_SESSION["mid"];
 $team2id=$_SESSION["t2id"];
 $bowl1=$_POST['bowl_val'];
 $over1=$_POST['over_val'];
 $madien1=$_POST['madien_val'];
 $runs11=$_POST['rn_val'];
 $wicket1=$_POST['wicket_val'];
 $nb1=$_POST['nb_val'];
 $wd1=$_POST['wd_val'];
 $eco1=$_POST['eco_val'];
 mysql_query("insert into bowlinglivetbl(match_id,team_id,bowler,over,maiden,runs,wicket,nb,wd,eco) values('$matchid','$team2id','$bowl1','$over1','$madien1','$runs11','$wicket1','$nb1','$wd1','$eco1')");
 echo mysql_insert_id();
 exit();
}
?>