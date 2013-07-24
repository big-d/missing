<?php
// Create MySQL login values and
// set them to your login information.
$username = "";
$password = "helloword";
$host = "";
$database = "";

// Make the connect to MySQL or die
// and display an error.
$link = mysql_connect($host, $username, $password);
if (!$link) {
die('Could not connect: ' . mysql_error());
}

// Select your database
mysql_select_db ($database);


// Make sure the user actually
// selected and uploaded a file
//if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {

// Temporary file name stored on the server
//$tmpName = $_FILES['image']['tmp_name'];

// Read the file
//$fp = fopen($tmpName, 'r');
//$data = fread($fp, filesize($tmpName));
//$data = addslashes($data);
//fclose($fp);
$mname=$_POST["mname"];
$mphone="";//$_POST["mphone"];
$mlocation="";//$_POST["mlocation"];
$minfo="";//$_POST["minfo"];
$uname=$_POST["uname"];
$uphone="";//$_POST["uphone"];

// Create the query and insert
// into our database.
$query = "INSERT INTO found ";
$query .= "(mname,mphone,minfo,uname,uphone) VALUES ('$mname','$mphone','$minfo','$uname','$uphone')";
$results = mysql_query($query, $link);

// Print results
print "Thank you, your input  has been uploaded.It will be reviewed and the entry will be removed";


//else {
//print "No input uploaded";


// Close our MySQL Link
mysql_close($link);
?>
