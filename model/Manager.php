<?php
/**
 * Created by PhpStorm.
 * User: Zede
 * Date: 22/07/2019
 * Time: 10:53
 */

abstract class Manager
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=expense_manager;charset=utf8','root','root');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}