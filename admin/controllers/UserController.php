<?php

class UserController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
    
    public function index(){
        $playerQuery = "SELECT * FROM users";
        $result = $this->conn->query($playerQuery);
        if($result->num_rows > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function delete($id) {
        $userId = validateInput($this->conn, $id);
        $userDeleteQuery = "DELETE FROM users WHERE id='$userId' LIMIT 1";
        $result = $this->conn->query($userDeleteQuery);
        if($result) {
            return true;
        } else {
            return false;
        }
    }
}

?>