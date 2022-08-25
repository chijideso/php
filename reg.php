<?php

require("db.php");
class Reg extends DBconnection{

    // public function createTable()
    // {
    //    $SQL= $this->conn->query("CREATE TABLE shop_users (id int(200) NOT NULL AUTO_INCREMENT,username varchar(200) NOT NULL, password varchar(200) NOT NULL,
    //          PRIMARY KEY (id)
    //     )
    //     ");
    //     if($SQL){echo "TABLE CREATED SUCCESSFULLY";}
    //     else{echo "Failed CREATING TABLE". $this->conn->error;}
    // }
    
public function insertUser($fname,$phone,$pro,$address,$username,$amount,$password)
{
    $uid =rand(9,999);
    // $insertSQL = $this->conn->query("INSERT INTO shop_users VALUES(0,'$uid','$username','$password')");
    // $insertSQLprofile = $this->conn->query("INSERT INTO profile VALUES
    // (0,'$uid','$fname','$phone','$pro','$address')");
    if($this->conn->query("INSERT INTO costomer_login VALUES(0,'$uid','$username','$password')") && 
     $this->conn->query("INSERT INTO customer_profile VALUES(0,'$uid','$fname','$phone','$pro','$address')")&&
     $this->conn->query("INSERT INTO finance VALUES(0,'$uid','$amount')"))
    {
        echo "User Inserted";
    }
    else{
        echo 'User Creation Failed'.$this->conn->error;
    }
}
}
// $reg = new Reg(); //Object
// $reg->createTable(); //Calling Method

if(isset($_POST['btnR'])) //register
{
    $fname = $_POST['fname'];
    $phone = $_POST['phone'];
    $pro = $_POST['pro'];
    $amount = $_POST['amount'];
    $address = $_POST['address'];

    $username = $_POST['userName'];
    $password = sha1($_POST['password']);
    $reg = new Reg(); //Object
//$reg->createTable(); //Calling Method
    $reg->insertUser($fname,$phone,$pro,$address,$username,$amount,$password);

}



