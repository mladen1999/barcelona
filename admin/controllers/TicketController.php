<?php

class TicketController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
    
    public function index(){
        $ticketQuery = "SELECT * FROM tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function indexx(){
        $ticketQuery = "SELECT entrance FROM tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function buyticket($inputData){
        $data = "'" . implode ( "','", $inputData) . "'";
        $decrease = $inputData['totalCards'];
        $entrance = $inputData['entrance'];
        if($entrance == 'sever') {
            $ticketQuery = "INSERT INTO tickets (entrance, ticketA, ticketC, game, price, ticketId, totalCards) VALUES ($data)";
            $update = "UPDATE available_tickets SET sever=GREATEST(0,sever-$decrease) ";
            $result1 = $this->conn->query($update);
            $result = $this->conn->query($ticketQuery);
            if($result && $update) {
                return true;
            } else {
                return false;
            }
        } else if($entrance == 'jug') {
            $ticketQuery = "INSERT INTO tickets (entrance, ticketA, ticketC, game, price, ticketId, totalCards) VALUES ($data)";
            $update = "UPDATE available_tickets SET jug=GREATEST(0,jug-$decrease) ";
            $result1 = $this->conn->query($update);
            $result = $this->conn->query($ticketQuery);
            if($result && $update) {
                return true;
            } else {
                return false;
            }
        } else if($entrance == 'zapad') {
            $ticketQuery = "INSERT INTO tickets (entrance, ticketA, ticketC, game, price, ticketId, totalCards) VALUES ($data)";
            $update = "UPDATE available_tickets SET zapad=GREATEST(0,zapad-$decrease) ";
            $result1 = $this->conn->query($update);
            $result = $this->conn->query($ticketQuery);
            if($result && $update) {
                return true;
            } else {
                return false;
            }
        } else if($entrance == 'istok') {
            $ticketQuery = "INSERT INTO tickets (entrance, ticketA, ticketC, game, price, ticketId, totalCards) VALUES ($data)";
            $update = "UPDATE available_tickets SET istok=GREATEST(0,istok-$decrease) ";
            $result1 = $this->conn->query($update);
            $result = $this->conn->query($ticketQuery);
            if($result && $update) {
                return true;
            } else {
                return false;
            }
        } else if($entrance == 'vip') {
            $ticketQuery = "INSERT INTO tickets (entrance, ticketA, ticketC, game, price, ticketId, totalCards) VALUES ($data)";
            $update = "UPDATE available_tickets SET vip=GREATEST(0,vip-$decrease) ";
            $result1 = $this->conn->query($update);
            $result = $this->conn->query($ticketQuery);
            if($result && $update) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function available(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        
        } else {
            return false;
        }
    }

    public function availableNorth(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    public function availableSouth(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    public function availableWest(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    public function availableEast(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    public function availableVIP(){
        $ticketQuery = "SELECT * FROM available_tickets";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0){
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $ticketId = validateInput($this->conn, $id);
        $dostupno = new TicketCOntroller;
        $res = $dostupno->index();
        $ulaz = $dostupno->indexx();
        $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId' LIMIT 1";

        if($res) {
            foreach($res as $row) {
                $total = $row['totalCards'];
                if($ulaz == 'sever'){
                    $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId' LIMIT 1";
                $update = "UPDATE available_tickets SET sever=sever+$total";
                $result1 = $this->conn->query($update);
                $result = $this->conn->query($ticketDeleteQuery);
                } else if($row['entrance'] == 'jug'){
                    $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId' LIMIT 1";
                $update = "UPDATE available_tickets SET jug=jug+$total";
                $result1 = $this->conn->query($update);
                $result = $this->conn->query($ticketDeleteQuery);
                } else if($row['entrance'] == 'zapad'){
                    $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId'LIMIT 1";
                $update = "UPDATE available_tickets SET zapad=zapad+$total";
                $result1 = $this->conn->query($update);
                $result = $this->conn->query($ticketDeleteQuery);
                } else if($row['entrance'] == 'istok'){
                    $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId' LIMIT 1";
                $update = "UPDATE available_tickets SET istok=istok+$total";
                $result1 = $this->conn->query($update);
                $result = $this->conn->query($ticketDeleteQuery);
                } else if($row['entrance'] == 'vip'){
                    $ticketDeleteQuery = "DELETE FROM tickets WHERE id='$ticketId'LIMIT 1";
                $update = "UPDATE available_tickets SET vip=vip+$total";
                $result1 = $this->conn->query($update);
                $result = $this->conn->query($ticketDeleteQuery);
                }
            }
        }

        if($result && $update) {
            return true;
        } else {
            return false;
        }
    }

}

?>