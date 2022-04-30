<?php

class ContactController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
    
    public function index(){
        $ticketQuery = "SELECT * FROM contact_us";
        $result = $this->conn->query($ticketQuery);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function sendMsg($inputData){
        $data = "'" . implode ( "','", $inputData) . "'";

        $ticketQuery = "INSERT INTO contact_us (name, email, phone, message) VALUES ($data)";
        $result = $this->conn->query($ticketQuery);
        if($result) {
            return true;
        } else {
            return false;
        }
    }


    public function delete($id) {
        $msgId = validateInput($this->conn, $id);
        $dostupno = new ContactCOntroller;
        $res = $dostupno->index();

        if($res) {
            foreach($res as $row) {
                $total = $row['totalCards'];
                $msgDeleteQuery = "DELETE FROM contact_us WHERE id='$msgId' LIMIT 1";
                $result = $this->conn->query($msgDeleteQuery);
            }
        }

        if($result) {
            return true;
        } else {
            return false;
        }
    }

}

?>