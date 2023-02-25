
<?php
include('../config/app.php');

include("../includes/header.php");
include("../includes/navbar.php");
?>
<?php include('../message.php') ?>
<!-- Images used to open the lightbox -->
<h1 class="d-flex justify-content-center pt-3 pb-3">Novosti</h1>
    <div class="d-flex justify-content-center pt-2">
        <!-- Prvi okvir -->
        <div class="card mb-2 novosti1">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="slike/cavi.png" class="card-img" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Izjava Xavija</h5>
                  <p class="card-text">Izjava trenera FC Barcelone nakon poraza</p>
                  <a href="novosti/vest_1.html"><button type="button" class="btn btn-primary">Procitaj</button></a>
                  <p class="card-text"><small class="text-muted">Poslednji put ažurirano pre 30 minuta</small></p>
                </div>
              </div>
            </div>
          </div>
    </div>







<?php
include("../includes/footer.php");
?>
