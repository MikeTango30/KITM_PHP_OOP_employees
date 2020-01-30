<?php

namespace KITM;

class User
{
    protected $name;
    protected $lastName;
    protected $email;
    protected $phone;
    protected $comment;

    public function __construct($name, $lastName, $email, $phone)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
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

    public function show()
    {
        $result = [
            "Vardas" => $this->getName(),
            "Pavardė" => $this->getLastName(),
            "El. paštas" => $this->getEmail(),
            "Telefonas" => $this->getPhone(),
            "Komentaras" => $this->getComment()
        ];

        return $result;
    }


}