<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class MissionManager extends Manager
{
    public function read(Int $missionId){
        $sql = "SELECT * FROM mission WHERE missionId = :missionId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':missionId',$missionId,PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New Mission($values);
        }else{
            return False;
        }
    }

    public function readAllMissions(User $user){
        $missions = [];

        $sql = "SELECT * FROM mission WHERE userEmail = :userEmail";
        $r = $this->db->prepare($sql);
        $r->bindValue(':userEmail',$user->getUserEmail(),PDO::PARAM_STR);
        $r->execute();

        $missionsData = $r->fetchAll(PDO::FETCH_ASSOC);

        foreach ($missionsData as $missionData){
            $missions[] = new Mission($missionData);
        }

        return $missions;
    }

    public function save(Mission $mission){

        // Update
        if($mission->getMissionId()>0){
            return $this->update($mission);
            // Insert
        }else{
            return $this->create($mission);
        }
    }

    private function create(Mission $mission){
        $sql = "INSERT INTO mission (missionName, userEmail, customerId) VALUE (:missionName, :userEmail, :customerId)";
        $r = $this->db->prepare($sql);
        $r->bindValue(':missionName',$mission->getMissionName(),PDO::PARAM_STR);
        $r->bindValue(':userEmail',$mission->getUserEmail(),PDO::PARAM_STR);
        $r->bindValue(':customerId',$mission->getCustomerId(),PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $mission->setMissionId($this->db->lastInsertId());
        }
        return $ok;
    }

    private function update(Mission $mission){
        $sql = "UPDATE expense SET
                missionName = :missionName,
                userEmail = :userEmail,
                customerId = :customerId
                WHERE missionId = :missionId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':missionName',$mission->getMissionName(),PDO::PARAM_STR);
        $r->bindValue(':userEmail',$mission->getUserEmail(),PDO::PARAM_STR);
        $r->bindValue(':customerId',$mission->getCustomerId(),PDO::PARAM_INT);
        $r->bindValue(':missionId',$mission->getMissionId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

    public function delete(Mission $mission){
        $sql = "DELETE FROM mission WHERE missionId = :missionId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':missionId',$mission->getMissionId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

}