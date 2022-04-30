<?php
include('../config/app.php');
include('../controllers/AuthenticationController.php');
include_once('codes/authentication.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/ContactController.php');

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
                        <h4>Lista poruka</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ime</th>
                                    <th>Email</th>
                                    <th>Broj telefona</th>
                                    <th>Poruka</th>
                                    <th>Obrisi poruku</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $msg = new ContactController;
                                    $result = $msg->index();
                                    if($result) {
                                        foreach($result as $row){
                                           ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['name'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['phone'] ?></td>
                                            <td><?= $row['message'] ?></td>
                                            <td>
                                                <!-- <a href="" class="btn btn-danger">Obrisi</a> -->
                                                <form action="codes/contact.php" method="POST">
                                                    <button type="submit" name="delete_msg" value="<?= $row['id'] ?>" class="btn btn-danger">Obrisi</button>
                                                </form>
                                            </td>
                                        </tr>
                            </tbody>
                            <?php 
                                        }
                                    } else {
                                        echo "Trenutno nema poruka u bazi!";
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
