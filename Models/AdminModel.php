<?php

namespace Site_Activ_Aqua\Models;

use FFI\Exception;
use Site_Activ_Aqua\Core\BddConnect;

class AdminModel extends BddConnect
{
    public function findAll()
    {
        $this->request = "SELECT * FROM member ORDER BY send_date ";
        $result = $this->connection->query($this->request);
        $list = $result->fetchAll();
        
        return $list;
        
    }


    public function delete(int $id)
    {
        $this->request = $this->connection->prepare("DELETE FROM member WHERE id_member = :id_member");
        $this->request->bindParam(":id_member", $id);
        $this->executeTryCatch();
    }
    public function transfer(int $id)
    {
        $this->request = $this->connection->prepare("INSERT INTO historical 
        SELECT * FROM member WHERE id_member = :id_member; 
        DELETE FROM member WHERE id_member = :id_member");
        $this->request->bindParam(":id_member", $id);
        $this->executeTryCatch();
    }

    private function executeTryCatch()
    {
        try {
            $this->request->execute();
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        $this->request->closeCursor();
    }
}
