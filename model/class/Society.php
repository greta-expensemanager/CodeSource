<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

class Society extends Entity
{
    private $societySiret;
    private $societyName;

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

}