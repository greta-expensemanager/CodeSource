<?php


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


}