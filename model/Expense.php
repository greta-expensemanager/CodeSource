<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Expense extends Entity
{
    private $expenseId;
    private $expenseType;
    private $expenseStatus;
    private $expenseTotal;
    private $expenseDate;
    private $expenseDepart;
    private $expenseArrival;
    private $expenseDistance;
    private $expenseRefounded;
    private $missionId;
    private $missionName;
    private $customerLastName;
    private $customerFirstName;
    private $societyName;
    private $userEmail;


    public function __construct($array=null)
    {
        if(is_array($array)){
            $this->hydrate($array);
        }
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

    /**
     * @return mixed
     */
    public function getExpenseType()
    {
        return $this->expenseType;
    }

    /**
     * @param mixed $expenseType
     */
    public function setExpenseType($expenseType)
    {
        $this->expenseType = $expenseType;
    }

    /**
     * @return mixed
     */
    public function getExpenseStatus()
    {
        return $this->expenseStatus;
    }

    /**
     * @param mixed $expenseStatus
     */
    public function setExpenseStatus($expenseStatus)
    {
        $this->expenseStatus = $expenseStatus;
    }

    /**
     * @return mixed
     */
    public function getExpenseTotal()
    {
        return $this->expenseTotal;
    }

    /**
     * @param mixed $expenseTotal
     */
    public function setExpenseTotal($expenseTotal)
    {
        $this->expenseTotal = $expenseTotal;
    }

    /**
     * @return mixed
     */
    public function getExpenseDate()
    {
        return $this->expenseDate;
    }

    /**
     * @param mixed $expenseDate
     */
    public function setExpenseDate($expenseDate)
    {
        $this->expenseDate = $expenseDate;
    }

    /**
     * @return mixed
     */
    public function getExpenseDepart()
    {
        return $this->expenseDepart;
    }

    /**
     * @param mixed $expenseDepart
     */
    public function setExpenseDepart($expenseDepart)
    {
        $this->expenseDepart = $expenseDepart;
    }

    /**
     * @return mixed
     */
    public function getExpenseArrival()
    {
        return $this->expenseArrival;
    }

    /**
     * @param mixed $expenseArrival
     */
    public function setExpenseArrival($expenseArrival)
    {
        $this->expenseArrival = $expenseArrival;
    }

    /**
     * @return mixed
     */
    public function getExpenseDistance()
    {
        return $this->expenseDistance;
    }

    /**
     * @param mixed $expenseDistance
     */
    public function setExpenseDistance($expenseDistance)
    {
        $this->expenseDistance = $expenseDistance;
    }

    /**
     * @return mixed
     */
    public function getExpenseRefounded()
    {
        return $this->expenseRefounded;
    }

    /**
     * @param mixed $expenseRefounded
     */
    public function setExpenseRefounded($expenseRefounded)
    {
        $this->expenseRefounded = $expenseRefounded;
    }

    /**
     * @return mixed
     */
    public function getMissionId()
    {
        return $this->missionId;
    }

    /**
     * @param mixed $missionId
     */
    public function setMissionId($missionId)
    {
        $this->missionId = $missionId;
    }

    /**
     * @return mixed
     */
    public function getMissionName()
    {
        return $this->missionName;
    }

    /**
     * @param mixed $missionName
     */
    public function setMissionName($missionName)
    {
        $this->missionName = $missionName;
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
     * @param mixed $customerFirstName
     */
    public function setCustomerFirstName($customerFirstName)
    {
        $this->customerFirstName = $customerFirstName;
    }

    /**
     * @return mixed
     */
    public function getSocietyName()
    {
        return $this->societyName;
    }

    /**
     * @param mixed $societyName
     */
    public function setSocietyName($societyName)
    {
        $this->societyName = $societyName;
    }

    /**
     * @return mixed
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * @param mixed $userEmail
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }
}