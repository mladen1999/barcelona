
<?php
include('config/app.php');
include('codes/authentication_code.php');

include_once('admin/controllers/ContactController.php');

include("includes/header.php");
include("includes/navbar.php");
?>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php'); ?>
                <div class="">
                    <div class="">
                        <div class="container text-center">
                            <h3>Kontaktirajte nas</h3>
                            <div class="container address">
                                <i class="fa-solid fa-location-dot"></i><a href="https://goo.gl/maps/S4LeVCnr5CFuVp4g6" target="_blank"> C. d'Arístides Maillol, 12, 08028 Barcelona, Španija</a>
                            </div>
                            <div class="container phone">
                                <i class="fa-solid fa-phone"></i><a class="ml-1" href="tel: 0621075706">0621075706</a>
                            </div>
                            <div class="container email">
                                <i class="fa-solid fa-envelope"></i><a class="ml-1" href="mailto: cvetovicmarko2@gmail.com">cvetovicmarko2@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="admin/codes/contact.php" method="POST" enctype="multipart/form-data">
                            <div class="text-center">
                                <div class="mb-3">
                                    <label class="float-left" for="">Ime:</label>
                                    <input type="text" name="name" class="form-control w-100 center" placeholder="Unesite svoje ime" required>
                                </div>

                                <div class="mb-3">
                                    <label class="float-left" for="">Email:</label>
                                    <input type="text" name="email" class="form-control w-100 center" placeholder="Unesite svoj Email" required>
                                </div>

                                <div class="mb-3">
                                    <label class="float-left" for="">Broj telefona:</label> <br />
                                    <input type="text" name="phone" class="form-control w-100 center" placeholder="Unesite broj telefona" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="float-left" for="">Unesite poruku</label>
                                    <textarea class="msgContact form-control center w-100" name="message" rows="4" placeholder="Unesite poruku" required></textarea>
                                </div>

                                <div class="mb-3 pb-5">
                                    <button type="submit" name="send_msg" class="btn btn-primary float-left">Posalji poruku</button>
                                </div>

                                <div class="pt-3">
                                <iframe class=" w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.6864762013015!2d2.12063111528946!3d41.38089597926486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a498f576297baf%3A0x44f65330fe1b04b9!2z0JrQsNC80L8g0L3QvtGD!5e0!3m2!1ssr!2srs!4v1639311775772!5m2!1ssr!2srs" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
    
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