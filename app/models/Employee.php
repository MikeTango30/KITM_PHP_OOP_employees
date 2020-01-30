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

    public function __construct($name, $lastName, $email, $phone, $position = null, $salary = null, $contractExpirationDate)
    {
        parent::__construct($name, $lastName, $email, $phone);
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->position = $position;
        $this->salary = $salary;
        $this->contractExpirationDate = $contractExpirationDate;
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

    public function show()
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