<?php
    
$username = "karim";
$password = "th_159753";
$hostname = "www.db4free.net"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
 
echo "\n";

//select a database to work with
$selected = mysql_select_db("thlocation",$dbhandle) 
  or die("Could not select weebi kamal");
//execute the SQL query and return records
$result = mysql_query("SELECT * FROM  ONCF_TRAIN_HEURES ORDER BY IDH");
//fetch tha data from the database
 
while ($row = mysql_fetch_array($result)) {
    
   echo $row{1}."<br>";
   echo $row{2}."<br>";
   echo $row{3}."<br>";
   echo $row{4}."<br>";
   echo $row{5}."<br>";
   echo $row{6}."<br>";
   echo $row{7}."<br>";
   echo $row{8}."<br>";
   echo $row{9}."<br>";
   echo $row{10}."<br>";
   echo $row{11}."<br>";
   echo $row{12}."<br>";
   echo $row{13}."<br>";
   echo $row{14}."<br>";
   echo $row{15}."<br>";
   echo $row{16}."<br>";
   echo $row{17}."<br>";
   echo $row{18}."<br>";
   echo $row{19}."<br>";
   echo $row{20}."<br>";
   echo $row{21}."<br>"; 


}
//close the connection
mysql_close($dbhandle);
?>
