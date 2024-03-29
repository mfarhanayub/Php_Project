<?php
include('db.php');
$id = $_GET['id'];
$name = $_GET['en'];
$eml = $_GET['ee'];
$pass = $_GET['ep'];
$cpass = $_GET['ec'];

if(isset($_POST['btnedit'])){
    $fname = $_POST['fn'];
    $email = $_POST['em'];
    $password = $_POST['pas'];
    $cpassword = $_POST['cpas'];

$query = "UPDATE `signup_tb` SET
`first_name`='$fname',`user_email`='$email',`user_password`='$password',`conform_password`=' $cpassword' WHERE user_id = '$id'";
$go = mysqli_query($connect,$query);
if($go){
  echo"data insert";
}

else{
    echo " Data not inserted";
}
}


?>
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

<body style="background-color: black; color: white;">
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <br><br><br>
<!-- Section: Design Block -->
<section class="text-center mt-5" >
   
  
    <div class="card mx-4 mx-md-5 shadow-5-strong mt-5" style="
          margin-top: -100px;
          background: #242424;
          color: white;
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">
  
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="post" action="editback.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control"  name="fn"  value="<?php echo $name ?>"/>
                    <label class="form-label" for="form3Example1">Name</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="email" id="form3Example2" class="form-control"  name="em"  value="<?php echo $eml ?>"/>
                    <label class="form-label" for="form3Example2">Email</label>
                  </div>
                </div>
              </div>
  
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example3" class="form-control"  name="pas" value="<?php echo $pass ?>"/>
                <label class="form-label" for="form3Example3">Password</label>
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control"  name="cpas" value="<?php echo $cpass ?>"/>
                <label class="form-label" for="form3Example4">Conform Password</label>
              </div>
  
              <!-- Checkbox -->
             
              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4" name="btnedit"> 
               Edit
              </button>
  
              <!-- Register buttons -->
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>