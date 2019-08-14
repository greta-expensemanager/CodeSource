<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Mission extends Entity
{
    private $missionId;
    private $missionName;
    private $customerId;
    private $userEmail;

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