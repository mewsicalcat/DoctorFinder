<?
echo "Hello ". $_POST["firstname"]. " " . $_POST["lastname"] . "!<br>"; 
echo "Zip code: " . $_POST["zipcode"] . "<br>"; 
$dbhost = 'dbase.cs.jhu.edu:3306';
$dbuser = '415_12_jyoung73';
$dbpass = 'societal!Vanward';
$conn = mysql_connect($dbhost, $dbuser, $dbpass); 

if (!$conn) {
  die('Could not connect to dbhost: ' . mysql_error()); 
}
else {
  echo "Connected to dhost dbase.cs.jhu.edu <br>"; 
}

$dbname = 'cs41512_docdb_db'; 
$db_selected = mysql_select_db($dbname, $conn);
if (!$db_selected) {
die('Could not connect to cs41512_docdb_db' . mysql_error()); 
}
else {
echo "Connected to cs41512_docdb_db <br>"; 
}

$query = 'SELECT * FROM Doctors'; 
$result = mysql_query($query);

while($row = mysql_fetch_array($result)) {
printf("Doc name: %s", $row["DFName"]); 
}
mysql_close($conn);

?>