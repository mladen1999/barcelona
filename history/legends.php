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
                                <img class="card-img-top rounded " src="<?= base_url('assets/images/legends/xavi.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Xavi Hernández</h5>
                                    <a href="<?= base_url('history/legends/xavi.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>
                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/legends/iniesta.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Andrés Iniesta</h5>
                                    <a href="<?= base_url('history/legends/iniesta.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>

                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/legends/messi.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Lionel Messi</h5>
                                    <a href="<?= base_url('history/legends/messi.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>