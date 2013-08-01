<?php

// You need to edit the following lines for your own db.
// Your db credentials are ccitXXXX_drupalu/generic (unless you've changed your cPanel password)
// Your database name is ccitXXXX_drupaldb

// So my login on phoenix looks like this:

// mysql_connect("localhost", "ccit1280_drupalu", "generic") or die(mysql_error());
// mysql_select_db("ccit1280_drupaldb") or die(mysql_error());


mysql_connect("localhost", "root", "root") or die(mysql_error());
mysql_select_db("rock_collector") or die(mysql_error());
?>