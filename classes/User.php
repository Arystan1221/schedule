<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of User
 *
 * @author Arystan
 */
class User extends Table
{
    public $user_id = 0;
    public $lastname = "";
    public $firstname = "";
    public $patronymic = "";
    public $login = "";
    public $pass = "";
    public $gender_id = 0;
    public $birthday;
    public $role_id = 0;
    public $active = 1;

    public function validate()
    {
        return false;
    }
}