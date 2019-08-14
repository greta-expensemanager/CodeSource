<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Invoice extends Entity
{
    private $invoiceId;
    private $invoiceImage;
    private $expenseId;

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param mixed $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return mixed
     */
    public function getInvoiceImage()
    {
        return $this->invoiceImage;
    }

    /**
     * @param mixed $invoiceImage
     */
    public function setInvoiceImage($invoiceImage)
    {
        $this->invoiceImage = $invoiceImage;
    }

    /**
     * @return mixed
     */
    public function getExpenseId()
    {
        return $this->expenseId;
    }

    /**
     * @param mixed $expenseId
     */
    public function setExpenseId($expenseId)
    {
        $this->expenseId = $expenseId;
    }

}