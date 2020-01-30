<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 13:38
 */

namespace KITM;


class Employee extends User
{
    protected $position;
    protected $salary;
    protected $contractExpirationDate;

    public function __construct($name, $lastName, $email, $phone, $position = null, $salary = null, $contractExpirationDate=null)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->position = $position;
        $this->salary = $salary;
        $this->contractExpirationDate = $contractExpirationDate;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param null $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return null
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param null $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getContractExpirationDate()
    {
        return $this->contractExpirationDate;
    }

    /**
     * @param mixed $contractExpirationDate
     */
    public function setContractExpirationDate($contractExpirationDate)
    {
        $this->contractExpirationDate = $contractExpirationDate;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }



    public function showAllData()
    {
        $result = [
            "Vardas" => $this->getName(),
            "Pavardė" => $this->getLastName(),
            "El. paštas" => $this->getEmail(),
            "Telefonas" => $this->getPhone(),
            "Komentaras" => $this->getComment(),
            "Sutarties terminas" => $this->getContractExpirationDate(),
            "Pareigos" => $this->getPosition(),
            "Atlyginmas" => $this->getSalary()
        ];

        return $result;
    }

}