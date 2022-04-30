<?php
include('../config/app.php');
include_once('../admin/controllers/PlayerController.php');
include("../includes/header.php");
include("../includes/navbar.php");
?>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-8">
              <?php include('../message.php'); ?>
                
              <!-- GOLMANI -->              
            <h3 class="text-center pt-3">GOLMANI</h3>
            <div class="container d-flex justify-content-center">
    <div class="row col-md-12 d-flex justify-content-center">
    <?php
                $players = new PlayerController;
                $result = $players->goalkeepers();
                if($result) {
                foreach($result as $row){
                                        ?>
        <div class="col-md-3">
            <img class="img-thumbnail" src="../admin/uploads/<?php echo $row['images'] ?>"  >
            <div class="card-body">
                        <h5 class="font-weight-bold text-center"><?= $row['ime'] . ' ' . $row['prezime'] ?></h3>
                    </div>
        </div>
        <?php 
                    }
                } else {
                        echo "Nema igraca u bazi!";
                    }
                ?>
        </div>
    </div>
    
    <h3 class="text-center pt-3">ODBRANA</h3>
    <div class="container d-flex justify-content-center">
    <div class="row col-md-12">
    <?php
                $players = new PlayerController;
                $result = $players->defenders();
                if($result) {
                foreach($result as $row){
                                        ?>
        <div class="col-md-3">
            <img class="img-thumbnail" src="../admin/uploads/<?php echo $row['images'] ?>"  >
            <div class="card-body">
                        <h5 class="font-weight-bold text-center"><?= $row['ime'] . ' ' . $row['prezime'] ?></h3>
                    </div>
        </div>
        <?php 
                    }
                } else {
                        echo "Nema igraca u bazi!";
                    }
                ?>
        </div>
    </div>

    <h3 class="text-center pt-3 pb-1">SREDINA</h3>
    <div class="container d-flex justify-content-center">
    <div class="row col-md-12">
    <?php
                $players = new PlayerController;
                $result = $players->midfielders();
                if($result) {
                foreach($result as $row){
                                        ?>
        <div class="col-md-3">
            <img class="img-thumbnail" src="../admin/uploads/<?php echo $row['images'] ?>"  >
            <div class="card-body">
                        <h5 class="font-weight-bold text-center"><?= $row['ime'] . ' ' . $row['prezime'] ?></h3>
                    </div>
        </div>
        <?php 
                    }
                } else {
                        echo "Nema igraca u bazi!";
                    }
                ?>
        </div>
    </div>

    <h3 class="text-center pt-3 pb-1">NAPADACI</h3>
    <div class="container d-flex justify-content-center">
    <div class="row col-md-12">
    <?php
                $players = new PlayerController;
                $result = $players->forwards();
                if($result) {
                foreach($result as $row){
                                        ?>
        <div class="col-md-3">
            <img class="img-thumbnail" src="../admin/uploads/<?php echo $row['images'] ?>"  >
            <div class="card-body">
                        <h5 class="font-weight-bold text-center"><?= $row['ime'] . ' ' . $row['prezime'] ?></h3>
                    </div>
        </div>
        <?php 
                    }
                } else {
                        echo "Nema igraca u bazi!";
                    }
                ?>
        </div>
    </div>

    <!-- KRAJ -->
            </div>                         
        </div>
    </div> 
</div>

<?php include("../includes/footer.php"); ?>