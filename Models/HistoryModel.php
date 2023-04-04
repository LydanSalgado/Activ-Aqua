<?php

namespace Site_Activ_Aqua\Models;

use FFI\Exception;
use Site_Activ_Aqua\Core\BddConnect;

class HistoryModel extends BddConnect
{
    public function findAll()
    {
        $this->request = "SELECT * FROM historical ORDER BY send_date ASC, name";
        $result = $this->connection->query($this->request);
        $list = $result->fetchAll();

        return $list;
        
    }


    public function delete(int $id)
    {
        $this->request = $this->connection->prepare("DELETE FROM historical WHERE idHistory = :idHistory");
        $this->request->bindParam(":idHistory", $id);
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
