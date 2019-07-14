<?php
/**
 * Created by PhpStorm.
 * User: x_sal
 * Date: 27/06/2019
 * Time: 15:53
 */

class SocietyManager extends Manager
{
    public function read(Int $societySiret){
        $sql = "SELECT * FROM society WHERE societySiret = :societySiret";
        $r = $this->db->prepare($sql);
        $r->bindValue(':societySiret',$societySiret,PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New Society($values);
        }else{
            return False;
        }
    }

    public function readAll(){
        $societies = [];

        $sql = "SELECT * FROM society ";
        $results = $this->db->query($sql);
        $societiesData = $results->fetchAll();

        foreach ($societiesData as $societyData){
            $societies[] = new Society($societyData);
        }

        return $societies;

    }

}