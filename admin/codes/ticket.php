<?php
include("../../config/app.php");
include_once('../controllers/TicketController.php');

if(isset($_POST['buy_ticket'])) {
    $id = validateInput($db->conn, $_POST['buy_ticket']);
    $ent = validateInput($db->conn,$_POST['entrance']);
    $ticA = validateInput($db->conn,$_POST['ticketA']);
    $ticC = validateInput($db->conn,$_POST['ticketC']);
    $ticketId = rand(1, 1000);
    $total = $ticA + $ticC;
    $price = 0;
    $pro1 = new TicketController;
    $res1 = $pro1->available();
    if($res1){
        foreach($res1 as $row1) {
            $availableNorth = $row1['sever'];
            $availableSouth = $row1['jug'];
            $availableWest = $row1['zapad'];
            $availableEast = $row1['istok'];
            $availableVIP = $row1['vip'];
        }
    }

    if($total == 0) {
        redirect("Morate kupiti barem 1. kartu!", "buy-ticket.php");
    } else if($ticA == 0 && $ticC > 0) {
        redirect("Deca ispod 18. godina ne mogu uci na stadion bez pratnje punoletne osobe!", "buy-ticket.php");
    } else if($ent == 'sever' && $availableNorth < $total) {
        redirect("Nemamo toliko dostupnih karata za Severnu tribinu!", "buy-ticket.php");
    } else if($ent == 'jug' && $availableSouth < $total) {
        redirect("Nemamo toliko dostupnih karata za Juznu tribinu!", "buy-ticket.php");
    } else if($ent == 'zapad' && $availableWest < $total) {
        redirect("Nemamo toliko dostupnih karata za Zapadnu tribinu!", "buy-ticket.php");
    } else if($ent == 'istok' && $availableEast < $total) {
        redirect("Nemamo toliko dostupnih karata za Istocnu tribinu!", "buy-ticket.php");
    } else if($ent == 'vip' && $availableVIP < $total) {
        redirect("Nemamo toliko dostupnih karata za VIP Ložu!", "buy-ticket.php");
    } else if($ent == 'sever') {
        $adult = $ticA * 500;
        $children = $ticC * 300;
        $price = $adult + $children;
    } else if($ent == 'jug') {
        $adult = $ticA * 500;
        $children = $ticC * 300;
        $price = $adult + $children;
    } else if($ent == 'zapad') {
        $adult = $ticA * 800;
        $children = $ticC * 500;
        $price = $adult + $children;
    } else if($ent == 'istok') {
        $adult = $ticA * 800;
        $children = $ticC * 500;
        $price = $adult + $children;
    } else if($ent == 'vip') {
        $adult = $ticA * 1500;
        $children = $ticC * 1000;
        $price = $adult + $children;
    }
    $inputData = [
        'entrance' => validateInput($db->conn,$_POST['entrance']),
        'ticketA' => validateInput($db->conn,$_POST['ticketA']),
        'ticketC' => validateInput($db->conn,$_POST['ticketC']),
        'game' => validateInput($db->conn,$_POST['game']),
        'price' => validateInput($db->conn,$price),
        'ticketId' => validateInput($db->conn,$ticketId),
        'totalCards' => validateInput($db->conn,$total),
    ];

    $ticket = new TicketController;
    $result = $ticket->buyticket($inputData);
    //echo $result;
    if($result) {
        if($ent == 'sever') {
            redirect("Uspesno ste kupiti karte za Sever! ID Vase karte je: $ticketId. Cena je: $price dinara.", "buy-ticket.php");
        } else if($ent == 'jug') {
            redirect("Uspesno ste kupiti karte za Jug! ID Vase karte je: $ticketId. Cena je: $price dinara.", "buy-ticket.php");
        } else if($ent == 'zapad') {
            redirect("Uspesno ste kupiti karte za Zapad! ID Vase karte je: $ticketId. Cena je: $price dinara.", "buy-ticket.php");
        } else if($ent == 'istok') {
            redirect("Uspesno ste kupiti karte za Istok! ID Vase karte je: $ticketId. Cena je: $price dinara.", "buy-ticket.php");
        } else if($ent == 'vip') {
            redirect("Uspesno ste kupiti karte za VIP! ID Vase karte je: $ticketId. Cena je: $price dinara.", "buy-ticket.php");
        }
    } else {
        redirect("Doslo je do greske!", "buy-ticket.php");
    }
}

if(isset($_POST['not_allowed'])) {
    redirect("Morate se ulogovati da biste kupili karte!", "buy-ticket.php");
}

if(isset($_POST['delete_ticket'])) {

    $id = validateInput($db->conn, $_POST['delete_ticket']);

    $ticket = new TicketController;
    $result = $ticket->delete($id);
    if($result) {
        redirect("Karta je uspesno obrisana!", "admin/tickets-list.php");
    } else {
        redirect("Doslo je do greske!", "admin/tickets-list.php");
    }
}

?>