<?php
include('config/app.php');
include('codes/authentication_code.php');

include("includes/header.php");
include("includes/navbar.php");
?>

<div class="py-5">
    <div class="container">
      <?php include('message.php') ?>
      <div class="index" >
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner row div1 text-center container-sm container-md container-lg">
              <div class="carousel-item active">
                <img class="d-block div2 center1 picture1" src="assets/images/barca1.png" alt="First slide">
              </div>
            <div class="carousel-item">
              <img class="d-block div2 center1 picture1" src="assets/images/barca2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block div2 center1 picture1" src="assets/images/barca3.jpeg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
</div>


<?php
include("includes/footer.php");
?>
