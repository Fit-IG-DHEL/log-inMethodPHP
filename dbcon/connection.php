
<?php 


 $localhost = "localhost"; // server name
 $username = "root"; // database username
 $password = ""; // database password
 $dbname = "portfolio"; // database name 

if($con = mysqli_connect($localhost,$username, $password,$dbname)) {

}
else {
echo "not connected";

}

?>