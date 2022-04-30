<?php
include("../../config/app.php");
include_once('../controllers/PlayerController.php');

if(isset($_POST['delete_btn'])) {
    $id = validateInput($db->conn, $_POST['delete_btn']);
    $player = new PlayerController;
    $result = $player->delete($id);
    if($result) {
        redirect("Igrac je uspesno obrisan!", "admin/player-list.php");
    } else {
        redirect("Doslo je do greske!", "admin/player-list.php");
    }
}

if(isset($_POST['update_player'])){
    $id = validateInput($db->conn,$_POST['playerId']);
    $inputData = [
        'fisrtName' => validateInput($db->conn,$_POST['fisrtName']),
        'lastName' => validateInput($db->conn,$_POST['lastName']),
        'country' => validateInput($db->conn,$_POST['country']),
        'age' => validateInput($db->conn,$_POST['age']),
        'player_image' => validateInput($db->conn,$_FILES['player_image']['name']),
                
    ];
    
    $allow_extension = array('gif', 'png', 'jpg', 'jpeg');
    $filename = $_FILES['player_image']['name'];
    $file_extension = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($file_extension, $allow_extension)) {
        redirect ("Mozete koristiti sledece formate: jpg, png, jpeg i gif !", "admin/edit-player.php?id=$id");
    } else {
        if(file_exists("../uploads/" . $_FILES['player_image']['name'])) {
            $filename = $_FILES['player_image']['name'];
            redirect ("Slika ".$filename." vec postoji!", "admin/edit-player.php?id=$id");
        } else {
            $player = new PlayerController;
            $result = $player->update($inputData, $id);
            if($result) {
                move_uploaded_file($_FILES["player_image"]["tmp_name"], "../uploads/".$_FILES["player_image"]["name"]);
                redirect("Podaci su uspesno izmenjeni!", "admin/player-list.php");
            } else {
                redirect("Doslo je do greske!", "admin/player-list.php");
            }
        }
    }

}

if(isset($_POST['save_player'])){
    $inputData = [
        'fisrtName' => validateInput($db->conn,$_POST['fisrtName']),
        'lastName' => validateInput($db->conn,$_POST['lastName']),
        'country' => validateInput($db->conn,$_POST['country']),
        'age' => validateInput($db->conn,$_POST['age']),
        'player_image' => validateInput($db->conn,$_FILES['player_image']['name']),
        'position' => validateInput($db->conn,$_POST['position']),
    ];

    $player = new PlayerController;
    $result = $player->create($inputData);
    //echo $result;
    if($result) {
        move_uploaded_file($_FILES["player_image"]["tmp_name"], "../uploads/".$_FILES["player_image"]["name"]);
        redirect("Igrac je uspesno dodat!", "admin/player-list.php");
    } else {
        redirect("Doslo je do greske!", "admin/player-list.php");
    }
}

if(isset($_POST['delete_player_image'])) {
    $id = $_POST['detele_id'];
    $del_player_image = $_POST['del_player_image'];
    $sql = "UPDATE players SET images='noprofil.jpg' WHERE id='$id' ";
    $query = mysqli_query($db->conn, $sql);
    $nop = 'noprofil.jpg';
    if($query && $del_player_image!=$nop) {
        unlink("../uploads/".$del_player_image);
        redirect ("Slika je izbisana", "admin/edit-player.php?id=$id");
    } else {

        redirect ("Slika nije izbisana", "admin/edit-player.php?id=$id");
    }
}

?>