<?php  
session_start();

include ("./dbcon/connection.php");
require ("function.php");
$_SESSION['message'] = '';
if($_SERVER['REQUEST_METHOD']== 'POST') {

    // collect the data from post variable 
    // $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)/';
  $username =  $_POST['user_name'];
  $password =  $_POST['user_pass'];

if(!empty($username) && !empty($password)) {
    // $user_len = strlen($username);
    // $pass_len = strlen($password);
//  if($user_len >= 6 && $pass_len >= 8 && preg_match($pattern,$password)) {
// if not empty then save the data to the database
$user_id = random_num(5);
$query = "insert into user (user_id,user_name,password) values('$user_id','$username','$password')";
mysqli_query($con,$query);

header("location: login.php");

// }
// else {

// echo " user must be 6 above and password should be 8 above! and should have one uppercase";
    
// }
}


else {
   
    echo $password;
    echo "please fill-up the form ";
 
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CssForm/signup.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>

   
   
<body>
   
    
    <div class="content">

    
      
    <form action="" class="form" method="post">     
        <div class="container">       

            <div class="navigation">
                <h1>Sign-Up</h1>    
                <label for="user">Username</label>
                <input type="text" placeholder="Enter Username" id="user_name" name = "user_name">
             <label for="pass">Password</label>
             <input type="password" placeholder="Enter Password" id="user_pass" name="user_pass">
             <div class="flex" style="display: flex;"> <button class="loggin" id="botton" style="margin-right:10px ;">  click to login</button>
</div>
            
            </div>
    </div>
    
    </form>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> -->
</script>
</body>
</html>