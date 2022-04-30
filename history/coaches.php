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
                                <img class="card-img-top rounded " src="<?= base_url('assets/images/coaches/xavi.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Xavi Hernández (2021-present)</h5>
                                    <a href="<?= base_url('history/coaches/xavi.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>
                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/coaches/koeman.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Ronald Koeman (2020 - 2021)</h5>
                                    <a href="<?= base_url('history/coaches/koeman.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>

                        <div class="com-sm ml-5">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="<?= base_url('assets/images/coaches/setien.png') ?>" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Quique Setién (2020 - 2020)</h5>
                                    <a href="<?= base_url('history/coaches/setien.php') ?>" class="btn btn-primary d-flex justify-content-center">Detaljnije</a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>