<?php
include('../config/app.php');
include('../controllers/AuthenticationController.php');
include_once('codes/authentication.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/PlayerController.php');

include("../includes/header.php");
include("../includes/navbar.php");
?>

<div class="py-5">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php include('../message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Dodaj igraca</h4>
                    </div>
                    <div class="card-body">
                        <form action="codes/player.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="">Ime:</label>
                                <input type="text" name="fisrtName" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Prezime:</label>
                                <input type="text" name="lastName" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Poreklo:</label>
                                <input type="text" name="country" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Starost:</label>
                                <input type="number" name="age" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Pozicija:</label>
                                <input type="text" name="position" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Izaberite sliku:</label>
                                <input type="file" name="player_image" class="form-control" accept="image/*">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_player" class="btn btn-primary">Dodaj igraca</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../includes/footer.php");
?>
