<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signup/Login form</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Raleway:300,600" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="login.css">

</head>
<body>
   <!-- <div id="preloader"></div>
   <div style="display: none;">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/umsrQSA2iOM" title="YouTube video player"
       frameborder="0"
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
       allowfullscreen></iframe>
       <iframe width="560" height="315" src="https://www.youtube.com/embed/umsrQSA2iOM" title="YouTube video player"
       frameborder="0"
       allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
       allowfullscreen></iframe>
   </div> -->
<!-- partial:index.partial.html -->
<div class="container">
   <section id="formHolder">

      <div class="row">

         <!-- Brand Box -->
         <div class="col-sm-6 brand">

            <div class="heading">
               <h2>Ustaad auto</h2>
               <p>Management Services Division</p>
            </div>

            <div class="success-msg">
               <p>Great! You are one of our members now</p>
               <a href="#" class="profile">Your Profile</a>
            </div>
         </div>


         <!-- Form Box -->
         <div class="col-sm-6 form">

            <!-- Login Form -->
            <div class="login form-peice switched">
               <form class="login-form" action="logback.php" method="post">
                  <div class="form-group">
                     <label for="username">Email</label>
                     <input type="email" name="le" id="username" required 
                     value="<?php if(isset($_COOKIE['emailcookie'])) {echo $_COOKIE['emailcookie'];}  ?>">

                  </div>

                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="lp" id="loginPassword"  required
                     value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie'];}  ?>">
                  </div>
                 
                  <label>
                     <input type="checkbox" name="rem" class="check">  Remember me 
                  </label>  
                     
                  
  <br><br>
  <div class="CTA">
  
   <a href="" class="switch">Forget Password</a>
</div>
                  <div class="CTA">
                     <input type="submit" value="Login" name="loginsert">
                     <a href="#" class="switch">Create Account?</a>
                  </div>
               </form>
            </div><!-- End Login Form -->


            <!-- Signup Form -->
            <div class="signup form-peice">
               <form class="signup-form" action="signback.php" method="post">

                  <div class="form-group">
                     <label for="username">User Name</label>
                     <input type="text" name="fn" id="" class="username">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Address</label>
                     <input type="email" name="em" id="email" class="email">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="pas" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="cpas" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="SignUp" name="insert">
          
                     <a href="#" class="switch">Already a member?</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>

   </section>
   <script>
      var loader = document.getElementById("preloader");
      window.addEventListener("load", function () {
   
        loader.style.display = "none";
   
   
      })
   
    </script>

  
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script><script  src="./script.js"></script>


</body>
</html>
