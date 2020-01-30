<?php

namespace KITM;

abstract class User
{
    protected $name;
    protected $lastName;
    protected $email;
    protected $phone;
    protected $comment;

    abstract public function __construct($name, $lastName, $email, $phone);
    abstract public function showAllData();

}