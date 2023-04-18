<?php


function check_login($con) {

if(isset($_SESSION['user_id'])) {

$id = $_SESSION['user_id'];
$query = "select * from user where user_id = '$id' limit 1";
$result = mysqli_query($con,$query);
if($result && mysqli_num_rows($result) > 0 ) {

$user_data = mysqli_fetch_assoc($result);
return $user_data;

}

}
// direct to the login.php
header("location: login.php");
die;
}
function random_num($numberOflength) {

$Stringnumber = '';

if($numberOflength < 5) {

    $numberOflength = 5;

}

for ($i=0; $i < $numberOflength ; $i++) { 
    $Stringnumber.=rand(0,9);
}
return $Stringnumber;
}
?>