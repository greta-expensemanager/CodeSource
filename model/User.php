<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class User extends Entity
{
    private $userEmail;
    private $userPassword;
    private $userType;
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

    /**
     * @return mixed
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * @param mixed $userPassword
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    /**
     * @return mixed
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * @param mixed $userType
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
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