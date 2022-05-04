<?php include_once("partials/header_stuff.php"); ?>

<?php
    include_once("connect.php");
    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $sql = "INSERT INTO `users` (`age`, `name`, `password`, `email`) VALUES ('$age', '$name', '$password', '$email');";
        $result = $conn->query($sql);
        if ($result) {
           header('Location: index.php?success=true');
        }
    }
?>

<div class="container mt-5">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title mb-5">
                Sign Up
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto border border-secondary bg-dark">
            <div class="myform form ">
               <form action="" method="POST">
                  <div class="form-group mt-4 mb-4">
                     <input type="text" name="name"  class="form-control my-input" id="name" placeholder="Name">
                  </div>
                  <div class="form-group mb-4">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>
                  <div class="form-group mb-3">
                     <input type="password" min="0" name="password" id="password"  class="form-control my-input" placeholder="Password">
                  </div>
                  <div class="form-group mb-3">
                     <input type="number" min="0" name="age" id="age"  class="form-control my-input" placeholder="Age">
                  </div>
                  <div class="text-center ">
                     <input type="submit" name="submit" class="btn btn-secondary mt-3 send-button tx-tfm">
                  </div>
                  <hr>
                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>


<?php include_once("partials/footer_stuff.php"); ?>