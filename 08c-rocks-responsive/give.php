<?php
require('_signon.php');
require('_signon.php');

$id = $_GET['id'];

$query = "UPDATE rock SET given='1' WHERE id='" . $id . "'";

mysql_query($query) or die(mysql_error());

header('Location: ./');

?>