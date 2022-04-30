<?php
include("../../config/app.php");
include_once('../controllers/UserController.php');

if(isset($_POST['delete_btn'])) {
    $id = validateInput($db->conn, $_POST['delete_btn']);
    $user = new UserController;
    $result = $user->delete($id);
    if($result) {
        redirect("Korisnik je uspesno obrisan!", "admin/user-list.php");
    } else {
        redirect("Doslo je do greske!", "admin/user-list.php");
    }
}


?>