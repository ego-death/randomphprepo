<?php 
include_once('partials/header_stuff.php');
?>

<div class="container mt-5">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title mb-5">
                Login
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto border border-secondary bg-dark">
            <div class="myform form p-3">
               <form action="" method="POST">
                  <div class="form-group mb-4">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>
                  <div class="form-group mb-3">
                     <input type="password" min="0" name="password" id="password"  class="form-control my-input" placeholder="Password">
                  </div>
                  <div class="text-center ">
                     <input type="submit" name="submit" class="btn btn-secondary mt-3 send-button tx-tfm">
                  </div>
                  <hr>
               </form>
            </div>
         </div>
      </div>
   </div>