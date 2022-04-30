<?php
include('config/app.php');
include('codes/authentication_code.php');

include("includes/header.php");
include("includes/navbar.php");
?>
<?php include('message.php') ?>

<!-- Images used to open the lightbox -->
<div class="py-5">
    <div class="gallery container container-sm container-md container-lg d-flex justify-content-center">

        <div class="row div1 text-center container-sm container-md container-lg">
            <div class="col-sm sizeBettwen">
                <img src="assets/images/barca1.png" onclick="openModal();currentSlide(1)" class="img-thumbnail w-100 h-100 hover-shadow" alt="barca" />
            </div>
            <div class="col-sm sizeBettwen">
              <img src="assets/images/barca2.png" onclick="openModal();currentSlide(2)" class="img-thumbnail w-100 h-100 hover-shadow" alt="barca" />
            </div>
            
            <div class="col-sm sizeBettwen">
              <img src="assets/images/barca3.jpeg" onclick="openModal();currentSlide(3)" class="img-thumbnail w-100 h-100 hover-shadow" alt="barca" />
            </div>
        </div>

    </div>
</div>



<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  
  <div class="modal-content ">

    <div class="mySlides col-12 col-sm-6 col-lg-3">
      
      <div class="numbertext picture2">1 / 3</div>
      
        <img src="assets/images/barca1.png" class=" picture picture2 img-responsive">
      </div>
      <span class="close cursor" onclick="closeModal()">&times;</span>
      <div class="mySlides col-12 col-sm-6 col-lg-3">
        <div class="numbertext picture2">2 / 3</div>
          <img src="assets/images/barca2.png" class="picture picture2 img-responsive ">
        </div>

      <div class="mySlides col-12 col-sm-6 col-lg-3">
        <div class="numbertext picture2">3 / 3</div>
          <img src="assets/images/barca3.jpeg" class="picture picture2 img-responsive" >
      </div>

  
      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>





<?php
include("includes/footer.php");
?>
