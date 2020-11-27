<?php

include_once('class.database.php');

class ManageUsers{
    public $link;

    function __construct(){
        $dbConnection = new dbConnection();
        $this->link = $dbConnection->connect();
        return $this->link;
    }

    function registerUsers($username,$password,$ip_address,$time,$date){
        $query = $this->link->prepare("INSERT INTO users (username,reg_password,ip_address,reg_time,reg_date) VALUES (?,?,?,?,?)");
        $values = [$username,$password,$ip_address,$time,$date];
        $query->execute($values);
        $counts = $query->rowCount();
        return $counts; 
    }

    function loginUsers($username,$password){
        $query = $this->link->query("SELECT * FROM users WHERE username = '$username' AND reg_password = '$password'");
        $rowCount = $query->rowCount();
        return $rowCount;
    }

    function getUserInfo($username){
        $query = $this->link->query("SELECT * FROM users WHERE username = '$username'");
        $rowCount = $query->rowCount();
        if($rowCount == 1) {
            $result = $query->fetchAll();
            return $result;
        } else {
            return $rowCounts;
        }
        
    }
}

$users = new ManageUsers();
//echo $users->registerUsers('Jacques','password','127.0.0.1','12:00','13-01-2018');
