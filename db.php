<?php

class DBconnection {

    protected string $server="127.0.0.1";
    protected $user = "root";
    protected $password="";
    protected string $database ='shop';
    public $conn;

    //create a constructor
    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->user, $this->password, $this->database);
        if($this->conn->connect_error)
        {
            echo 'Failed to connect';
        }
        
    }

    


}
// $dbCreateTbl = new DBconnection();
// $dbCreateTbl->createTable();
