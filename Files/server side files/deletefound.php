<?php
// Create MySQL login values and
// set them to your login information.
$username = "root";
$password = "helloword";
$host = "localhost";
$database = "missingApp";


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
