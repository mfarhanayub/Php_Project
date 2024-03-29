<?php error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Car Service Points</title>



        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>

        <link href="css/style.css" rel="stylesheet">

    </head>
    <body style="background-color: black; color: white;">
    <header>

    <style>
        /* navbar */
.navbar{
  background-color:#242424 ;
}
#navbar {
  position: fixed; /* Sticky/fixed navbar */
  top: 0; /* At the top */
  z-index: 99;
}
.logo{
  height: 120px;
  width: 170px;
 margin-left: 10%;
}
.nav-item a{
   font-size: medium;
   font-weight: normal;
   font-family: "poppins";
   margin-right: 10px;
   color: white;

}
@media(min-width:320px) and (max-width:550px){
  .logo{
    height: 60px;
    width: 80px;
    margin-left: 0%;
  }
}
.nav-item  a:hover{
    color: rgba(255, 0, 0, 0.829);
}
.dropdown-menu{
    background-color: black;
    width: 650px;
}
.dropdown-item a{
    font-size: medium;
   font-weight: normal;
   font-family: "poppins";
   margin-right: 40px; 
   width: 10px; 
}
.dropdown-item:hover{
    background-color: black;
}
.button {
    display: inline-flex;
   padding: 10px 10px;
    border: 2px solid rgba(255, 0, 0, 0.829);
    margin: 20px 20px 20px 20px;
    color: white;
    text-transform: uppercase;
    text-decoration: none;
    font-size: .8em;
    letter-spacing: 1.5px;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    font-family: 'poppins';
    font-weight: 900;
    font-size: medium;
  }
  a {
    color: white;
    text-decoration: none;
    letter-spacing: 1px;
  }
  #button-5 {
  position: relative;
  overflow: hidden;
  cursor: pointer;
}

#button-5 a {
  position: relative;
  transition: all .45s ease-Out;
}

#translate {
  transform: rotate(50deg);
  width: 100%;
  height: 250%;
  left: -200px;
  top: -30px;
  background: rgba(255, 0, 0, 0.829);
  position: absolute;
  transition: all .3s ease-Out;
}

#button-5:hover #translate {
  left: 0;
}

#button-5:hover a {
  color: white;
}
/*-------- footer----------- */
footer{
 
 background: black;
 width: 100%;
 bottom: 0;
 left: 0;
}
footer::before{
 content: '';
 position: absolute;
 left: 0;
 top: 100px;
 height: 1px;
 width: 100%;

}
footer .content{
 max-width: 1250px;
 margin: auto;
 padding: 30px 40px 40px 40px;
}
footer .content .top{
 display: flex;
 align-items: center;
 justify-content: space-between;
 margin-bottom: 50px;
}
.content .top .logo-details{
 color: #fff;
 font-size: 30px;
}
.content .top .media-icons{
 display: flex;
}
.content .top .media-icons a{
 height: 40px;
 width: 40px;
 margin: 0 8px;
 border-radius: 50%;
 text-align: center;
 line-height: 40px;
 color: #fff;
 font-size: 17px;
 text-decoration: none;
 transition: all 0.4s ease;
}
.top .media-icons a:nth-child(1){
 background: #242424;
}
.top .media-icons a:nth-child(1):hover{
 color: rgba(255, 0, 0, 0.829);
 background: #fff;
}
.top .media-icons a:nth-child(2){
 background: #242424;
}
.top .media-icons a:nth-child(2):hover{
 color:rgba(255, 0, 0, 0.829);
 background: #fff;
}
.top .media-icons a:nth-child(3){
 background:#242424;
}
.top .media-icons a:nth-child(3):hover{
 color: rgba(255, 0, 0, 0.829);
 background: #fff;
}
.top .media-icons a:nth-child(4){
 background:#242424;
}
.top .media-icons a:nth-child(4):hover{
 color: rgba(255, 0, 0, 0.829);
 background: #fff;
}
.top .media-icons a:nth-child(5){
 background: #242424;
}
.top .media-icons a:nth-child(5):hover{
 color: rgba(255, 0, 0, 0.829);
 background: #fff;
}
footer .content .link-boxes{
 width: 100%;
 display: flex;
 justify-content: space-between;
}
footer .content .link-boxes .box{
 width: calc(100% / 5 - 10px);
}
.content .link-boxes .box .link_name{
 color: #fff;
 font-size: 18px;
 font-weight: 400;
 margin-bottom: 10px;
 position: relative;
}
.link-boxes .box .link_name::before{
 content: '';
 position: absolute;
 left: 0;
 bottom: -2px;
 height: 2px;
 width: 35px;
 background: #fff;
}
.content .link-boxes .box li{
 margin: 6px 0;
 list-style: none;
}
.content .link-boxes .box li a{
 color: #fff;
 font-size: 14px;
 font-weight: 400;
 font-family: 'Open Sans';
 text-decoration: none;
 opacity: 0.8;
 transition: all 0.4s ease
}
.content .link-boxes .box li a:hover{
 color: red;

 text-decoration: none;

}
.content .link-boxes .box li a:hover{
 opacity: 1;
 text-decoration: underline;
}
.content .link-boxes .input-box{
 margin-right: 55px;
}
.link-boxes .input-box input{
 height: 40px;
 width: calc(100% + 55px);
 outline: none;
 border: 2px solid #AFAFB6;
 background: #242424;
 border-radius: 4px;
 padding: 0 15px;
 font-size: 15px;
 color: #fff;
 margin-top: 5px;
}
.link-boxes .input-box input::placeholder{
 color: #AFAFB6;
 font-size: 16px;
}
.link-boxes .input-box input[type="button"]{
 background: #fff;
 color: #140B5C;
 border: none;
 font-size: 18px;
 font-weight: 500;
 margin: 4px 0;
 opacity: 0.8;
 cursor: pointer;
 transition: all 0.4s ease;
}
.input-box input[type="button"]:hover{
 opacity: 1;
}
footer .bottom-details{
 width: 100%;
 background: #242424;;
}
footer .bottom-details .bottom_text{
 max-width: 1250px;
 margin: auto;
 padding: 20px 40px;
 display: flex;
 justify-content: space-between;
}
.bottom-details .bottom_text span,
.bottom-details .bottom_text a{
 font-size: 14px;
 font-weight: 300;
 color: #fff;
 opacity: 0.8;
 text-decoration: none;
}
.bottom-details .bottom_text a:hover{
 opacity: 1;
 text-decoration: underline;
}
.bottom-details .bottom_text a{
 margin-right: 10px;
}
@media (max-width: 900px) {
 footer .content .link-boxes{
   flex-wrap: wrap;
 }
 footer .content .link-boxes .input-box{
   width: 40%;
   margin-top: 10px;
 }
}
@media (max-width: 700px){

 .content .top .logo-details{
   font-size: 26px;
 }
 .content .top .media-icons a{
   height: 35px;
   width: 35px;
   font-size: 14px;
   line-height: 35px;
 }
 footer .content .link-boxes .box{
   width: calc(100% / 3 - 10px);
 }
 footer .content .link-boxes .input-box{
   width: 60%;
 }
 .bottom-details .bottom_text span,
 .bottom-details .bottom_text a{
   font-size: 12px;
 }
}
@media (max-width: 520px){
 footer::before{
   top: 145px;
 }
 footer .content .top{
   flex-direction: column;
 }
 .content .top .media-icons{
   margin-top: 16px;
 }
 footer .content .link-boxes .box{
   width: calc(100% / 2 - 10px);
 }
 footer .content .link-boxes .input-box{
   width: 100%;
 }
}
.fothed{
 font-family: "poppins";
 font-size: 40px;
 font-weight: normal;
}
.fottxt{
 font-family: 'Open Sans';
 font-size: medium;
}
    </style>

<!-- place navbar here -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
  <div class="container-fluid">

    <!-- LOGO -->
    <img src="image/F L 1.png" alt="" class="logo">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="ser1.html">Car detailing</a></li>

            <li><a class="dropdown-item" href="ser2.html">Rubbing polish</a></li>

            <li><a class="dropdown-item" href="ser3.html">Car wash</a></li>


            <li><a class="dropdown-item" href="ser4.html">Interior cleaning</a></li>


            <li><a class="dropdown-item" href="ser5.html">Interior cleaning</a></li>


            <li><a class="dropdown-item" href="ser6.html">Throtle body cleaning</a></li>


            <li><a class="dropdown-item" href="ser7.html">Denting </a></li>


            <li><a class="dropdown-item" href="ser8.html">Painting</a></li>


            <li><a class="dropdown-item" href="ser9.html">Oil change</a></li>


            <li><a class="dropdown-item" href="ser10.html">Tank service </a></li>

            <li><a class="dropdown-item" href="ser11.html">Engine repair </a></li>

            <li><a class="dropdown-item" href="ser12.html">Break repair </a></li>

            <li><a class="dropdown-item" href="ser13.html">Tire repair</a></li>

          </ul>


        </li>
        <li class="nav-item">
          <a class="nav-link" href="location.php">Service Point</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq.html">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>

      </ul>
      <div class="button" id="button-5">
        <div id="translate"></div>
        <a href="contact.html">Get An Appointment</a>
      </div>
      <a href="/my_product/admin/index.php"><i class="fa-solid fa-user fa-2x" style="margin-left: 50px; color: red;"></i></a>
     
    </div>
  </div>
</nav>

</header>
 <br><br><br>       
        
        <!-- Page Header Start -->
        <div class="page-header mt-5">
            <div class="container mt-5" >
                <div class="row">
                    <div class="col-12"> 
                        <h2 style="color: white;">Services Points</h2>
                    </div>
                   
                </div>
            </div>
        </div>
        
        
        
        <!-- Location Start -->
        <div class="location">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-header text-center">
                            <p>Service Points</p>
                            <h2 style="color: black;">Car Service & Care Points</h2>
                        </div>
                        <div class="row">
                            <?php $sql = "SELECT * from tblwashingpoints";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{               ?>  
                            <div class="col-md-6">
                                <div class="location-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="location-text">
                                <h3 style="color: white;"><?php echo htmlentities($result->washingPointName);?></h3>
                    <p><?php echo htmlentities($result->washingPointAddress);?></p>
                    <p><strong>Call:</strong><?php echo htmlentities($result->contactNumber);?></p>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                      
                        </div>
                    </div>
           
                </div>
            </div>
        </div>
      
        <footer>
      <div class="container-fluid p-0">
        <div class="content">
          <hr>
          <div class="top">
            <div class="logo-details">
              <img src="image/F L 2.png" alt="" height="150px" width="170px">
            </div>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <div class="col-md-3">

              <h1 class="fothed">Ustaad Autos</h1>
              <p class="fottxt">Every service is rigorously screened and constantly rated to ensure you get the best
                service.</p>

            </div>
            <ul class="box">
              <li class="link_name">Company</li>
              <li><a href="home.html">Home</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="contact.html">Contact us</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>

            <ul class="box">
              <li class="link_name">Services</li>
              <li><a href="#">BRAKE REPAIR</a></li>
              <li><a href="#">ENGINE REPAIR</a></li>
              <li><a href="#">TIRE REPAIR</a></li>
              <li><a href="#">OIL CHANGE</a></li>
            </ul>

            <ul class="box input-box">
              <li class="link_name">Subscribe</li>
              <li><input type="text" placeholder="Enter your email"></li><br>
              <div class="detailbtn" id="button-5">
                <div id="translate"></div>
                <a href="#">Subscribe</a>
              </div>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2021 <a href="#">CodingLab.</a>All rights reserved</span>
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & condition</a>
            </span>
          </div>
        </div>
      </div>
    </footer>
        

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
