<?php
require_once("db.php");
class Profile extends DBconnection{


    public function fetchById($id)
    {
        $sql = $this->conn->query("SELECT * FROM shop_users WHERE id='$id'");
        if($sql->num_rows<1)
        {
            return false;
        }
        else{
            while($rows = $sql->fetch_assoc())
            {
                return $rows;
            }
        }
    }

    public function fetchByAll()
    {
        $sql = $this->conn->query("SELECT * FROM shop_users ");
        if($sql->num_rows<1)
        {
            return false;
        }
        else{
           // return $sql;
            while($rows = $sql->fetch_assoc())
            {
            return  $rows;
            }
        }
    }
}