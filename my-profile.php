<?php
include('config/app.php');
include('codes/authentication_code.php');
include_once('controllers/AuthenticationController.php');

$data = $authenticated->authDetail();
include("includes/header.php");
include("includes/navbar.php");

$authenticated = new AuthenticationController;
$authenticated->checkIsLoggedIn();
?>

<div class="py-5">
    <div class="container">
        <?php include('message.php') ?>
        <h1 class="klasa">Korisnicki profil.</h1>
        <hr />
        <h3>Ime: <?= $data['fname'] .' '. $data['lname']; ?></h3>
        <h3>Email: <?= $data['email']; ?></h3>
        <h3>Nalog je kreiran: <?= date('d-m-Y', strtotime($data['created_at'])); ?></h3>
        <?php
        if($data['role_as'] == 1){
            $print='Admin';
            ?>
            <h3>Pozicija: <?= $print ?></h3>
            <?php
        } else {
            $print ='Korisnik';
            ?>
            <h3>Pozicija: <?= $print ?></h3>
            <?php
        }
        ?>
    </div>
</div>
<?php
include("includes/footer.php");
?>
