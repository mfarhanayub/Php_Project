<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 <style>
    @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
h1{
  text-align: center;
   color: white;
}
label{
  color: white;
}
.formbold-btn {
    text-align: center;
    font-size: 16px;
    border-radius: 6px;
    padding: 14px 20px;
    font-weight: 600;
    background-color: transparent;
    border: 2px solid rgba(255, 0, 0, 0.829);
    color: white;
    cursor: pointer;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
 </style>
  <main>


    <form method="post">
    <section class="h-100 h-custom" style="background-color:black; height: 100%; width: 100%;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-6">
              <div class="card rounded-3 bg-dark">
                
                <div class="card-body p-4 p-md-5">
<h1>Email Form</h1>      
                  <form class="px-md-2">
      
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1q" class="form-control" name="name">
                      <label class="form-label" for="form3Example1q">Name</label>
                    </div>
      
                    <div class="row">
                      <div class="col-md-6 mb-4">
      
                        <div class="form-outline datepicker">
                          <input type="email" class="form-control" id="exampleDatepicker1"  name="email">
                          <label for="exampleDatepicker1" class="form-label">Enter Email</label>
                        </div>
      
                      </div>
                      <div class="col-md-6 mb-4">
                        <input type="text" class="form-control" id="exampleDatepicker1"  name="subject">
                        <label for="exampleDatepicker1" class="form-label">Enter Subject</label>
                       
      
                      </div>
                    </div>
      
                   
                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                     <textarea name="message"  cols="20" rows="5" placeholder="Enter Message" required></textarea>
                    </div>
      
                    <button type="submit" class="formbold-btn" name="insert">Submit</button>
      
                  </form>
      
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>


<?php
if(isset($_POST['insert'])){
$to = $_POST['email'];
$name = $_POST['name'];
$sender = 'farifarhan466@gamil.com';
$subject = $_POST['subject'];
$message =$_POST['message'];

if(mail($to,$name,$sender,$subject,$message))
{
    echo"Email Has Been Send";
}
else{
    echo"error";
}

}
?>