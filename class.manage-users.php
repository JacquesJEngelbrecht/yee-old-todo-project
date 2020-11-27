<?php

include_once('class.database.php');

class ManageUsers{
    public $link;

    function __construct(){
        $dbConnection = new dbConnection();
        $this->link = $dbConnection->connect();
        return $this->link;
    }
}