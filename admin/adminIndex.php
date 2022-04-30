<?php
include('../config/app.php');
include('../controllers/AuthenticationController.php');
include_once('codes/authentication.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include("../includes/header.php");
include("../includes/navbar.php");
?>

<div class="py-5">
    <div class="container">
        <?php include('../message.php') ?>
        <div class="container">
            <div class="container">
                <h1 class="text-center">Komandna tabla</h1>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Dodaj igraca</th>
                            <th scope="col">Promeni listu igraca</th>
                            <th scope="col">Lista svih korisnika</th>
                            <th scope="col">Lista kupljenih karata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><a href="<?= base_url('admin/add-player.php') ?>" class="btn btn-primary">Dodaj igraca</a></th>
                            <td><a href="<?= base_url('admin/player-list.php') ?>" class="btn btn-primary">Pogledaj listu</a></td>
                            <td><a href="<?= base_url('admin/user-list.php') ?>" class="btn btn-primary">Pogledaj listu</a></td>
                            <td><a href="<?= base_url('admin/tickets-list.php') ?>" class="btn btn-primary">Pogledaj listu</a></td>
                        </tr>
        
                    </tbody>
                </table>

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Lista poruka</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row"><a href="<?= base_url('admin/messages-list.php') ?>" class="btn btn-primary">Pogledaj listu poruka</a></th>
                        </tr>
        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../includes/footer.php");
?>
