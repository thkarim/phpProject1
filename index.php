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
$result = mysql_query("SELECT * FROM ONCF_SUPRATOUR_HEURE");
//fetch tha data from the database
 
while ($row = mysql_fetch_array($result)) {
    
   echo $row{"IDHSUPRA"}."<br>";
   echo $row{"STATIONHEURE1"}."<br>";
   echo $row{"STATIONHEURE2"}."<br>";
   echo $row{"STATIONHEURE3"}."<br>";
   echo $row{"STATIONHEURE4"}."<br>";
   echo $row{"STATIONHEURE5"}."<br>";
   echo $row{"STATIONHEURE6"}."<br>";
   echo $row{"STATIONHEURE7"}."<br>";
   echo $row{"STATIONHEURE8"}."<br>";

}
//close the connection
mysql_close($dbhandle);
?>