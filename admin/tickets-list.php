<?php
include('../config/app.php');
include('../controllers/AuthenticationController.php');
include_once('codes/authentication.php');

$authenticated = new AuthenticationController;
$authenticated->admin();

include_once('controllers/TicketController.php');

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
                        <h4>Lista kupljenih karata</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Ulaz</th>
                                    <th>Karte za odrasle</th>
                                    <th>Karte za decu</th>
                                    <th>Utakmica</th>
                                    <th>Ukupna cena karata</th>
                                    <th>Jedinstveni broj karte</th>
                                    <th>Ukupan broj kupljenih karata</th>
                                    <th>Obrisi kartu</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    $tickets = new TicketController;
                                    $result = $tickets->index();
                                    if($result) {
                                        foreach($result as $row){
                                           ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['entrance'] ?></td>
                                            <td><?= $row['ticketA'] ?></td>
                                            <td><?= $row['ticketC'] ?></td>
                                            <td><?= $row['game'] ?></td>
                                            <td><?= $row['price'] ?></td>
                                            <td><?= $row['ticketId'] ?></td>
                                            <td><?= $row['totalCards'] ?></td>
                                            <td>
                                                <!-- <a href="" class="btn btn-danger">Obrisi</a> -->
                                                <form action="codes/ticket.php" method="POST">
                                                    <button type="submit" name="delete_ticket" value="<?= $row['id'] ?>" class="btn btn-danger">Obrisi</button>
                                                </form>
                                            </td>
                                        </tr>
                            </tbody>
                            <?php 
                                        }
                                    } else {
                                        echo "Trenutno nema kupljenih karata u bazi!";
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
