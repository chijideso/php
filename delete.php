
<?php
require("db.php");
class Delete extends DBconnection{

    public function del($id)
    {
        $del = $this->conn->query("DELETE FROM shop_users WHERE id=");
    }


}