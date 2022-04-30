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
                        <h4>Izmeni igraca</h4>
                    </div>
                    <div class="card-body">

                        <?php
                            if(isset($_GET['id'])){
                                $playerId = validateInput($db->conn, $_GET['id']);
                                $player = new PlayerController;
                                $result = $player->edit($playerId);
                                if($result){
                                    ?>
                                
                                    
                        <form action="codes/player.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="playerId" value="<?=$result['id'];?>">

                            <div class="mb-3">
                                <label for="">Ime:</label>
                                <input type="text" name="fisrtName" value="<?= $result['ime']; ?>" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Prezime:</label>
                                <input type="text" name="lastName" value="<?= $result['prezime']; ?>" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Poreklo:</label>
                                <input type="text" name="country" value="<?= $result['poreklo']; ?>" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Starost:</label>
                                <input type="number" name="age" value="<?= $result['godine']; ?>" class="form-control" required />
                            </div>
                            <div class="mb-3">
                                <label for="">Izaberite sliku:</label>
                                <input type="file" name="player_image" class="form-control" accept="image/*">
                                <input type="text" name="player_image_old" value="<?= $result['images']; ?>" class="form-control"  />
                            </div>
                            <div class="mb-3 ml-3">
                                <label>Korisnikova slika:</label><br />
                                <img src="uploads/<?= $result['images']; ?>" width = 100 height = 100 alt="image">            
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_player" class="btn btn-primary mr-5">Izmeni igraca</button>

                                <input type="hidden" name="detele_id" value="<?=$result['id'];?>">
                                <input type="hidden" name="del_player_image" value="<?= $result['images']; ?>">
                                <button type="submit" name="delete_player_image" class="btn btn-danger">Izbrisi sliku igraca</button>
                            </div>
                        </form>

                        <?php
                            } else {
                                echo "<h3>Nije pronadjen igrac!</h3>";
                            }
                        } else {
                            echo "<h3>Doslo je do greske!";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../includes/footer.php");
?>
