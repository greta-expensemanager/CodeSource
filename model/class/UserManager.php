<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class UserManager extends Manager
{
    public function read(Int $userEmail){
        $sql = "SELECT * FROM user WHERE userEmail = :userEmail";
        $r = $this->db->prepare($sql);
        $r->bindValue(':userEmail',$userEmail,PDO::PARAM_STR);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New User($values);
        }else{
            return False;
        }
    }

    public function readAll(){
        $users = [];

        $sql = "SELECT * FROM user";
        $results = $this->db->query($sql);
        $usersData = $results->fetchAll();

        foreach ($usersData as $userData){
            $users[] = new User($userData);
        }

        return $users;

    }

}