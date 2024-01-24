
<?php error_reporting(0);
$con = mysql_connect('localhost', 'root','');
$db = mysql_select_db('suratcricups');
//where 'term' is the default keyword in jquery autocomplete api
$query = $_REQUEST['term'];
$sql = "select player_name from `playertbl` where player_name like '%$query%'";
$query = mysql_query($sql);
while($row = mysql_fetch_assoc($query)){
$val[] = $row['player_name'];
}
//here we convert the result into JSON
echo json_encode($val);
?>