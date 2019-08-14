<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class CustomerManager extends Manager
{
    public function read(Int $customerId){
        $sql = "SELECT * FROM customer WHERE customerId = :customerId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':customerId',$customerId,PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New Client($values);
        }else{
            return False;
        }
    }

    public function readAll(){
        $customers = [];

        $sql = "SELECT * FROM customer ";
        $results = $this->db->query($sql);
        $customersData = $results->fetchAll();

        foreach ($customersData as $customerData){
            $customers[] = new Customer($customerData);
        }

        return $customers;

    }

    public function save(Customer $customer){

        // Update
        if($customer->getCustomerId()>0){
            return $this->update($customer);
        // Insert
        }else{
            return $this->create($customer);
        }
    }

    private function create(Customer $customer){
        $sql = "INSERT INTO customer (customerLastName,customerFirstName, societySiret)VALUE (:customerLastName,:customerFirstName, :societySiret)";
        $r = $this->db->prepare($sql);
        $r->bindValue(':customerLastName',$customer->getCustomerLastName(),PDO::PARAM_STR);
        $r->bindValue(':customerFirstName',$customer->getCustomerName(),PDO::PARAM_STR);
        $r->bindValue(':societySiret',$customer->getPrenom(),PDO::PARAM_STR);
        $ok = $r->execute();

        if($ok){
            $customer->setCustomerId($this->db->lastInsertId());
        }
        return $ok;
    }

    private function update(Customer $customer){
        $sql = "UPDATE customer SET
                customerLastName = :customerLastName,
                customerFirstName = :customerFirstName,
                societySiret = :societySiret
                WHERE customerId = :customerId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':customerLastName',$customer->getCustomerLastName(),PDO::PARAM_STR);
        $r->bindValue(':customerFirstName',$customer->getCustomerName(),PDO::PARAM_STR);
        $r->bindValue(':societySiret',$customer->getPrenom(),PDO::PARAM_STR);
        $r->bindValue(':customerId',$customer->getCustomerId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

    public function delete(Customer $customer){
        $sql = "DELETE FROM customer WHERE customerId = :customerId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':customerId',$customer->getCustomerId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

}