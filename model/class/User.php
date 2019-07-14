<?php


class User extends Entity
{
    private $userEmail;
    private $userPassword;
    private $usertype;
    private $societySiret;

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
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * @param mixed $usertype
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
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