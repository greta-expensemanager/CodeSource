<?php
/**
 * Created by PhpStorm.
 * User: x_sal
 * Date: 27/06/2019
 * Time: 15:53
 */

class InvoiceManager extends Manager
{
    public function read(Int $invoiceId, Int $expenseId){
        $sql = "SELECT * FROM invoice WHERE invoiceId = :invoiceId AND expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':invoiceId',$invoiceId,PDO::PARAM_INT);
        $r->bindValue(':expenseId',$expenseId,PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $values = $r->fetch();
            return New Invoice($values);
        }else{
            return False;
        }
    }

    public function readAllInvoices(Expense $expense){
        $invoices = [];

        $sql = "SELECT * FROM invoice WHERE expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':expenseId',$expense->getExpenseId(),PDO::PARAM_INT);
        $r->execute();

        $invoicesData = $r->fetchAll(PDO::FETCH_ASSOC);

        foreach ($invoicesData as $invoiceData){
            $invoices[] = new Invoice($invoiceData);
        }

        return $invoices;
    }

    public function save(Invoice $invoice){

        // Update
        if($invoice->getCustomerId()>0){
            return $this->update($invoice);
        // Insert
        }else{
            return $this->create($invoice);
        }
    }

    private function create(Invoice $invoice){
        $sql = "INSERT INTO invoice (invoiceImage,expenseId)VALUE (:invoiceImage,:expenseId)";
        $r = $this->db->prepare($sql);
        $r->bindValue(':invoiceImage',$invoice->getInvoiceImage(),PDO::PARAM_STR);
        $r->bindValue(':expenseId',$invoice->getExpenseId(),PDO::PARAM_INT);
        $ok = $r->execute();

        if($ok){
            $invoice->setInvoiceId($this->db->lastInsertId());
        }
        return $ok;
    }

    private function update(Invoice $invoice){
        $sql = "UPDATE invoice SET
                invoiceImage = :invoiceImage
                WHERE invoiceId = :invoiceId AND expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':invoiceImage',$invoice->getInvoiceImage(),PDO::PARAM_STR);
        $r->bindValue(':invoiceId',$invoice->getInvoiceId(),PDO::PARAM_INT);
        $r->bindValue(':expenseId',$invoice->getExpenseId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

    public function delete(Invoice $invoice){
        $sql = "DELETE FROM invoice WHERE invoiceId = :invoiceId AND expenseId = :expenseId";
        $r = $this->db->prepare($sql);
        $r->bindValue(':invoiceId',$invoice->getInvoiceId(),PDO::PARAM_INT);
        $r->bindValue(':expenseId',$invoice->getExpenseId(),PDO::PARAM_INT);
        $ok = $r->execute();
        return $ok;
    }

}