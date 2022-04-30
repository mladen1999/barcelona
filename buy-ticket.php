
<?php
include('config/app.php');
include('codes/authentication_code.php');

include_once('admin/controllers/TicketController.php');

include("includes/header.php");
include("includes/navbar.php");
?>
<div class="py-5">
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Kupovina karata</h4>
                    </div>
                    <div class="card-body">
                        <form action="admin/codes/ticket.php" method="POST" enctype="multipart/form-data">
                            <div class="text-center">
                                <div class="mb-3">
                                    <label for="">Izaberite ulaz:</label>
                                    <select name="entrance" class="form-select form-control w-50 center" aria-label="Default select example">
                                        <option selected value="sever">Sever</option>
                                        <option value="jug">Jug</option>
                                        <option value="zapad">Zapad</option>
                                        <option value="istok">Istok</option>
                                        <option value="vip">VIP Loža</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="">Karte za odrasle:</label>
                                    <input type="number" name="ticketA" class="form-control w-50 center" placeholder=0 value=0 min=0 required>
                                </div>

                                <div class="mb-3">
                                    <label for="">Karte za decu:</label> <br />
                                    <input type="number" name="ticketC" class="form-control w-50 center" min=0 value=0 placeholder=0>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="">Izaberite utakmicu:</label> <br />
                                    <select name="game" class="form-select form-control w-50 center" aria-label="Default select example" required>
                                        <option selected value="">Izaberite utakmicu</option>
                                        <option value="match1">FC Barcelona - FC Real Madrid ( 15.05.2022 )</option>
                                    </select>
                                </div>
                                <?php if(isset($_SESSION['authenticated'])) : ?>
                                <div class="mb-3">
                                    <button type="submit" name="buy_ticket" class="btn btn-primary">Kupi karte</button>
                                </div>
                                <?php else : ?>
                                    <button type="submit" title="Morate se ulogovati da biste kupili karte!" name="not_allowed" class="btn btn-primary ">Kupi karte</button>
                                    <?php endif; ?>
                                <h4>Dosupne karte:</h4>
                                <?php
                                    $pro = new TicketController;
                                    $res = $pro->available();
                                    if($res){
                                        foreach($res as $row) {
                                            ?>
                                            <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Sever</th>
                                            <th scope="col">Jug</th>
                                            <th scope="col">Zapad</th>
                                            <th scope="col">Istok</th>
                                            <th scope="col">VIP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $row['sever'];?></td>
                                            <th><?= $row['jug'];?></td>
                                            <th><?= $row['zapad'];?></td>
                                            <th><?= $row['istok'];?></td>
                                            <th><?= $row['vip'];?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                        <?php
                                        }
                                    }
                                ?>
                                
                                <!--

                                -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>