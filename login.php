<?php


session_start();
include "./dbcon/connection.php";
include "function.php";
// include "function.php";
if(isset($_POST['submit'])) {
    $user =   $_POST['user_name'];
    $pass =   $_POST['user_pass'];
   if(!empty($user) && !empty($pass)) {
    //read from database
  $query = "select * from user where user_name = '$user'  limit 1";
  $result = mysqli_query($con,$query);
 
if($result) {
    if($result && mysqli_num_rows($result) > 0) {

    $user_data = mysqli_fetch_assoc($result);
   if($user_data['password'] == $pass) {
    $_SESSION['user_id'] = $user_data['user_id'];
    header("location:index.php");
   
   }
     }
    
}
echo"Please Fill-Out Some Valid Credintials1";
}

else {

    echo"Please Fill-Out Some Valid Credintials";
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
    <link rel="stylesheet" href="./CssForm/login.css">
   
</head>

   
   
<body>
   
    <!-- <div class="loading">
        <div class="loading-animation"></div>
    </div> -->
    <button class="signin-open"> Sign-In</button>
    <div class="content">
       
    <form action="" class="form" method="post">     
        <div class="container">       
          
            <span class="close"> &times;</span>
            <div class="navigation">
                <h1>Log-in</h1>    
                <label for="user">Username</label>
                <input type="text" placeholder="Enter Username" id="user_name" name = "user_name">
             <label for="pass">Password</label>
             <input type="password" placeholder="Enter Password" id="user_pass" name = "user_pass">
             <div class="logOrsign" style="display:
             flex">
             <button class="loggin" id="btn" name = "submit">Login</button>
             <button class="loggin" id="btn" style="margin-left: 10px;"> <a href="signup.php">sign-up</a> </button>
             </div>
           
            
            </div>
    </div>
    
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <script> 
 
const closetag = document.querySelector('.close');
 const  opentag = document.querySelector('.signin-open');
 const  modal = document.querySelector('.form');

opentag.addEventListener("click",() => {
    modal.style.display = "block";
    opentag.style.display = "none";
});

window.addEventListener("click",(e) => {
    if(e.target==closetag) {
        modal.style.display = "none";
        opentag.style.display = "block";
    }
});
// $(window).on('load', function() {
//     $('.loading').fadeOut(1000);
//     $('.loggin').fadeIn(1000);
// });  
</script> 



<?php  
  

?>







</body>
</html>