<?php


class Test extends Dbh {

    public function getUsers(){
$sql = "SELECT * FROM users";
$stmt = $this->connect()->connect()->query($sql);

while($row = $stmt->fetch()){
    echo $row['users_firstname'].'<br>';
}

    }


    public function getUsersStmt(){
        $sql = "SELECT * FROM users WHERE users_firstname =?  And users_lastname =?";
        $stmt = $this->connect()->connect()->query($sql);

        while($row = $stmt->fetch()){
            echo $row['users_firstname'].'<br>';
        }

    }
}