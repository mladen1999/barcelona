<?php
include('../config/app.php');
include('../controllers/AuthenticationController.php');
include_once('codes/authentication.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/UserController.php');

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
                        <h4>Lista igraca</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ime</th>
                                    <th>Prezime</th>
                                    <th>Email</th>
                                    <th>Rola</th>
                                    <th>Obrisi korisnika</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $users = new UserController;
                                    $result = $users->index();
                                    if($result) {
                                        foreach($result as $row){
                                           ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['fname'] ?></td>
                                            <td><?= $row['lname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['role_as'] ?></td>
                                                <td>
                                                    <!-- <a href="" class="btn btn-danger">Obrisi</a> -->
                                                    <form action="codes/user.php" method="POST">
                                                        <button type="submit" name="delete_btn" value="<?= $row['id'] ?>" class="btn btn-danger">Obrisi</button>
                                                    </form>
                                                </td>
                                        </tr>
                            </tbody>
                            <?php 
                                        }
                                    } else {
                                        echo "Nema korisnika u bazi!";
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("../includes/footer.php");
?>
