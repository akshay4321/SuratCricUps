<?php
$str=$_GET['c'];
if(isset($_COOKIE['c1']))
{
if($_COOKIE['c1']==$str)
	echo $_COOKIE['c2'];
}
?>