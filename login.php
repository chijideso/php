<?php

require("db.php");
class LoginC extends DBconnection{

    public function login($name, $pass){
        $sql = $this->conn->query("SELECT * FROM costomer_login INNER JOIN customer_profile  WHERE costomer_login.name='$name' AND costomer_login.password='$pass'");
        if($y=$sql->num_rows<1){
            //if ther is no match
            echo 'No mATCH ';
        }
        else{
            session_start();
            $row = $sql->fetch_assoc();
            $_SESSION['id'] = $row['uid'];
            $_SESSION['fname'] = $row['name'];
            $_SESSION['phone'] = $row['phone'];
         
            $_SESSION['profession'] = $row['profession'];
            $_SESSION['address'] = $row['address'];
            //match found
            header("location:profilef.php");
        }
    }

}

