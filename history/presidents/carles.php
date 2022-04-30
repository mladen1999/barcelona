<?php
include('../../config/app.php');


include("../../includes/header.php");
include("../../includes/navbar.php");
?>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>" type="text/css">
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 container">
              <?php include('../../message.php'); ?>
              
              <img src="<?= base_url('assets/images/presidents/carles.png') ?>" class=" w-50 mx-auto d-flex " alt="">
              <h1 class="pb-5 text-center">Managing Commission (2020-21)</h1>
                <div class="container">
                <p class="font-weight-bold">Following the resignation of president Josep Maria Bartomeu on 28 October 2020, a Managing Commission was constituted to oversee operations ahead of the election of a new president</p>
                <p class="font-weight-bold">This provisional governing body was chaired by the president of the Economic Commission, Carles Tusquets. Though initially scheduled for 24 January 2021, the presidential elections were postponed to March 7 due to the Covid-19 pandemic. Ten days later, the Managing Commission ceased its functions and handed over to incoming president Joan Laporta.</p>

            </div>
            </div>
            
        </div>
    </div>
</div>
<?php
include("../../includes/footer.php");
?>