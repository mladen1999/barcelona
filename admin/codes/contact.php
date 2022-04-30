<?php
include("../../config/app.php");
include_once('../controllers/ContactController.php');

if(isset($_POST['send_msg'])) {
    $id = validateInput($db->conn, $_POST['send_msg']);

    $inputData = [
        'name' => validateInput($db->conn,$_POST['name']),
        'email' => validateInput($db->conn,$_POST['email']),
        'phone' => validateInput($db->conn,$_POST['phone']),
        'message' => validateInput($db->conn,$_POST['message']),
    ];

    $contact = new ContactController;
    $result = $contact->sendMsg($inputData);
    //echo $result;
    if($result) {
        redirect("Uspesno ste poslali poruku!", "contact-us.php");
    } else {
        redirect("Doslo je do greske!", "contact-us.php");
    }
}

if(isset($_POST['delete_msg'])) {

    $id = validateInput($db->conn, $_POST['delete_msg']);

    $contact = new ContactController;
    $result = $contact->delete($id);
    if($result) {
        redirect("Poruka je uspesno obrisana!", "admin/messages-list.php");
    } else {
        redirect("Doslo je do greske!", "admin/messages-list.php");
    }
}

?>