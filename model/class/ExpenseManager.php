<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class ExpenseManager extends Manager
{
    public function read(Int $expenseId){
        $sql = "SELECT * FROM expense WHERE expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':expenseId',$expenseId,PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New Expense($values);
        }else{
            return False;
        }
    }

    public function readAllExpenses(Mission $mission){
        $expenses = [];

        $sql = "SELECT * FROM expense WHERE missionId = :missionId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':missionId',$mission->getMissionId(),PDO::PARAM_INT);
        $r->execute();

        $expensesData = $r->fetchAll(PDO::FETCH_ASSOC);

        foreach ($expensesData as $expenseData){
            $expenses[] = new Expense($expenseData);
        }

        return $expenses;
    }

    public function save(Expense $expense){

        // Update
        if($expense->getExpenseId()>0){
            return $this->update($expense);
            // Insert
        }else{
            return $this->create($expense);
        }
    }

    private function create(Expense $expense){
        $sql = "INSERT INTO expense (expenseType, expenseDate, expenseStatus, expenseTotal, expenseRefounded, expenseDepart, expenseArrival, expenseDistance, missionId) VALUE
                (:expenseType, :expenseDate, :expenseStatus, :expenseTotal, :expenseRefounded, :expenseDepart, :expenseArrival, :expenseDistance, :missionId)";
        $r = $this->db->prepare($sql);
        $r->bindValue(':expenseType',$expense->getExpenseType(),PDO::PARAM_STR);
        $r->bindValue(':expenseDate',$expense->getExpenseDate(),PDO::PARAM_STR);
        $r->bindValue(':expenseStatus',$expense->getExpenseStatus(),PDO::PARAM_STR);
        $r->bindValue(':expenseTotal',$expense->getExpenseTotal(),PDO::PARAM_STR);
        $r->bindValue(':expenseRefounded',$expense->getExpenseRefounded(),PDO::PARAM_STR);
        $r->bindValue(':expenseDepart',$expense->getExpenseDepart(),PDO::PARAM_STR);
        $r->bindValue(':expenseArrival',$expense->getExpenseArrival(),PDO::PARAM_STR);
        $r->bindValue(':expenseDistance',$expense->getExpenseDistance(),PDO::PARAM_STR);
        $r->bindValue(':missionId',$expense->getMissionId(),PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $expense->setExpenseId($this->db->lastInsertId());
        }
        return $ok;
    }

    private function update(Expense $expense){
        $sql = "UPDATE expense SET
                expenseType = :expenseType,
                expenseDate = :expenseDate,
                expenseStatus = :expenseStatus,
                expenseTotal = :expenseTotal,
                expenseRefounded = :expenseRefounded,
                expenseDepart = :expenseDepart,
                expenseArrival = :expenseArrival,
                expenseDistance = :expenseDistance,
                missionId = :missionId
                WHERE expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':expenseType',$expense->getExpenseType(),PDO::PARAM_STR);
        $r->bindValue(':expenseDate',$expense->getExpenseDate(),PDO::PARAM_STR);
        $r->bindValue(':expenseStatus',$expense->getExpenseStatus(),PDO::PARAM_STR);
        $r->bindValue(':expenseTotal',$expense->getExpenseTotal(),PDO::PARAM_STR);
        $r->bindValue(':expenseRefounded',$expense->getExpenseRefounded(),PDO::PARAM_STR);
        $r->bindValue(':expenseDepart',$expense->getExpenseDepart(),PDO::PARAM_STR);
        $r->bindValue(':expenseArrival',$expense->getExpenseArrival(),PDO::PARAM_STR);
        $r->bindValue(':expenseDistance',$expense->getExpenseDistance(),PDO::PARAM_STR);
        $r->bindValue(':missionId',$expense->getMissionId(),PDO::PARAM_INT);
        $r->bindValue(':expenseId',$expense->getExpenseId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

    public function delete(Expense $expense){
        $sql = "DELETE FROM expense WHERE expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':expenseId',$expense->getExpenseId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

}