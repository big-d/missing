<?php

$username = "";
$password = "";
$host = "localhost";
$database = "";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());

//$id = $_GET['id'];

//if(!isset($id) || empty($id) || !is_int($id)){
  //   die("Please select your image!");
//}else{
//$rows=array();
$query = mysql_query("SELECT * FROM backupmama");//+7\
while($row = mysql_fetch_array($query)){
array_push($rows,$row);
$content = $row['image'];
$mname=$row['mname'];
$mphone=$row['mphone'];
$mlocation=$row['mlocation'];
$minfo=$row['minfo'];
$uname=$row['uname'];
$uphone=$row['uphone'];

//`header('Content-type: text/html');
echo '<img width=250 heiight=250 src="data:image/jpeg;base64,' . base64_encode( $row['image'] ) . '" />';

print" <br><i>Missing person's Name:</i><b>$mname</b> <br>";
print "<i>Missing person's phone:</i><b>  $mphone</b><br>";
print "<i> Missing person's last seen location:</i> <b>$mlocation</b><br>";
print "<i> Additional information:</i><b> $minfo</b><br>";
print "<i> uploader's name:</i> <b>$uname</b><br>";
print "<i> uploader's phone number:</i><b> $uphone</b><br>";

//header('Content-type: image/jpg');
  //   echo $content;


//echo "<br> this is one more";

}

?>
