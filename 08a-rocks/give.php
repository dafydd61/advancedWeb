<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("rock_collector") or die(mysql_error());

$id = $_GET['id'];

$query = "UPDATE rock SET given='1' WHERE id='" . $id . "'";

mysql_query($query) or die(mysql_error());

header('Location: ./');

?>