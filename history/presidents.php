<?php
include('../config/app.php');

include("../includes/header.php");
?>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <?php include('../message.php'); ?>
                <div class="container">
                    <div class="row container d-flex">
                        <div class="com-sm">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded " src="<?= base_url('assets/images/presidents/joan.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Joan Laporta i Estruch (2021-...)</h5>
                                    <a href="<?= base_url('history/presidents/joan.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>
                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/presidents/carles.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Managing Commission (2020-2021)</h5>
                                    <a href="<?= base_url('history/presidents/carles.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>

                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/presidents/josep.png') ?>" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Josep Maria Bartomeu i Floreta (2014-2020)</h5>
                                    <a href="<?= base_url('history/presidents/josep.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>