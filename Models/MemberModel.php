<?php

namespace Site_Activ_Aqua\Models;

use Exception;
use Site_Activ_Aqua\Core\BddConnect;
use Site_Activ_Aqua\Entities\Member;

class MemberModel extends BddConnect
{


    public function create(Member $member)
    {
            $this->request = $this->connection->prepare("INSERT INTO member 
            VALUES (NULL, :activity, NOW(), :name, :age, :phone_number, :mail, :adress, :level, :goal, :available, :comment); ");
            $this->request->bindValue(":activity", $member->getActivity());
            $this->request->bindValue(":name", $member->getName());
            $this->request->bindValue(":age", $member->getAge());
            $this->request->bindValue(":phone_number", $member->getPhone_number());
            $this->request->bindValue(":mail", $member->getMail());
            $this->request->bindValue(":adress", $member->getAdress());
            $this->request->bindValue(":level", $member->getLevel());
            $this->request->bindValue(":goal", $member->getGoal());
            $this->request->bindValue(":available", $member->getAvailable());
            $this->request->bindValue(":comment", $member->getComment());
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
