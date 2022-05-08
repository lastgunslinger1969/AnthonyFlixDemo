<?php

namespace classes;

use PDO;

class User
{
    private $con, $sqlData;

    public function __construct($con,$username){
        $this->con = $con;

        $query = $con->prepare("SELECT * FROM users WHERE username=:username");
        $query->bindvalue(":username",$username);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
    }

    public function getFirstName(){
        return $this->sqlData["firstName"];
    }

    public function getLastName(){
        return $this->sqlData["lastName"];
    }

    public function getEmail(){
        return $this->sqlData["email"];
    }

    public function getIsSubscribed(){
        return $this->sqlData["isSubscribed"];
    }
}