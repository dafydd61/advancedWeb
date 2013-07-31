<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("rock_collector") or die(mysql_error());

$whereFound = $_POST['where'];
$who = $_POST['who'];
$diameter = $_POST['diameter'];
$color = $_POST['color'];
$given = 0;

$query = "INSERT INTO rock (whereFound, who, diameter, color, given) VALUES('" . $whereFound . "','" . $who . "','" . $diameter . "','" . $color . "','" . $given . "') ";

mysql_query($query) or die(mysql_error());

header('Location: ./');

?>