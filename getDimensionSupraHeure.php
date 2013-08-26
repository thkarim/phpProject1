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
$result = mysql_query("SELECT COUNT(*) as countline FROM ONCF_SUPRATOUR_HEURE");
//fetch tha data from the database
 
while ($row = mysql_fetch_array($result)) {
    
   echo $row{"countline"}."<br>"; 
    

}
$result1 = mysql_query("SELECT *   FROM ONCF_SUPRATOUR_HEURE");
   echo mysql_num_fields($result1)."<br>"; 

//close the connection
mysql_close($dbhandle);
?>
