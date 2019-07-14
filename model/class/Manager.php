<?php
/**
 * Created by PhpStorm.
 * User: x_sal
 * Date: 13/06/2019
 * Time: 16:04
 */

abstract class Manager
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=expense_manager;charset=utf8','root','');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}