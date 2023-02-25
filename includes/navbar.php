<style>
    <?php include '../assets/css/style.css'; ?>
</style>

<nav class="navbar navbar-dark bg-dark navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">

        <a class="navbar-brand" href="<?= base_url('index.php') ?>"><img class="navIcon dropdown-toggle" src="<?= base_url('assets/images/icon1.png') ?>" alt="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> FC Barcelona</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <?php if(isset($_SESSION['authenticated'])) {
                    if($_SESSION['auth_role'] == 1) {
                    ?>
                    <a class="nav-item nav-link" href="<?= base_url('admin/adminIndex.php') ?>">Admin panel</a>
                    <?php
                    }
                }
                ?>
                
                <?php if(isset($_SESSION['authenticated'])) : ?>
                    <a class="nav-item nav-link" href="<?= base_url('news/news.php') ?>">Novosti</a>

                    <a class="nav-item nav-link" href="<?= base_url('gallery.php') ?>">Galerija</a>
                    <a class="nav-item nav-link" href="<?= base_url('buy-ticket.php') ?>">Kupovina karata</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        O Klubu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('history/history.php') ?>">Istorija</a>
                        <a class="dropdown-item" href="<?= base_url('first_team/players.php') ?>">Prva Postava</a>
                    </li>
                    <a class="nav-item nav-link" href="<?= base_url('contact-us.php') ?>">Kontaktirajte nas</a>
                    <li style="right: 1%" class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $_SESSION['auth_user']['user_fname']." ".$_SESSION['auth_user']['user_lname'] ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('my-profile.php') ?>">Profil</a>
                            <form action="" method="POST">
                               <button type="submit" name="logout_btn" class="dropdown-item">Odjavite se</button> 
                            </form>
                        </div>
                    </li>
                    <?php else : ?>
                        <a class="nav-item nav-link" href="<?= base_url('news/news.php') ?>">Novosti</a>
                        <a class="nav-item nav-link" href="<?= base_url('gallery.php') ?>">Galerija</a>
                        <a class="nav-item nav-link" href="<?= base_url('buy-ticket.php') ?>">Kupovina karata</a>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        O Klubu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('history/history.php') ?>">Istorija</a>
                        <a class="dropdown-item" href="<?= base_url('first_team/players.php') ?>">Prva Postava</a>
                    </li>
                        <a class="nav-item nav-link" href="<?= base_url('contact-us.php') ?>">Kontaktirajte nas</a>
                        
                        <div class="dropdown ml-4">
                            <div class="pt-2">
                                <a href=""><img class="navIcon dropdown-toggle" src="<?= base_url('assets/images/user4.png') ?>" alt="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="nav-item nav-link text-dark" href="<?= base_url('register.php') ?>">Registrujte se</a>
                                <a class="nav-item nav-link text-dark" href="<?= base_url('login.php') ?>">Ulogujte se</a>
                            </div>
                        </div>
                <?php endif; ?>
                
            </div>
        </div>
</nav>