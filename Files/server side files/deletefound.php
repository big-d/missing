<?php
// Create MySQL login values and
// set them to your login information.
$username = "";
$password = "";
$host = "localhost";
$database = "";


$link = mysql_connect($host, $username, $password);
if (!$link) {
die('Could not connect: ' . mysql_error());
}

// Select your database
mysql_select_db ($database);



$mname=$_POST["mname"];
$mphone=$_POST["mphone"];

$query = "delete * from found where mname='$mname'";
$results = mysql_query($query, $link);

$query = "delete * backupmama found where mname='$mname'";

$results = mysql_query($query, $link);


print "deleted!";


mysql_close($link);
?>
