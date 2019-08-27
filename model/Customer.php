<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Customer extends Entity
{
    private $customerId;
    private $customerLastName;
    private $customerFirstName;
    private $societySiret;

    public function __construct($array=null)
    {
        if(is_array($array)){
            $this->hydrate($array);
        }
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerLastName()
    {
        return $this->customerLastName;
    }

    /**
     * @param mixed $customerLastName
     */
    public function setCustomerLastName($customerLastName)
    {
        $this->customerLastName = $customerLastName;
    }

    /**
     * @return mixed
     */
    public function getCustomerFirstName()
    {
        return $this->customerFirstName;
    }

    /**
     * @param mixed $customerName
     */
    public function setCustomerFirstName($customerFirstName)
    {
        $this->customerFirstName = $customerFirstName;
    }

    /**
     * @return mixed
     */
    public function getSocietySiret()
    {
        return $this->societySiret;
    }

    /**
     * @param mixed $societySiret
     */
    public function setSocietySiret($societySiret)
    {
        $this->societySiret = $societySiret;
    }



}