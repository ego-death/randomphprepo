<?php include_once("partials/header_stuff.php"); ?>
<?php
    if(isset($_GET["success"])) {
        echo '<div class="alert alert-success" role="alert">Account Created Successfully! You may login
        <a href="login.php">here</a></div>';
    } 
?>
<h1 class="title">ProjectQuik</h1>
<h4 class="title mt-4">Your one-stop shop for project requirements and creation</h4>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="https://www.ipma.world/assets/Dollarphotoclub_65655745-1.jpg" alt="" srcset="" class="img-fluid">
        </div>
        <div class="col-md-6 text-center">
            <img src="https://d1rytvr7gmk1sx.cloudfront.net/wp-content/uploads/2018/03/istock-844535646.jpg" alt="" srcset="" class="img-fluid">
        </div>
    </div>
</div>

<?php include_once("partials/footer_stuff.php"); ?>